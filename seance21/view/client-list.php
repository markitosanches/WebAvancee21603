{{ include ('header.php', {title:'Client'})}}
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
{{ include ('footer.php') }}
