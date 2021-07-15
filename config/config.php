<?php

/**
 * 
 * Файл настроек
 */

//> Константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller');
//<


//> используемый шаблон 
$template = 'default';
$templateAdmin = 'admin';

// пути к файлам шаблонов (*.tpl)
define('TemplatePrefix', "../views/$template/");
define('TemplateAdminPrefix', "../views/$templateAdmin/");
define('TemplatePostfix', '.tpl');

// пути к файлам шаблонов в вебпространстве
define('TemplateWebPath', "/templates/$template/");
define('TemplateAdminWebPath', "/templates/$templateAdmin/");
//<
