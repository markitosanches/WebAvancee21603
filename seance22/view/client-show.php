{{ include ('header.php', {title:'Client'})}}
<h2>Visualiser le client</h2>
<p><strong>Nom : </strong>{{ client.nom }}</p>
<p><strong>Adresse : </strong>{{ client['adresse'] }}</p>
<p><strong>Phone : </strong>{{ client.phone }}</p>
<p><strong>Ville : </strong> {{ ville }}</p>
{% if session.privilege_id == 1%}
<p><strong><a href="{{path}}client/edit/{{client.id}}">Modifier</a></p>
{% endif %}
{{ include ('footer.php') }}