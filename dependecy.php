<?php
$container['db'] = function($c){
		$capsule = new \Illuminate\Database\Capsule\Manager;
	    $capsule->addConnection($c['dbconfig']['settings']['db']);

	    $capsule->setAsGlobal();
	    $capsule->bootEloquent();

	    return $capsule;
};
$container['view'] = function ($container) {
	 $view = new \Slim\Views\Twig('view');
    return $view;
};