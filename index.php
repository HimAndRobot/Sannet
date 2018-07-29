<?php

require 'vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app = new \Slim\app();
$container = $app->getContainer();
$container['view'] = function ($container) {
	 $view = new \Slim\Views\Twig('view');
    return $view;
};


$container['LoginController'] = function($c){
	$view = $c->get('view');
	$router = $c->get('router');
	return new \Conts\login($view,$router);
};


$app->get('/','LoginController:index');
$app->get('/login/validate','LoginController:validate')->setName('validate');

$app->run();