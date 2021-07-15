<?php


include_once '../controllers/GlobalController.php';
include_once '../models/Cart.php';



class CartController extends GlobalController {

	   public function actionCart($id)
  {
    
     $result = array();
		 $result = Cart::getCart($id[0]);
     

    $this->smarty->assign('result', $result);
    $this->smarty->assign('pageTitle', 'Shop Shop');
    $this->smarty->display( 'cart' . TemplatePostfix);
  
  }



}