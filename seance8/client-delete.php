<?php

require_once "db/connex.php";

//print_r($_POST);
//die();

$id = $_POST["id"];

$sql = "DELETE FROM client WHERE id = ?";

$query = $pdo->prepare($sql);
if($query->execute(array($id))){
    header("Location: client-list.php");
}else{
    print_r($query->errorInfo());
}


?>