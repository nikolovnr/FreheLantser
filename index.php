<?php

session_start();

// enable on-demand class loader
require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));
/*
//frehelantser.ipd8.info
DB::$dbName = 'cp4724_frehelantser';
DB::$user = 'cp4724_frehelant';
DB::$password = 'HoeEw2DFIagZ';
DB::$host = 'ipd.info';
*/

//Nathalie
DB::$dbName = 'frehelantser';
DB::$user = 'frehelantser';
DB::$password = 'Q4MGJPYZDtzhSZdv';
DB::$host = 'ipd.info';

//Nikolay HOME
//DB::$dbName = 'frehelantser';
//DB::$user = 'frehelantser';
//DB::$password = 'RHam3MzPjMBwvrWH';

/*
//Nikolay SCHOOL
DB::$dbName = 'frehelantser';
DB::$user = 'frehelantser';
DB::$password = 'ZTs9AZyyPsyGman7';
*/

DB::$error_handler = 'sql_error_handler';
DB::$nonsql_error_handler = 'nonsql_error_handler';

function nonsql_error_handler($params) {
    global $app, $log;
    $log->error("Database error: " . $params['error']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die;
}

function sql_error_handler($params) {
    global $app, $log;
    $log->error("SQL error: " . $params['error']);
    $log->error(" in query: " . $params['query']);
    http_response_code(500);
    $app->render('error_internal.html.twig');
    die; // don't want to keep going if a query broke
}

// Slim creation and setup
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()///////////////////////////what is that?
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');


\Slim\Route::setDefaultConditions(array(
    'id' => '\d+',
    'firstName' => '[A-Za-z]{3,50}',
    'lastName' => '[A-Za-z]{3,50}',
    'username' => '[A-Za-z]{3,50}'
)); 

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}

///////////////////////////////////////////////////////////////////isUserValid()
function isUserValid($user, &$error) {    
    //firstname check: must be 50 characters long max
    if ((strlen($firstname) < 3) || (strlen($firstname) > 50)) {        
        $error = 'First name must be between 3 and 50 characters long.';
        return FALSE;
    }
    
    //lastname check: must be 50 characters long max
    if ((strlen($lastname) < 3) || (strlen($lastname) > 50)) {        
        $error = 'Last name must be between 3 and 50 characters long.';
        return FALSE;
    }
    
    //country check: a value must be picked
    
    //username check: must be 50 characters long max
    if ((strlen($username) < 3) || (strlen($username) > 50)) {        
        $error = 'Username must be between 3 and 50 characters long.';
        return FALSE;
    }
    
    //email check: must be 250 characters long max
    if ((strlen($email) < 10) || (strlen($email) > 250)) {        
        $error = 'Email must be between 10 and 250 characters long.';
        return FALSE;
    }
    
    //email check: looks like a valid email & is already registered
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {        
        $error = 'It doesn\'t look like a valid email.';        
        return FALSE;
    }else{
        $user = DB::queryFirstRow("SELECT ID FROM users WHERE email=%s", $email);        
        if ($user) {            
            return FALSE;
        }
    }
    
    //password check: must be 50 characters long max (8 min)
    if ((strlen($password) < 8) || (strlen($password) > 50)) {        
        $error = 'Password must be between 8 and 50 characters long.';
        return FALSE;
    }
            
    //password check: REGEX validation
    //^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[-+_!@#$%^&*()-+=.,?]).+$
    if (!preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[-+_!@#$%^&*()-+=.,?])/', $password)){        
        $error = '1 of each: uppercase, lowercase, digit, special character.';
        return FALSE;     
    }
       
    //password check: both passwords must be the same
    if ($password != $password2){        
        $error = 'Both passwords must be the same.';        
        return FALSE;
    } 
    
    return TRUE;
}


function getAuthUserID() {
    global $app, $log;
    $username = $app->request->headers("PHP_AUTH_USER");
    $password = $app->request->headers("PHP_AUTH_PW");
    if ($username && $password) {
        $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $username);
        if ($row && $row['password'] == $password) {
            return $row['ID'];
        }
    }
    $log->debug("BASIC auth failed for user " . $username);
    $app->response->status(401); // Access denied, authentication required
    $app->response->header('WWW-Authenticate', "Basic realm=TodoApp");
    return FALSE;
}





// HEAD
////////////////////////////////////////////////////////////////////////////////
//State 1: First show HOME
$app->get('/', function() use ($app, $log){
    $app->render('index.html.twig');
});

////////////////////////////////////////////////////////////////////////////////
//State 1: First show REGISTER
$app->get('/register', function() use ($app, $log){
    $app->render('register.html.twig');
});

//State 2: Submission REGISTER 
$app->post('/register(/:id)', function($id='') use ($app, $log){
    $firstname = $app->request->post('firstName');
    $lastname = $app->request->post('lastName');
    $country = $app->request->post('country');
    $username = $app->request->post('username');
    $email = $app->request->post('email');
    $password = $app->request->post('password');
    $password2 = $app->request->post('password2');
    $valueList = array(
        'firstName' => $firstname,
        'lastName' => $lastname,
        'country' => $country,
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'password' => $password
        );
    
    $errorList = array();

       
    
    //List of errors
    if ($errorList) {
        echo "hello";
        //State 3: Failed submission
        $app->render('register.html.twig', array(
            'errorList' => $errorList,
            'v' => $valueList
        ));
    } else {
        //State 2: Successful submission
        //inserting into database
        if($id===''){
        DB::insert('users', 
                array(
        'firstName' => $firstname,
        'lastName' => $lastname,
        
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'password' => hash('sha256', $password)
        ));
        $id=DB::insertId();
        $log->debug("User created with ID=".$id);
        }
        //Show the registration creation
        $app->render('register_success.html.twig', 
                array(                
        'username' => $username,
        'email' => $email,
        ));
    }
});

////////////////////////////////////////////////////////////////////////////////
//State 1: First show LOGIN
$app->get('/login', function() use ($app, $log){
    $app->render('login.html.twig');
});

//State 2: Submission LOGIN
$app->post('/login(/:id)', function($id='') use ($app, $log){ 
    $username = $app->request->post('username');
    $email = $app->request->post('email');
    $password = $app->request->post('password');    
    $valueList = array(
        'username' => $username,
        'email' => $email,
        'password' => $password       
        );
    //Fetching user
    $sql=DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    if(!$sql){
        $app->render("login_notfound.html.twig");        
    }else{
        //Show the registration creation
        //unset($user['password']);
        //$_SESSION['user']=$user;
        $log->debug("User login with ID=". $id."From IP:".$_SERVER['REMOTE_ADDR']);
        $app->render('login_success.html.twig', array(
            'name' => $sql['name'])
        );
    }
});

////////////////////////////////////////////////////////////////////////////////
//Logout
$app->get('/logout', function() use ($app, $log){
    if($_SESSION['user']){
    unset($_SESSION['user']);
    }
    $app->render('logout_success.html.twig');
});


$app->get('/projects', function() use ($app, $log) {
    $app->render('project_auction.html.twig');
// e8d54ffca74043970bdf87c9a44b3517eb491721
});

$app->run();
