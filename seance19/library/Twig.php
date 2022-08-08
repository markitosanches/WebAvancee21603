<?php

class Twig{
  static public function render($template, $data = array()){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, array('auto_reload' => true,'cache' => false));
    $twig->addGlobal('path', 'http://localhost:7080/WebAvancee21603/WebAvancee21603/seance19/');
    echo $twig->render($template, $data);
  }
}