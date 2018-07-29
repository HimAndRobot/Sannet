<?php
$container['user'] = function($c){
	$db = $c->get('db');
	return new model\user($db);
};