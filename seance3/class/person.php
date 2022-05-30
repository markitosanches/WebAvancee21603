<?php


class Person {
    private $nom;
    private $adresse;
    private $codePostal;
    private $phone;
    private $courriel;

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPhone(){
        return $this->phone;
    }

}

$obj = new Person();
$obj->setNom("Peter");

echo "<pre>";
var_dump($obj);
echo "</pre>";


?>