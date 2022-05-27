<?php


class Person {
    private $nom ="paul";
    public $adresse = "Sherbrooke";
    public $codePostal = "H1V h6H";
    public $phone;
    public $courriel;

    public function setName($nom, $adresse = null){
        $this->nom = $nom;
        $this->adresse = $adresse;
    }

    public function getName(){
        return "Salut je suis ".$this->nom." J'habite à ".$this->adresse;
    }
}


$objet1 = new Person();
$objet2 = new Person();

//$peter = $objet1->nom = "Peter";

// $objet1->adresse = "Pie IX";
// $objet1->codePostal = "X3Z A4F";

// $lisa = $objet2->nom = "Lisa";

// echo $peter;
// echo "<br>";
// echo $objet1->adresse;
// echo "<br>";
// echo $lisa;
// var_dump($objet1);
// echo "<br>";
// var_dump($objet2);

var_dump($objet1);
$objet1->setName("Paul", "Sherbrooke");

var_dump($objet1);

echo $objet1->getName();


?>