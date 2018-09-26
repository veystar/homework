<?php
class Router
{
	static function start()
	{
		$actionName = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		

		if ( !empty($routes[1]) )
		{	
			$actionName = $routes[1];
		}
		$controller = new MainController();
		
		if (method_exists($controller, $actionName)) { $controller->$actionName(); }
		else $controller->page404();
		
	}
}