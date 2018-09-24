<?php

class Model
{
	public function getMain()
	{
		return ['title' => 'Index page Title.',
			'content' =>
			'<!DOCTYPE html>
			<html lang="ru">
			<head>
				<meta charset="utf-8">
				<title>Главная</title>
			</head>
			<body>
				<h3>This is the INDEX page.</h3>
			</body>
			</html>'];
	}

	public function getAboutUs()
	{
		return ['title' => 'About Us title.',
			'content' => '
			<!DOCTYPE html>
			<html lang="ru">
			<head>
				<meta charset="utf-8">
				<title>О нас</title>
			</head>
			<body>
				<h3>This is the ABOUT page.</h3>
			</body>
			</html>'];
	}
	
	public function getContactUs()
	{
		return ['title' => 'Contact Us title.',
			'content' => '
			<!DOCTYPE html>
			<html lang="ru">
			<head>
				<meta charset="utf-8">
				<title>Контакты</title>
			</head>
			<body>
				<h3>This is the CONTACT page.</h3>
			</body>
			</html>'];
	}
}