<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{path}}css/style.css">
    <title>{{title}}</title>
</head>
<body>
    <nav>
        <a href="{{path}}client">Client</a>
        <a href="{{path}}user">User</a>
        {% if guest %}
        <a href="{{path}}login">login</a>
        {% else %}
        <a href="{{path}}login/logout">log out</a>
        {% endif %}
    </nav>
    <main>
    
