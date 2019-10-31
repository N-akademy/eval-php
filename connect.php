<?php
include "templates/header.php";
?>

<div class=form>
<h1 class=>Connexion admin</h1>

<p>Voici mon accueil personnalisé.</p>


</div>

<form class= action="data.php"method="POST">
    
    
    <div>
        <label for="email">Email:</label>
        <input type="email"id="email"name="email"placeholder= "Votre email"required>
    </div>
    <div>
        <label for="passeword">Mot de passe:</label>
        <input type="passeword"id="passeword"name="passeword"placeholder= "Votre mot de passe"required>
    </div>
    <br>
    <div>
        <input class="submit"type="submit">
    </div>
</form>
</div>


</div>

























<?php
include "templates/footer.php";
?>