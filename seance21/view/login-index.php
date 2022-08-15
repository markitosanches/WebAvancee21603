{{ include ('header.php', {title:'login'})}}
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
{{ include ('footer.php') }}