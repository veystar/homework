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
		
		$controller->$actionName();
		var_dump($routes);
		var_dump($_SERVER['REQUEST_URI']);
	}
}