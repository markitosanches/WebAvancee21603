<?php
require_once "class/Crud.php";
$crud = new Crud;
$select = $crud->selectId("client", "id", "5");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client List</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Phone</th>    
        </tr>
    </thead>
    <tbody>
<?php
    foreach($select as $row){
?>
        <tr>
            <td><a href="client-edit.php?id=<?php echo $row["id"];?>"><?php echo $row["nom"]; ?></a></td>
            <td><?php echo $row["adresse"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
        </tr>
<?php
    }
?>       
    </tbody>
</table>
    
</body>
</html>