<?php 

require_once('Models/CModel.php');
require_once('Views/CView.php');

class CController
{
	public $model;
	public $view;

	public function SetMainPage()
	{
		$model = new CModel();
		$result = $model->GetData();

		

		return $result;
	}
}


?>