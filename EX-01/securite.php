<form method="connexion.php">

<?php

    echo "<h1>"."nom d'utilisateur:".$_post['login']."</h1>";
    echo "<h1>"."mot de passe:".$_post['password']."</h1>";

    if (isset($_post['login']&& isset($_post['password'])&& $_post['password']== '2020'){
        $_session['id'] = $_post ['login'];
    header ('location: .mini-site-routing.php?page=1');
    }   
    
    else{
        echo "<p> mauvais couple identifiant/mot de passe. </p>";
        echo "<a href ='mini-site-routing.php?page=conexion'> connexion </a>";
    }
?>

</form>
    