<?php
class Router
{
	static function start()
	{
		$actionName = 'index';
		
		$routes = $_GET['page'];
		
		if ( !empty($routes) )
		{	
			$actionName = $routes;
		}
		$controller = new MainController();
		
		if (method_exists($controller, $actionName)) { $controller->$actionName(); }
		else $controller->page404();
		
	}
}