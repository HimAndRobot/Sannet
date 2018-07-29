<?php
/**
 * 
 */
namespace middle;
class userNotLogged 
{
    private $container;
    private $router;

    public function __construct($container, $router) {
        $this->container = $container;
        $this->router = $router;
    }

    /**
     * Example middleware invokable class
     *
     * @param  \Psr\Http\Message\ServerRequestInterface $request  PSR7 request
     * @param  \Psr\Http\Message\ResponseInterface      $response PSR7 response
     * @param  callable                                 $next     Next middleware
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke($req , $res, $next)
    {
    	session_start();
    	if( isset($_SESSION['user'])){
    		$painel = $this->router->pathFor('painel');
    		return $res->withRedirect($painel );
    	}
    }
}