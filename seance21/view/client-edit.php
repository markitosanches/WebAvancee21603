{{ include ('header.php', {title:'Client'})}}
        <h1>Modifier Client</h1>
        {% if errors is defined %}
            <span class="error">{{ errors|raw }}</span>
        {% endif %}
        
        <form action="{{path}}client/update" method="post">
                <input type="hidden" name="id" value="{{ client.id }}">
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
            <input type="submit" value="Mise a jour">        
        </form>
        <form action="{{path}}client/delete" method="post">
            <input type="hidden" name="id" value="{{ client.id }}"> 
            <input type="submit" value="Effacer">  
        </form>
{{ include ('footer.php')}}