<?php

class Student extends Person{
    private $stundentId;

    public function getCourriel(){
        return $this->courriel;
    }

    public function setCodePostal($code){
        $this->codePostal;
    }
    public function getCodePostal(){
        return $this->codePostal;
    }

    public static function setStudentId($id){
       return "L'id est : $id";
    }

}