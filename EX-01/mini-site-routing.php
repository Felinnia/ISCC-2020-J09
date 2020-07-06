<html>
<head>
    <?php
        if ($_GET['page'] == 'page1'){
            echo "<title>Accueil!</title>";
        }
        elseif ($_GET['page'] == 'page2'){
            echo "<title>Page 2!</title>";
        }
        elseif ($_GET['page'] == 'page3') {
            echo "<title>Page 3!</title>";
        }
    ?>
</head>
<body>
    <nav>
        <ul>
            <li><a href="mini-site-routing.php?page=page1">Accueil</a></li>
            <li><a href="mini-site-routing.php?page=page2">Page 2</a></li>
            <li><a href="mini-site-routing.php?page=page3">Page 3</a></li>
        </ul>
    </nav>
    <?php
    
        if ($_GET['page'] == 'page1'){
            echo "<h1>Page d'accueil</h1>";
            echo "<p>Bienvenue sur la page d'accueil !</p>";
        }   
        elseif ($_GET['page'] == 'page2'){
            echo "<h1>Page 2</h1>";
            echo "<p>Bienvenue sur la page n°2 !</p>";
        }
        elseif ($_GET['page'] == 'page3') {
            echo "<h1>Page 3</h1>";
            echo "<p>Bienvenue sur la page n°3 !</p>";
        }
        elseif ($_GET["page"] == 'connexion') {
            include "connexion.php" ;
        }
    ?>


</body>
</html>