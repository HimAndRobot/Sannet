<?php

require 'vendor/autoload.php';
use \Slim\App;
$app = new app();
$container = $app->getContainer();
//denpendecy config load
include('config.php');
//denpendecy inject load
include('dependecy.php');
//models load
include('models.php');
//controllers load
include('controllers.php');
include('middleware.php');


$app->get('/','LoginController:index')->setName('home')->add($userNotLogged);
$app->get('/login/error/{msg}','LoginController:error')->setName('login_error')->add($userNotLogged);
$app->post('/login/validate','LoginController:validate')->setName('validate');
$app->get('/painel',function(){
	echo "aqui ficara o painel";
})->setName('painel');

$app->run();
