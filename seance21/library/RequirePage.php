<?php

class RequirePage{
    static function requireModel($page){
        return require_once 'model/Model'.$page.'.php';
    }

    static function redirect($url){
        header("location: http://localhost:7080/WebAvancee21603/WebAvancee21603/seance21/$url");
    }

    static function requireLibrary($page){
        return require_once 'library/'.$page.'.php';
    }
}