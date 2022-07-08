<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<h2>Visualiser le client</h2>
<p><strong>Nom : </strong>{{ client.nom }}</p>
<p><strong>Adresse : </strong>{{ client['adresse'] }}</p>
<p><strong>Phone : </strong>{{ client.phone }}</p>
<p><strong>Ville : </strong> {{ ville }}</p>
<p><strong><a href="../../client/edit/{{client.id}}">Modifier</a></p>
    
</body>
</html>