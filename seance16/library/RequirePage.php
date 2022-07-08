<?php

class RequirePage{
    static function requireModel($page){
        return require_once 'model/Model'.$page.'.php';
    }

    static function redirect($url){
        header("location: $url");
    }

    static function absolutPath($page){
        return 'localhost:7080/WebAvancee21603/WebAvancee21603/seance15/'.$url;
    }

    static function requireLibrary($page){
        return require_once 'library/'.$page.'.php';
    }
}