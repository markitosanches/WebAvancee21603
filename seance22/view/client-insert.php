{{ include ('header.php', {title:'Client'})}}
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
{{ include ('footer.php') }}