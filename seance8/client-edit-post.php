<?php

require_once "db/connex.php";

//print_r($_POST);
//die();

foreach($_POST as $key=>$value){
    $$key = $value;
}

$sql = "UPDATE client SET nom = ?, adresse = ?, phone= ? WHERE id = ?";

$query = $pdo->prepare($sql);
if($query->execute(array($nom, $adresse, $phone, $id))){
    echo "success";
}else{
    print_r($query->errorInfo());
}


?>