<?php

class ControllerHome{

    public function index(){
        $view = new view('home-index');
    }

    public function error(){
        $view = new view('error');
    }
}