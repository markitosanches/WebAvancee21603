<?php
require_once "class/Crud.php";

$crud = new Crud;

$insert = $crud->insert("client", $_POST);

echo $insert;



?>