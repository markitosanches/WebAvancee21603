<?php

class CheckSession{

  static public function SessionAuth(){
    if(isset($_SESSION['fingerPrint']) and $_SESSION['fingerPrint']==md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])){
        return TRUE;
    } else{
      RequirePage::redirect('home');
    }
  }
}