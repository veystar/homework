<?php

class Model
{
	public function getIndex()
	{
		return ['title' => 'Home',
		    'content' => 'main'];
	}

	public function getAboutUs()
	{
		return ['title' => 'About Us',
		    'content' => 'aboutUs'];
	}
	
	public function getContactUs()
	{
		return ['title' => 'Contact Us',
			'content' => 'contactUs'];
	}

	public function getServices()
	{
		return ['title' => 'Services',
			'content' => 'services'];
	}
	
	public function getPage404()
	{
		return ['title' => 'Page not found!',
			'content' => '404'];
	}
}