<?php
$container['LoginController'] = function($c){
	$view = $c->get('view');
	$router = $c->get('router');
	$db = $c->get('user');
	return new \Conts\login($view,$router,$db);
};