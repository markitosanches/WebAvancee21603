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

    public function selectId($id){
        $sql = "SELECT * FROM $this->table WHERE $this->primaryKey = :$this->primaryKey";
        $query = $this->prepare($sql);
        $query->bindValue(":$this->primaryKey", $id);
        $query->execute();
        return $query->fetch();
    }

    public function insert($data){

        $data_keys = array_keys($data);
        $data_map = array_unique(array_intersect($this->fillable, $data_keys));
        $nomChamp = implode(", ",array_values($data_map));
        $valeurChamp = ":".implode(", :", array_values($data_map));

        $sql ="INSERT INTO $this->table ($nomChamp) VALUES ($valeurChamp)";
       // return $sql;
        
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