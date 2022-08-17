{{ include ('header.php', {title:'user'})}}

    <h1>User</h1>
    <ul>
        <li><a href='{{path}}user/list'>List</a></li>
        <li><a href='{{path}}user/create'>Ajouter</a></li>
    </ul>

{{ include ('footer.php') }}
