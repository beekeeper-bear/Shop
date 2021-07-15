<?php

//> Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require('../library/Smarty/libs/Smarty.class.php');

class Smart extends Smarty 
{

  public function __construct() {

    $this->setTemplateDir(TemplatePrefix);
    $this->setCompileDir('../tmp/smarty/templates_c');
    $this->setCacheDir('../tmp/smarty/cache');
    $this->setConfigDir('../library/Smarty/configs');
    $this->assign('teplateWebPath', TemplateWebPath);
    
  }



}