<?php
require_once __DIR__.'/library/RequirePage.php';
require_once __DIR__.'/library/RenderView.php';

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';
//print_r($url);

if($url == '/'){
  $controllerHome = __DIR__.'/controller/ControllerHome.php';
  require_once $controllerHome;
  $controller = new ControllerHome;
  echo $controller->index();
}else{
  $requestURL=$url[0];
  $requestURL = ucfirst($requestURL);
  $controllerPath = __DIR__.'/controller/Controller'.$requestURL.'.php';
  
  if(file_exists($controllerPath)){
    require_once $controllerPath;
    $controllerName = 'Controller'.$requestURL;
    $controller = new $controllerName;
    if(isset($url[1])){
      $method = $url[1];
      echo $controller->$method();
    }else{
      echo $controller->index();
    }
  }
  else{
    $controllerHome = __DIR__.'/controller/ControllerHome.php';
    require_once $controllerHome;
    $controller = new ControllerHome;
    echo $controller->error();
  }
}


?>