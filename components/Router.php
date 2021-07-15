<?php


class Router
{
  private $routes;

  public function __construct()

  {
    // берем файл с массивами для маршрутов
    $routersPath = '../config/routs.php';
    $this->routes = include($routersPath);
  }


  /**
   * строка запроса
   */
  private function getURI()
  {


    if (!empty($_SERVER['REQUEST_URI'])) {
      return trim($_SERVER['REQUEST_URI'], '/');
    }
  }

  public function run()
  {
    // получаем строку запроса

    $uri = $this->getURI();

   //print_r  ($uri = $this->getURI());

    // проверяем наличее такого запроса в routes.php

    foreach ($this->routes as $uriPattern => $path) {

      // echo "<br/> $uriPattern  => $path <br/>";

      // провереям если совпадения с контроллером

      if (preg_match("~$uriPattern~", $uri)) {
        //  echo "<br/> $uriPattern  => $uri <br/>";
        // определить какой контроллер и action  обрабатывают запрос

        // Получаем внутренний путь из внешнего согласно правилу.

        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

        //	echo '<br>Нужно сформулировать: '.$internalRoute.'<br>'; 
       // PathPrefix . $controllerName . ;

       $segments = explode('/', $internalRoute); // разделяем
       $controllerName = array_shift($segments) . PathPostfix;
       $controllerName = ucfirst($controllerName);

       $actionName = 'action' . ucfirst(array_shift($segments)); // первая заглавная в контроллере

        $controllerFile = PathPrefix . $controllerName . '.php';
        if (file_exists($controllerFile)) {
          include_once($controllerFile);
        }

      

      $parameters = $segments;




        // создаем обект вызываем метод
         $controllerObject = new $controllerName;
       
       /* $result = call_user_func(array($controllerObject, $actionName), $parameters);*/
        $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

        if ($result != null) {
          break;
        }
      }
    }
  }
}
