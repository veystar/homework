<?php

class MainController extends AbstractController
{

	public function aboutUs()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getAboutUs();
		$this->render('view/aboutUs.php', $data);
	}
    
    public function portfolio()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getPortfolio();
		$this->render('view/portfolio.php', $data);
	}
    
    public function contactUs()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getContactUs();
		$this->render('view/contactUs.php', $data);
	}

	public function pageNotFound()
	{
		http_response_code(404);
		$this->render('view/404.php');
	}
    
    
}