<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>New Client</h1>
        <form action="../client/store" method="post">
            <label> Nom
                <input type="text" name="nom">
            </label>
            <label> Adresse
                <input type="text" name="adresse">
            </label>
            <label> Phone
                <input type="text" name="phone">
            </label>
            <label> Ville
                <select name="ville_id">
                 {% for ville in villes %}
                    <option value="{{ ville.id }}">{{ ville.nom}}</option>
                 {% endfor %}
                </select>
            </label>
            <input type="text" name='pays'>
            <input type="submit">
            
        </form>
    </main>
</body>
</html>