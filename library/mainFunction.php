<?php



function loadPage($smarty, $controllerName, $actionName = 'index', $db)
{

//d($actionName);
  include_once PathPrefix . $controllerName . PathPostfix;

  //d(PathPrefix . $controllerName . PathPostfix);
  //d($actionName . 'Action');
  $function = $actionName . 'Action';

  //echo $function;

  //print_r ($smarty);

  $function($smarty, $db);
}

function loadTemplate($smarty, $templateName)
{
  // d($smarty);
  $smarty->display( $templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу програамы выводя значение переменной
 * $value
 * 
 * @param variant $value переменная для вывода ее на страницу 
 */

 function d($value = null, $die = 1 ){

   function debugOut($a){
     echo '<br /><b>'. basename( $a['file']). '</br>'
      ."&nbsp;<font color = 'red'> ({$a['line']}) </font>"
      ."&nbsp;<font color = 'green'> ({$a['function']}) </font>"
     ."&nbsp; --". dirname( $a['file'] );
  }

   echo '<pre>';
   $trace = debug_backtrace();
   array_walk($trace,'debugOut');
   echo "\n\n";
   var_dump($value);
   echo '</pre>';
   if($die) die;
    }







 // Старый вариант

 /*
function d($value = null, $die = 1)
{
  echo 'Debug: <br /><pre>';
  print_r($value);
  echo '</pre>';

  if ($die) die;
}*/

/**
 * Преобразорвание результата работы функции выборки в ассоциативный массив
 * 
 * @param recordset $rs набор строк - результат работы SELECT
 * @return array 
 */

function createSmartyRsArray($rs)
{
  if (!$rs) return false;

  //d($rs);
  $smartyRs = array();
  while ($row = mysqli_fetch_assoc($rs)) {
    $smartyRs[] = $row;
  }
  //d($smartyRs);
  return $smartyRs;
}

/**
 * Получить запрос с базы данных
 * 
 * @param $sql - запроса
 * @return array массив данных продукта 
 */







function zapros($sql)
{

  //d(db()->query('SELECT * FROM categories WHERE parent_id = 0'));
  //d(db()->query($sql));
  //exit;
  //d($sql);


  return (db()->query($sql));

  //return mysqli_query($db,$sql);


}

/**
 * Редирект
 * 
 * @param string $url адрес для перенаправления 
 */
function redirect($url)
{
  if (!$url) $url = '/';
  header("Location: {$url}");
  exit;
}
