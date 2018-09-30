<?php

class Model
{

	private $articles = [
			1 => ['title'   => 'Aliquam lorem ante dapibus',
			      'content' => 'article1'
			],
			2 => ['title'   => 'Lorem ipsum dolor sit amet',
			 	  'content' => 'article2'
			],
		];

	public function getArticles()
	{
		return $this->articles;
	}

	public function getArticle($id)
	{
		if (isset($this->articles[$id])) {
			return $this->articles[$id];
		}
	}

	public function getMain()
	{
		return ['title' => 'Home',
			'content' => 'views/index.php'];
	}

	public function getAboutUs()
	{
		return ['title' => 'About Us',
			'content' => 'views/aboutUs.php'];
	}
    
    public function getPortfolio()
	{
		return ['title' => 'Portfolio',
			'content' => 'views/portfolio.php'];
	}
    
    public function getContactUs()
	{
		return ['title' => 'Contact Us',
			'content' => 'views/contactUs.php'];
	}
}