<?php 

require_once('Controllers/CController.php');

class CView
{
	public function ViewMainPage()
	{
		$controller = new CController();
		$arResult = $controller->SetMainPage();
		include 'ViewMainPage.php';
		return $arResult;
	}

	public function GetHeader()
	{
		return 'Views/header.php';
	}

	public function GetFooter()
	{
		return 'Views/footer.php'; 
	}
}

?>