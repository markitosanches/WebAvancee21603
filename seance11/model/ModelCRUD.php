<?php

abstract class CRUD extends PDO{
    public function __construct(){
        parent::__construct("mysql:host=localhost;dbname=ecommerce", "root", "");
    }

    public function select($champOrdre = null, $ordre = null){
        if($champOrdre == null){
            $sql= "SELECT * FROM $this->table";
        }else{
            $sql = "SELECT * FROM $this->table ORDER BY $champOrdre $ordre";
        }
        $query = $this->query($sql);
        return $query->fetchAll();
    }
}