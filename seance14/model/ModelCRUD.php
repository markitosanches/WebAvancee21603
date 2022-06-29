<?php

abstract class CRUD extends PDO{
    public function __construct(){
        parent::__construct("mysql:host=localhost;dbname=ecommerce;charset=utf8", "root", "");
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

    public function insert($data){

        $nomChamp = implode(", ",array_keys($data));
        $valeurChamp = ":".implode(", :", array_keys($data));

        $sql ="INSERT INTO $this->table ($nomChamp) VALUES ($valeurChamp)";

        $query = $this->prepare($sql);
        foreach($data as $key=>$value){
            $query->bindValue(":$key", $value);
        }
        if(!$query->execute()){
            return $query->errorInfo();
        }else{
            return $this->lastInsertId();
        }
    }


}