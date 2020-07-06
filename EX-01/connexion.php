
<h1> Connexion </h1>

<?php
    session_start ();
    $_SESSION ["login"];
    $_SESSION ["password"];
?>

<form action="securite.php" method="POST">    
    <input type="text" name="login" placeholder="Login">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" id="submit" value="valider">

 </form>


