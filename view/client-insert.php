<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{path}}css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>New Client</h1>
        {% if errors is defined %}
            <span class="error">{{ errors|raw }}</span>
        {% endif %}
        
        <form action="{{path}}client/store" method="post">
            <label> Nom
                <input type="text" name="nom" value="{{ client.nom }}">
            </label>
            <label> Adresse
                <input type="text" name="adresse" value="{{ client.adresse }}">
            </label>
            <label> Phone
                <input type="text" name="phone" value="{{ client.phone }}">
            </label>
            <label> Ville
                <select name="ville_id">
                 {% for ville in villes %}
                    <option value="{{ ville.id }}" {% if ville.id==client.ville_id %} selected {% endif %}>{{ ville.nom}}</option>
                 {% endfor %}
                </select>
            </label>
            <label>
                Pays
                <input type="text" name='pays' value="{{ client.pays }}">
            </label>
            <input type="submit">
            
        </form>
    </main>
</body>
</html>