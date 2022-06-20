<?php
require_once __DIR__.'/library/RequirePage.php';

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';

//print_r($url);

if($url == '/'){
    echo "page index";
}else{
  $requestURL=$url[0];
  $requestURL = ucfirst($requestURL);
  $controllerPath = __DIR__.'/controller/Controller'.$requestURL.'.php';
  
  if(file_exists($controllerPath)){
    require_once $controllerPath;
    $controllerName = 'Controller'.$requestURL;
    $controller = new $controllerName;
    print_r($controller->index());
  }
  else{
      echo "Error 404";
  }
}


?>