<?php 
require('../library/Smarty/libs/Smarty.class.php');



class GlobalController {

protected $smarty;
// Инициализация шаблонизатора Smarty
public function __construct()
{

    $this->smarty = new Smarty();
    $this->smarty->setTemplateDir(TemplatePrefix);
    $this->smarty->setCompileDir('../tmp/smarty/templates_c');
    $this->smarty->setCacheDir('../tmp/smarty/cache');
    $this->smarty->setConfigDir('../library/Smarty/configs');

    $this->smarty->assign('teplateWebPath', TemplateWebPath);

}





}