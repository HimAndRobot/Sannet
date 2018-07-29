<?php
/**
 * 
 */
namespace Conts;
class login 
{
	protected $view;
	protected $router;
	function __construct($view,$router)
	{
		$this->router = $router;
		$this->view = $view;
	}
	function index($req,$res,$args ){
		$validate_route =  $this->router->pathFor('validate');
		return $this->view->render($res,'login.html',array('url_validate'=>$validate_route));
	}
	function validate($req,$res,$args){
		echo'validando';
	}
}