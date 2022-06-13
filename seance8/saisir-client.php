<?php
require_once "db/connex.php";
//var_dump($_POST);

//$nom = $_POST["nom"];

foreach($_POST as $key=>$value){
    $$key = $value;
}


//echo $nom." ".$adresse." ".$phone;

$sql = "insert into client (nom, adresse, phone) values(?, ?, ?)";

$query = $pdo->prepare($sql);
if($query->execute(array($nom, $adresse, $phone))){
    echo "success";
}else{
    print_r($query->errorInfo());
}

