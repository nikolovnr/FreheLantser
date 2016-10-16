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



//if ($_SERVER['SERVER_NAME'] == 'localhost') {
//Nathalie HOME
DB::$dbName = 'frehelantser';
DB::$user = 'frehelantser';
DB::$password = 'Q4MGJPYZDtzhSZdv';
//DB::$host = 'ipd.info';
//Nikolay HOME
//DB::$dbName = 'frehelantser';
//DB::$user = 'frehelantser';
//DB::$password = 'RHam3MzPjMBwvrWH';
/*
  //Nikolay SCHOOL
  DB::$dbName = 'frehelantser';
  DB::$user = 'frehelantser';
  DB::$password = 'ZTs9AZyyPsyGman7';

  } else {
  //frehelantser.ipd8.info
  DB::$dbName = 'cp4724_frehelantser';
  DB::$user = 'cp4724_frehelant';
  DB::$password = 'HoeEw2DFIagZ';
  DB::$host = 'ipd8.info';
  } */


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
    'lastname' => '[A-Za-z]{3,50}'
));

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}

//Next two lines gracefully shared by Tina to pass global variable to all the twigs
$twig = $app->view()->getEnvironment();
$twig->addGlobal('user', $_SESSION['user']);

function isValidProject($prj, &$error, $skipID = FALSE) {

    return TRUE;
}

function isValidJob($prj, &$error, $skipID = FALSE) {

    return TRUE;
}

////////////////////////////////////////////////////////////////////email exists
$app->get('/emailexists/:email', function($email) use ($app, $log) {
    $user = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    if ($user) {
        echo TRUE;
    } else {
        echo FALSE;
    }
});

function getAuthUserID() {
    global $app, $log;
    $password = $app->request->headers("PHP_AUTH_PW");
    if ($password) {
        $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
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
$app->get('/', function() use ($app) {
    $app->render('index.html.twig');
});

////////////////////////////////////////////////////////////////////////////////
//State 1: First show HELLO (just a testing page)
$app->get('/hello', function() use ($app) {
    $app->render('hello.html.twig');
});

////////////////////////////////////////////////////////////////////////////////
//State 1: First show HOW_IT_WORKS_RECRUITER
$app->get('/how_it_works_recruiter', function() use ($app) {
    $app->render('how_it_works_recruiter.html.twig');
});

////////////////////////////////////////////////////////////////////////////////
//State 1: First show HOW_IT_WORKS_FREELANCER
$app->get('/how_it_works_freelancer', function() use ($app) {
    $app->render('how_it_works_freelancer.html.twig');
});


////////////////////////////////////////////////////////////////////////////////
//State 1: First show REGISTER
$app->get('/register', function() use ($app, $log) {
    $app->render('register.html.twig');
});

//Submission REGISTER 
$app->post('/register(/:id)', function($id = '') use ($app, $log) {
    $firstname = $app->request->post('firstname');
    $lastname = $app->request->post('lastname');
    $country = $app->request->post('country');
    $email = $app->request->post('email');
    $password = $app->request->post('password');
    $password2 = $app->request->post('password2');
    $valueList = array(
        'firstname' => $firstname,
        'lastname' => $lastname,
        'country' => $country,
        'email' => $email,
        'password' => $password,
        'password' => $password
    );
    $errorList = array();

    //firstname check: must be 50 characters long max
    if ((strlen($firstname) < 3) || (strlen($firstname) > 50)) {
        array_push($errorList, "First name must be between 3 and 50 characters long.");
        unset($valueList['firstname']);
    }

    //lastname check: must be 50 characters long max
    if ((strlen($lastname) < 3) || (strlen($lastname) > 50)) {
        array_push($errorList, "Last name must be between 3 and 50 characters long.");
        unset($valueList['lastname']);
    }

    //country check: a value must be picked    
    //email check: must be 250 characters long max
    if ((strlen($email) < 10) || (strlen($email) > 250)) {
        array_push($errorList, "Email must be between 10 and 250 characters long.");
        unset($valueList['email']);
    }

    //email check: looks like a valid email & is already registered
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        array_push($errorList, "It doesn\'t look like a valid email.");
        unset($valueList['email']);
    } else {
        $user = DB::queryFirstRow("SELECT ID FROM users WHERE email=%s", $email);
        if ($user) {
            unset($valueList['email']);
        }
    }

    //password check: must be 50 characters long max (8 min)
    if ((strlen($password) < 8) || (strlen($password) > 50)) {
        array_push($errorList, "Password must be between 8 and 50 characters long.");
        unset($valueList['password']);
    }

    //password check: REGEX validation
    if (!preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[-+_!@#$%^&*()-+=.,?])/', $password)) {
        array_push($errorList, "1 of each: uppercase, lowercase, digit, special character.");
        unset($valueList['password']);
    }

    //password check: both passwords must be the same
    if ($password != $password2) {
        array_push($errorList, "Both passwords must be the same.");
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
        if ($id === '') {
            DB::insert('users', array(
                'firstName' => $firstname,
                'lastName' => $lastname,
                'country' => $country,
                'email' => $email,
                'password' => hash('sha256', $password)
            ));
            $id = DB::insertId();
            $log->debug("User created with ID=" . $id);
        }
        //Show the registration creation
        $app->render('register_success.html.twig', array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
        ));
    }
});

////////////////////////////////////////////////////////////////////////////////
//generate random string for password reset
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

////////////////////////////////////////////password reset verification function
// returns TRUE if password is strong enough,
// otherwise returns string describing the problem
function verifyPassword($password) {
    if ((strlen($password) < 8) ||
            (strlen($password) > 50) ||
            (!preg_match('/[A-Z]/', $password)) ||
            (!preg_match('/[a-z]/', $password)) ||
            (!preg_match('/[0-9]/', $password)) ||
            (!preg_match('/[;\'".,<>`~|!@#$%^&*()_+=-]/', $password))) {
        return "Password must be minimum 8 characters long, " .
                "maximum 50 characters long, " .
                "contain at least one upper case, one lower case, " .
                "one digit, one special character";
    }
    return TRUE;
}

// PASSWORD RESET (GET & POST)
$app->map('/password_reset', function () use ($app, $log) {
    if ($app->request()->isGet()) {
        $app->render('password_reset.html.twig');
    } else {
        $email = $app->request()->post('email');
        $user = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
        if ($user) {
            $app->render('password_reset_success.html.twig');
            $secretToken = generateRandomString(50);
            // VERSION 2: insert-update
            DB::insertUpdate('passwordresets', array(
                'userID' => $user['ID'],
                'secretToken' => $secretToken,
                'expiryDateTime' => date("Y-m-d H:i:s", strtotime("+24 hours"))
            ));
            // email user
            $url = 'http://' . $_SERVER['SERVER_NAME'] . '/password_reset/' . $secretToken;
            $html = $app->view()->render('email_password_reset.html.twig', array(
                'firstname' => $user['firstname'],
                'lastname' => $user['lastname'],
                'url' => $url
            ));
            $headers = "MIME-Version: 1.0\r\n";
            $headers.= "Content-Type: text/html; charset=UTF-8\r\n";
            $headers.= "From: Noreply <noreply@ipd8.info>\r\n";
            $headers.= "To: " . htmlentities($user['name']) . " <" . $email . ">\r\n";

            mail($email, "Password reset from FreheLantser", $html, $headers);
        } else {
            $app->render('password_reset.html.twig', array('error' => TRUE));
        }
    }
})->via('GET', 'POST');

$app->map('/password_reset/:secretToken', function($secretToken) use ($app) {
    $row = DB::queryFirstRow("SELECT * FROM passwordresets WHERE secretToken=%s", $secretToken);
    if (!$row) {
        $app->render('password_reset_notfound_expired.html.twig');
        return;
    }
    if (strtotime($row['expiryDateTime']) < time()) {
        $app->render('password_reset_notfound_expired.html.twig');
        return;
    }
    if ($app->request()->isGet()) {
        $app->render('password_reset_form.html.twig');
    } else {
        $password = $app->request()->post('password');
        $password2 = $app->request()->post('password2');
        $errorList = array();
        $msg = verifyPassword($password);
        if ($msg !== TRUE) {
            array_push($errorList, $msg);
        } else if ($password != $password2) {
            array_push($errorList, "Both passwords have to be identical.");
        }
        if ($errorList) {
            $app->render('password_reset_form.html.twig', array(
                'errorList' => $errorList
            ));
        } else {
            // State2: success - reset the password
            DB::update('users', array(
                'password' => hash('sha256', $password)
                    //'password' => password_hash($password, CRYPT_BLOWFISH)
                    ), "ID=%d", $row['userID']);
            DB::delete('passwordresets', 'secretToken=%s', $secretToken);
            $app->render('password_reset_form_success.html.twig');
        }
    }
})->via('GET', 'POST');

////////////////////////////////////////////////////////////////////////////////
//State 1: First show LOGIN
$app->get('/login', function() use ($app, $log) {
    $app->render('login.html.twig');
});

//Submission LOGIN
$app->post('/login(/:id)', function($id = '') use ($app, $log) {
    $email = $app->request->post('email');
    $password = $app->request->post('password');
    $valueList = array(
        'email' => $email,
        'password' => $password
    );
    $user = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    //  print_r($user);
    if (!$user) {
        $log->debug(sprintf("User failed for email %s from IP %s", $email, $_SERVER['REMOTE_ADDR']));
        $app->render('login.html.twig', array('loginFailed' => TRUE));
    } else {
        //password MUST be compared in PHP because SQL is case-insensitive      
        if ($user['password'] == hash('sha256', $password)) {
            //LOGIN not found
            $log->debug(sprintf("User failed for email %s from IP %s", $email, $_SERVER['REMOTE_ADDR']));
            $app->render('login_notfound.html.twig', array('loginFailed' => TRUE));
        } else {
            //LOGIN success
            unset($user['password']);
            $_SESSION['user'] = $user;
            $log->debug(sprintf("User %s logged in successfuly from IP %s", $user['ID'], $_SERVER['REMOTE_ADDR']));
            print_r($_SESSION);
            $app->render('login_success.html.twig', array(
                'firstname' => $user['firstName'],
                'lastname' => $user['lastName'],
                'email' => $email
            ));
        }
    }
});

////////////////////////////////////////////////////////////////////////////////
//Logout
$app->get('/logout', function() use ($app, $log) {
    if ($_SESSION['user']) {
        unset($_SESSION['user']);
    }
    $app->render('logout_success.html.twig');
});

////////////////////////////////////////////////////////////////////////////////
//State 1: First show TERMS AND CONDITIONS
$app->get('/termsandconditions', function() use ($app, $log) {
    $app->render('termsandconditions.html.twig');
});

////////////////////////////////////////////////////////////////////////////////
//State 1: First show CREATE PROJECTS
$app->get('/createprojects', function() use ($app, $log) {
    $app->render('create_projects.html.twig', $recordList);
});

//AJAX retreive PROJECTS
$app->get('/projects', function() use ($app, $log) {
    //$userID=getAuthUserID();
    //if (!$userID) return;
    $recordList = DB::query("SELECT * FROM projects");
    echo json_encode($recordList, JSON_PRETTY_PRINT);
    $app->render('create_projects.html.twig', $recordList);
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

//State 2: Submission PROJECTS
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

////////////////////////////////////////////////////////////////////////////////
//State 1: First show JOBS
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

$app->get('/job/:ID', function($ID) use ($app) {
//    sleep(1);
    $jobsList = DB::queryFirstRow("SELECT * FROM jobs WHERE ID=%d", $ID);
    // 404 if record not found
    if (!$jobsList) {
        $app->response->setStatus(404);
        echo json_encode("Record not found");
        return;
    }
    echo json_encode($jobsList, JSON_PRETTY_PRINT);
});

$app->post('/job', function() use ($app, $log) {
    $body = $app->request->getBody();
    $record = json_decode($body, TRUE);
    // FIXME: verify $record contains all and only fields required with valid values
    if (!isValidJob($record, $error, TRUE)) {
        $app->response->setStatus(400);
        $log->debug("POST /jobs verification failed: " . $error);
        echo json_encode($error);
        //echo json_encode("Bad request - data validation failed");
        return;
    }
    DB::insert('jobs', $record);
    echo DB::insertId();
    // POST / INSERT is special - returns 201
    $app->response->setStatus(201);
});

$app->put('/job/:ID', function($ID) use ($app) {
    $body = $app->request->getBody();
    $record = json_decode($body, TRUE);
    $record['ID'] = $ID; // prevent changing of ID
    // FIXME: verify $record contains all and only fields required with valid values
    if (!isValidJob($record, $error)) {
        $app->response->setStatus(400);
        $log->debug("PUT /job verification failed: " . $error);
        echo json_encode("Bad request - data validation failed");
        return;
    }
    DB::update('jobs', $record, "ID=%d", $ID);
    echo json_encode(TRUE); // same as: echo 'true';
});

$app->delete('/job/:ID', function($ID) {
    DB::delete('jobs', "ID=%d", $ID);
    echo 'true';
});


////////////////////////////////////////////////////////////////////////////////
//Sate 1: First show FREELANCER PORTFOLIO
$app->get('/freelancer', function() use ($app, $log) {
    $app->render('freelancer_portfolio.html.twig');
});

//State 2: Submission FREELANCER PORTFOLIO    
$app->post('/freelancer(/:id)', function($id = '') use ($app, $log) {
    //Next lines to allow freelancer to upload his pictures
    if (isset($_POST["mypicture"])) {
        $target_dir = "uploads/";
        $max_file_size = 5 * 1024 * 1024;
        $fileUpload = $_FILES['mypicture'];
        $check = getimagesize($fileUpload["tmp_name"]);
        if (!$check) {
            die("Error: This file was not an image file.");
        }
        switch ($check['mime']) {
            case 'image/bmp':
            case 'image/gif':
            case 'image/jpeg':
            case 'image/png':
                break;
            default :
                die("Error: Only accepting valid bmp, gif, jpg and png files.");
        }
        if ($fileUpload['size'] > $max_file_size) {
            die("Error: File too big, maximum accepted is $max_file_size bytes.");
        }
        //generating our own file name, preventing SQL injection
        $file_extension = explode('/', $check['mime'])[1];
        $target_file = $target_dir . md5($fileUpload["name"] . time()) . '.' . $file_extension;

        if (move_uploaded_file($fileUpload["tmp_name"], $target_file)) {
            alert("The file " . basename($fileUpload["name"]) . " has been uploaded.");                       
        } else {
            alert("Sorry, there was an error uploading your file.");
        }
        DB::update('users', array(
            'mypicture'=>$target_file
        ), 'ID=%d', $_SESSION['user']['ID']);        
        $app->render('freelancer_portfolio_update.html.twig');
    }
    ////////////////////////////////////////////////end uploading picture file
    //retrieving inputs from form
    //$skills = $app->request->post('skills');
    //$overview = $app->request->post('overview');
    //$errorList = array();

    //$log->debug("session: " . $_SESSION);
    //$freelancer=DB::queryFirstRow("SELECT * FROM users WHERE ID=%d", $_SESSION['user']['ID']);
    //keep the next line it comes from Greg, about rejecting bad stuff from array
    //array array_intersect ( array $array1 , array $array2 [, array $... ] )
    if (isset($_POST["skills"])) {
        $skills = $app->request->post('skills');
        DB::update('users', array(
            'skills' => json_encode($skills)
                ), 'ID=%d', $_SESSION['user']['ID']);        
        $app->render('freelancer_portfolio_update.html.twig');
    }//end if isset skills

    if (isset($_POST["overview"])) {
        $overview = $app->request->post('overview');
        $errorList = array();
        //overview check: must be between 5 and 1000 characters long
        if ((strlen($overview) < 5) || (strlen($overview) > 1000)) {
            array_push($errorList, "Overview must be between 5 and 1000 characters long.");
        } else {
            DB::update('users', array(
                'overview' => json_encode($overview)
                    ), 'ID=%d', $_SESSION['user']['ID']);
            $app->render('freelancer_portfolio_update.html.twig');
        }
    }//end if isset overview
    //keep the next line it comes from Greg, about view
    //$skills = json_decode($user['skills']);
});

////////////////////////////////////////////////////////////////////////////////
//Sate 1: First show FREELANCER PORTFOLIO_UPDATE
$app->get('/freelancer_portfolio_update', function() use ($app, $log) {
    $app->render('freelancer_portfolio_update.html.twig');
});



$app->run();
