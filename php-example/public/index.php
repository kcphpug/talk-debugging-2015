<?php
require '../vendor/autoload.php';
// Prepare app
$config = require '../config/main.php';
$app = new \Slim\Slim($config);
// Local (not in github) settings can go here
@$configLocal = include '../config/local.php';
if($configLocal) $app->config($configLocal);
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('../templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);

$app->view->setData('errorLogContents', $errorLogContents);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());


// Define routes

$app->get('/', function () use ($app) {
    $app->render('views/index.html');
});


$app->get('/show-error-log', function () use ($app) {
    $errorLogContents = file_get_contents(realpath('../logs/error.log'));
    echo "<pre>".$errorLogContents."</pre>";
});

$app->get('/clear-error-log', function () use ($app) {
    file_put_contents(realpath('../logs/error.log'),"");
    $app->redirect('/show-error-log');
});

// Run app
$app->run();
