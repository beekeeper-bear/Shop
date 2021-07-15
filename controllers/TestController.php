<?php


include_once '../controllers/GlobalController.php';
include_once '../models/Test.php';



class TestController extends GlobalController {

	   public function actionTest()
  {

   

     $result = array();
		 $result = Test::getTest();
  

    $this->smarty->assign('result', $result);
    $this->smarty->assign('pageTitle', 'Shop Shop');
    $this->smarty->display( 'index' . TemplatePostfix);
  
  }



}