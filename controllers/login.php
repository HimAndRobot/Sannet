<?php
/**
 * 
 */
namespace Conts;
class login 
{
	protected $view;
	protected $router;
	protected $user;
	function __construct($view,$router,$user)
	{
		$this->router = $router;
		$this->view = $view;
		$this->user = $user;
	}
	function index($req,$res,$args ){
		$validate_route =  $this->router->pathFor('validate');
		return $this->view->render($res,'login.html',array('url_validate'=>$validate_route,'base_url'=>base_url));
	}
	function validate($req,$res,$args){
		$user = $req->getParsedBody();
		if($this->user->userAuth($user['user_login'],$user['user_password'])){
			session_start();
			$_SESSION['user'] = $user['user_login'];
			$painel=$this->router->pathFor('painel');
			return $res->withRedirect($painel);
		} else {
			$home_route=$this->router->pathFor('login_error',array('msg'=>'1'));
			return $res->withRedirect($home_route);
		};
	}
	function error($req,$res,$args){
		$validate_route =  $this->router->pathFor('validate');
		if($args['msg'] == 1){
			$error = 'Login ou senha invalida';
		}
		return $this->view->render($res,'login.html',array('url_validate'=>$validate_route,'base_url'=>base_url,'error'=>$error));

	}
}