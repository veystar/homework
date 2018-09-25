<?php

class MainController extends AbstractController
{
	
	public function index()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getIndex();
		$this->render('view/main.php', $data);
	}

	public function aboutUs()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getAboutUs();
		$this->render('view/aboutUs.php', $data);
	}
	
	public function contactUs()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getContactUs();
		$this->render('view/contactUs.php', $data);
	}

	public function services()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getServices();
		$this->render('view/services.php', $data);
	}
}