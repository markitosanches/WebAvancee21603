<?php

class Crud extends PDO{

    public function __construct(){
        parent::__construct("mysql:host=localhost;dbname=ecommerce", "root", "");
    }

    public function insert($table, $data){

        $nomChamp = implode(", ",array_keys($data));
        $valeurChamp = ":".implode(", :", array_keys($data));

        $sql ="INSERT INTO $table ($nomChamp) VALUES ($valeurChamp)";

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

    public function select($table, $champOrdre = null, $ordre = null){
        if($champOrdre == null){
            $sql= "SELECT * FROM $table";
        }else{
            $sql = "SELECT * FROM $table ORDER BY $champOrdre $ordre";
        }
        $query = $this->query($sql);
        return $query->fetchAll();
    }

    public function selectId($table, $champ, $id){
        $sql = "SELECT * FROM $table WHERE $champ = :$champ";
        $query = $this->prepare($sql);
        $query->bindValue(":$champ", $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($table, $data, $champ, $id){
        $champRequete = null;
        foreach($data as $key=>$value){
            $champRequete .=$key."=:".$key.", ";
        }
        $champRequete = rtrim($champRequete, ", ");
        $sql = "UPDATE $table SET $champRequete WHERE $champ = :$champ";

        $query= $this->prepare($sql);
        foreach($data as $key=>$value){
            $query->bindValue(":$key", $value);
        }
        if(!$query->execute()){
            print_r($query->errorInfo());
        }else{
            return $id;
        }
    }

  public function delete($table, $id, $url){
        $sql = "DELETE FROM $table WHERE id = :id";
        $query = $this->prepare($sql);
        $query->bindValue(":id", $id);
        if(!$query->execute()){
            print_r($query->errorInfo());
        }else{
            header("Location: $url");
        }
    }

/*    public function delete($table, $champ, $id, $url){
        $sql = "DELETE FROM $table WHERE $champ = :$champ";
        $query = $this->prepare($sql);
        $query->bindValue(":$champ", $id);
        if(!$query->execute()){
            print_r($query->errorInfo());
        }else{
            header("Location: $url");
        }
    }
*/    
}
