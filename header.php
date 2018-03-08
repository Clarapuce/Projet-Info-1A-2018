<!doctype html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Projet Web</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <title>Projet Web <?php if (isset($pageTitle)) echo "- $pageTitle"; ?></title>
        <!-- JavaScript Boostrap plugin -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>

        <body>
        
        <div class="header">
        <a href="index.php" class="liens1">Accueil</a>
    <span class="h_responsive_br">
        <p id="menu">Menu</p>
        <div id="dropdown" class="dropdown-content">
            <span><?php creerSession() ?>
            <?php connexion() ?></span>
        </div>
    </span>
        <script>
// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("menu").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
document.getElementById("dropdown").classList.toggle("show");
}
</script>

        
    <span class="h_responsive">
        <?php creerSession() ?>
        <?php connexion() ?>
    </span>
    </div>
       <br /><br />
       <?php
       function creerSession()
       {
           if (isset($_SESSION['statutStaff']) AND isset($_SESSION['pseudo']) AND ($_SESSION['statutStaff']==11))
           {
               echo '<a href="creerSession.php" class="liens2">Créer une session</a>';
           }
           else
           {
               
           }
       }
       function connexion()
       {
           if (isset($_SESSION['pseudo']))
           {
               echo '<a href="creerPerso.php" class="liens2">Créer un personnage</a> 
               <a href="deconnexion.php" title="deconnexion" class="liens3">Se déconnecter</a>';
           }
           else
           {
               echo '<a href="inscription.php" title="inscription" class="liens3">S\'inscrire</a> <a href="connexion.php" title="connexion" class="liens3">Se connecter</a>';
           }
       }
       ?>
