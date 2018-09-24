<?php

class MainController extends AbstractController
{
	
	public function index()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getIndex();
		$this->render('view/base_template.php', $data);
	}

	public function aboutUs()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getAboutUs();
		$this->render('view/base_template.php', $data);
	}
	
	public function contactUs()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getContactUs();
		$this->render('view/base_template.php', $data);
	}

	public function services()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getServices();
		$this->render('view/base_template.php', $data);
	}
}