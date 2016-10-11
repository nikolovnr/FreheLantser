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
DB::$host = 'ipd8.info';
*/

/*
//Nathalie HOME
DB::$dbName = 'frehelantser';
DB::$user = 'frehelantser';
DB::$password = 'Q4MGJPYZDtzhSZdv';
//DB::$host = 'ipd.info';
*/
//Nikolay HOME
DB::$dbName = 'frehelantser';
DB::$user = 'frehelantser';
DB::$password = 'RHam3MzPjMBwvrWH';

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
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');


\Slim\Route::setDefaultConditions(array(
    'id' => '\d+',
    'firstname' => '[A-Za-z]{3,50}',
    'lastname' => '[A-Za-z]{3,50}',
    'username' => '[A-Za-z]{3,50}'
)); 



function isValidProject ($prj, &$error, $skipID = FALSE) {
    
    return TRUE;
}
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
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
    $app->response->header('WWW-Authenticate', "Basic realm=FreheLantserApp");
    return FALSE;
}

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
    $firstname = $app->request->post('firstname');
    $lastname = $app->request->post('lastname');
    $country = $app->request->post('country');
    $username = $app->request->post('username');
    $email = $app->request->post('email');
    $password = $app->request->post('password');
    $password2 = $app->request->post('password2');
    $valueList = array(
        'firstname' => $firstname,
        'lastname' => $lastname,
        'country' => $country,
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'password' => $password
        );    
    $errorList = array();
    
    //firstname check: must be 50 characters long max
    if ((strlen($firstname) < 3) || (strlen($firstname) > 50)) {
        array_push($errorList,
                "First name must be between 3 and 50 characters long.");
        unset($valueList['firstname']);
    }
    
    //lastname check: must be 50 characters long max
    if ((strlen($lastname) < 3) || (strlen($lastname) > 50)) {
        array_push($errorList,
                "Last name must be between 3 and 50 characters long.");
        unset($valueList['lastname']);
    }
    
    //country check: a value must be picked
    
    
    //username check: must be 50 characters long max
    if ((strlen($username) < 3) || (strlen($username) > 50)) {        
        array_push($errorList,
                "Username must be between 3 and 50 characters long.");
        unset($valueList['username']);
    }
    
    //email check: must be 250 characters long max
    if ((strlen($email) < 10) || (strlen($email) > 250)) {        
        array_push($errorList,
                "Email must be between 10 and 250 characters long.");
        unset($valueList['email']);
    }
    
    //email check: looks like a valid email & is already registered
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {        
        array_push($errorList,
                "It doesn\'t look like a valid email.");        
        unset($valueList['email']);
    }else{
        $user = DB::queryFirstRow("SELECT ID FROM users WHERE email=%s", $email);        
        if ($user) {            
            unset($valueList['email']);
        }
    }
    
    //password check: must be 50 characters long max (8 min)
    if ((strlen($password) < 8) || (strlen($password) > 50)) {        
        array_push($errorList,
                "Password must be between 8 and 50 characters long.");
        unset($valueList['password']);
    }
            
    //password check: REGEX validation
    //^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[-+_!@#$%^&*()-+=.,?]).+$
    if (!preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[-+_!@#$%^&*()-+=.,?])/', $password)){        
        array_push($errorList,
                "1 of each: uppercase, lowercase, digit, special character.");
        unset($valueList['password']);     
    }
       
    //password check: both passwords must be the same
    if ($password != $password2){        
        array_push($errorList,
                "Both passwords must be the same.");        
        unset($valueList['password2']);
    }
    
    //List of errors
    if ($errorList) {        
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
        'country' => $country,
        'username' => $username,
        'email' => $email,       
        'password' => hash('sha256', $password)
        ));
        $id=DB::insertId();
        $log->debug("User created with ID=".$id);
        }
        //Show the registration creation
        $app->render('register_success.html.twig', 
                array(                
        'firstname' => $firstname,
        'lastname' => $lastname,
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
        'firstname' => $firstname,
        'lastname' => $lastname,
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
            'username' => $username,           
            'email' => $email
        ));
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

////////////////////////////////////////////////////////////////////////////////
//State 1: First show TERMS AND CONDITIONS
$app->get('/termsandconditions', function() use ($app, $log){
    $app->render('termsandconditions.html.twig');
});

$app->get('/projects', function() use ($app, $log) {
    //$userID=getAuthUserID();
    //if (!$userID) return;
    $recordList = DB::query("SELECT * FROM projects");
    echo json_encode($recordList, JSON_PRETTY_PRINT);
    //$app->render('project_auction.html.twig', $recordList);
});

$app->get('/projects/:ID', function($ID) use ($app) {
//    sleep(1);
    $record = DB::queryFirstRow("SELECT * FROM projects WHERE ID=%d", $ID);
    // 404 if record not found
    if (!$record) {
        $app->response->setStatus(404);
        echo json_encode("Record not found");
        return;
    }
    echo json_encode($record, JSON_PRETTY_PRINT);
});

$app->post('/projects', function() use ($app, $log) {
    $body = $app->request->getBody();
    $record = json_decode($body, TRUE);
    // FIXME: verify $record contains all and only fields required with valid values
    if (!isValidProject($record, $error, TRUE)) {
        $app->response->setStatus(400);
        $log->debug("POST /projects verification failed: " . $error);
        echo json_encode($error);
        //echo json_encode("Bad request - data validation failed");
        return;
    }
    DB::insert('projects', $record);
    echo DB::insertId();
    // POST / INSERT is special - returns 201
    $app->response->setStatus(201);
});

$app->put('/projects/:ID', function($ID) use ($app) {
    $body = $app->request->getBody();
    $record = json_decode($body, TRUE);
    $record['ID'] = $ID; // prevent changing of ID
    // FIXME: verify $record contains all and only fields required with valid values
    if (!isValidProject($record, $error)) {
        $app->response->setStatus(400);
        $log->debug("POST /projects verification failed: " . $error);
        echo json_encode("Bad request - data validation failed");
        return;
    }
    DB::update('projects', $record, "ID=%d", $ID);
    echo json_encode(TRUE); // same as: echo 'true';
});

$app->delete('/projects/:ID', function($ID) {
    DB::delete('projects', "ID=%d", $ID);
    echo 'true';
});

$app->get('/jobs/:ID', function($ID) use ($app) {
//    sleep(1);
    $jobsList = DB::query("SELECT * FROM jobs WHERE projectID=%d", $ID);
    // 404 if record not found
    if (!$jobsList) {
        $app->response->setStatus(404);
        echo json_encode("Record not found");
        return;
    }
    echo json_encode($jobsList, JSON_PRETTY_PRINT);
});

$app->run();
