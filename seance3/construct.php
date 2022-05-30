<?php


class Person {
    private $nom;
    public $adresse;
    public $codePostal = "H1V h6H";
    public $phone;
    public $courriel;


     public function __construct($nom, $adresse = null){
         $this->nom = $nom;
         $this->adresse = $adresse;
     }

    //  public function __destruct(){
    //      echo "Salut $this->nom - Phone: $this->phone" ;
    //  }

    public function constanteMagique(){
        return "__CLASS__ = ".__CLASS__."<br>".
               "__LINE__ = ".__LINE__."<br>".
               "__FILE__ = ".__FILE__."<br>".
               "__METHOD__ = ".__METHOD__."<br>";
    }
}


$obj = new Person("Paul");
$obj->phone = "514-777-9888";

echo $obj->constanteMagique();

// echo "<pre>";
// var_dump($obj);
// echo "</pre>";
?>