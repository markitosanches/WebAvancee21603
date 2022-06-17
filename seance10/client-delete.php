<?php
require_once "class/Crud.php";


$crud = new Crud;

$delete = $crud->delete("client", $_POST["id"], "client-list.php")



//Crud::delete("client", $_POST["id"], "client-list.php");
?>