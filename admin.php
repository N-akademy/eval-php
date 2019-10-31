<?php
include "templates/header.php";
?>

<div class=form>
<h1 class=>Mon Compte utilisateur</h1>

<p>Bonjour,Administrateur</p>

<p>Vous pouvez modifier la visiblité des différentes parties sur la pages d'accueil.</p>
</div>
<?php

    if(TRUE(
?>
        <form>
        <input type="checkbox" name="P1" value="ON"><br>
        <input type="submit">
<?php
    )||TRUE(
?>      <input type="checkbox" name="P2" value="ON"><br>
        <input type="submit"></form>
<?php        
    ){echo "Je désactive le paragraphe 1"||echo "Je désactive le paragraphe 2";
    }
?>
</div>



























<?php
include "templates/footer.php";
?>