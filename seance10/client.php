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
<h1>Client</h1>
    <form action="client-post.php" method="post">
    <label for="name">Nom</label>
    <input type="text" id="name" name="nom" maxlenght="30">
    <label for="add">Adresse</label>
    <input type="text"  id="add" name="adresse" maxlenght="45">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" maxlenght="20">
    <input type="submit">
    </form>
</body>
</html>