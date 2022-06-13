<?php
require_once "db/connex.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM client WHERE id = ?";
    $query = $pdo->prepare($sql);
    if($query->execute(array($id))){
        $count = $query->rowCount();
        if($count == 0 ){
            header("Location: client.php");
        }
        $client = $query->fetch();
        foreach($client as $key=>$value){
            $$key=$value;
        }
    }else{
        print_r($query->errorInfo());
    }

   // var_dump($client);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <style>
    input{
        display: block;
        margin: 5px;
    }
    </style>
</head>
<body>
<h1>Client - Mettre a jour</h1>
    <form action="client-edit-post.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <label for="name">Nom</label>
        <input type="text" id="name" name="nom" maxlenght="30" value="<?php echo $nom;?>">
        <label for="add">Adresse</label>
        <input type="text"  id="add" name="adresse" maxlenght="45" value="<?php echo $adresse;?>">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" maxlenght="20" value="<?php echo $phone;?>">
        <input type="submit">
    </form>
    <hr>
    <form action="client-delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" value="Effacer">
    </form>
</body>
</html>