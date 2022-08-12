<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{path}}css/style.css">
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <main>
        <h1>Connecter</h1>
        {% if errors is defined %}
            <span class="error">{{ errors|raw }}</span>
        {% endif %}
        
        <form action="{{path}}/login/authentication" method="post">
            <label> Username
                <input type="email" name="username" value="{{ user.username }}">
            </label>
            <label> Password
                <input type="password" name="password" value="{{ user.password }}">
            </label>
            <input type="submit" value="Connecter">
        </form>
    </main>
</body>
</html>