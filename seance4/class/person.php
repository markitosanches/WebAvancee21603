<?php

abstract class Person {
    protected $nom;
    private $adresse;
    protected $codePostal;
    protected $phone;
    public $courriel;

    abstract public function setCodePostal($code);
    abstract public function getCodePostal();

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
    public function setCourriel($email){
        $this->courriel = $email;
    }
}
?>