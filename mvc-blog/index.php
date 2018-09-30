<?php
require 'Model.php';
require 'AbstractController.php';
require 'MainController.php';
require 'BlogController.php';

$page = filter_input(INPUT_GET, 'page');

switch ($page) {
	case null:
	case 'index':
		$controllerName = BlogController::class;
		$method = 'main';
		break;
	case 'about-us':
		$controllerName = MainController::class;
		$method = 'aboutUs';
		break;
    case 'portfolio':
		$controllerName = MainController::class;
		$method = 'portfolio';
		break;
    case 'contact':
		$controllerName = MainController::class;
		$method = 'contactUs';
		break;
//blog
	/*case 'blog':
		$controllerName = BlogController::class;
		$method = 'blog';
		break;*/
	case 'article':
		$controllerName = BlogController::class;
		$method = 'article';
		break;

	default:
		$controllerName = MainController::class;
		$method = 'pageNotFound';
		break;
}

$controller = new $controllerName();
$controller->$method();