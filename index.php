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
/*
//Nathalie
DB::$dbName = 'frehelantser';
DB::$user = 'frehelantser';
DB::$password = '';
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

// DB::$host = '127.0.0.1'; // sometimes needed on Mac OSX
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

// instantiate Slim - router in front controller (this file)
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

/*
\Slim\Route::setDefaultConditions(array(
    'id' => '\d+'
)); */



function isValidProject ($prj, &$error, $skipID = FALSE) {
    
    return TRUE;
}
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}


$app->get('/projects', function() use ($app, $log) {
    $app->render('project_auction.html.twig');
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

$app->run();
