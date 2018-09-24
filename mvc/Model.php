<?php

class Model
{
	public function getMain()
	{
		return ['title' => 'Index page Title.',
			'content' => 'Index page Content.'];
	}

	public function getAboutUs()
	{
		return ['title' => 'About Us title.',
			'content' => 'About Us page content.'];
	}
	
	public function getContactUs()
	{
		return ['title' => 'Contact Us title.',
			'content' => 'Contact Us page content.'];
	}
}