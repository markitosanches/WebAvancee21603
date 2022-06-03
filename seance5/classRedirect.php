<?php

class RedirectPage{

    public static $staticProp = "C est une propriete statique";
    static public function redirect($url){
        header("Location: $url");
        exit;
    }
}