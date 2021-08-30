<?php 
require_once('Views/CView.php');
require_once('Controllers/CController.php');

$view = new CView();


$pageHeader = $view->GetHeader();
$pageFooter = $view->GetFooter();
$pageBody = $view->ViewMainPage();

include($pageHeader);
//var_dump($pageBody);
include($pageFooter);
?>