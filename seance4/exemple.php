<?php
require 'class/person.php';
require 'class/student.php';
require 'class/teacher.php';

$objS = new Student();


$objS->setNom("Paul");
$objS->setCourriel("abc@c.m");
echo $objS->getCourriel();

$objS->setCodePostal("h1v2h5");
echo $objS->getCodePostal();


// $objS->phone = "51477778888";

echo "<pre>";
var_dump($objS);
echo "</pre>";

// $objP = new Person();

// //$objP->phone = "51477778888";
// echo "<pre>";
// var_dump($objP);
// echo "</pre>";

// $objT = new Teacher();
// echo "<pre>";
// var_dump($objT);
// echo "</pre>";

?>