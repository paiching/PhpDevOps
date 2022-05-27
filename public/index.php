<?php
 //use Psr\Http\Message\ServerRequestInterface as Request;
 //use Psr\Http\Message\ResponseInterface as Response;

 
require '../vendor/autoload.php';


$config = ['settings' => [
    'addContentLengthHeader' => false,
]];

$app = new \Slim\App($config);

require '../app/routes.php';

$app->run();