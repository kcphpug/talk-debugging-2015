<?php
require '../vendor/autoload.php';

ini_set('log_errors',1);
ini_set('error_log','../logs/error.log');

// Prepare app
$config = require '../config/main.php';
$app = new \Slim\Slim($config);

// Local (not in github) settings can go here
@$configLocal = include '../config/local.php';
if($configLocal) $app->config($configLocal);
$app->view(new SimpleView());
$app->view->setLayout('layout.php');




// Define routes

$app->get('/', function () use ($app) {
    $app->render('views/index.php');
});

$app->get('/php-var-dump',function () use ($app) {
   ini_set('xdebug.default_enable','Off');
   $app->render('views/php-var-dump.php');
});


/** Log-control actions */

$app->get('/show-error-log', function () use ($app) {
    $errorLogContents = file_get_contents(realpath('../logs/error.log'));
    echo "<pre>".$errorLogContents."</pre>";
});

$app->get('/clear-error-log', function () use ($app) {
    file_put_contents(realpath('../logs/error.log'),"");
    $app->redirect('/show-error-log');
});

$app->get('/:name', function ($name) use ($app) {
    $app->render('views/'.$name.'.php');
});


// Run app
$app->run();
