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
        //return($this->fillable);
        //post = Array ( [nom] => [adresse] => [phone] => [ville_id] => 2 [pays] => ) 
        //fillable = Array ( [0] => nom [1] => adresse [2] => phone [3] => ville_id ) 
        //fillable = Array ( [nom] => [adresse] => [phone] => [ville_id] => ) 

        //Array ( [nom] => peter [adresse] => PIE ix [phone] => 4654654 [ville_id] => 2 ) 
        $data_keys = array_fill_keys($this->fillable, '');
        $data_map = array_intersect_key($data, $data_keys);
        //return($data_map);
        $nomChamp = implode(", ",array_keys($data_map));
        $valeurChamp = ":".implode(", :", array_keys($data_map));

        $sql ="INSERT INTO $this->table ($nomChamp) VALUES ($valeurChamp)";
       // return $sql;
        
        $query = $this->prepare($sql);
        foreach($data_map as $key=>$value){
            $query->bindValue(":$key", $value);
        }
        if(!$query->execute()){
            return $query->errorInfo();
        }else{
            return $this->lastInsertId();
        }
    }




}