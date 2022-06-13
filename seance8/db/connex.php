<?php
try {
$dbhost = 'localhost';
$dbname='ecommerce';
$dbuser = 'root';
$dbpass = '';
$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}catch (PDOException $e) {
echo "Error : " . $e->getMessage() . "<br/>";
die();
}	

