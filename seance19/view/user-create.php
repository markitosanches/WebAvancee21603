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
        <h1>Nouvel utilisateur</h1>
        {% if errors is defined %}
            <span class="error">{{ errors|raw }}</span>
        {% endif %}
        
        <form action="{{path}}user/store" method="post">
            <label> Username
                <input type="email" name="username" value="{{ user.username }}">
            </label>
            <label> Password
                <input type="password" name="password" value="{{ user.password }}">
            </label>
            <label> Privilege
                <select type="text" name="privilege_id">
                {% for privilege in privileges %}
                    <option value='{{privilege.id}}'>{{privilege.privilege}}</option>
                {% endfor %}
                </select>
            </label>
            <input type="submit">
        </form>
    </main>
</body>
</html>