<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="{{path}}css/style.css">
</head>
<body>
    <h1>Client</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Phone</th>
            <th>Afficher</th>
        </tr>
        {% for client in clients %}
        <tr>
            <td>{{client.nom }}</td>
            <td>{{client.adresse }}</td>
            <td>{{client.phone }}</td>
            <td><a href="{{path}}client/show/{{client.id}}">Afficher</a></td>
        </tr>
        {% endfor %}
    </table>
</body>
</html>
