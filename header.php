<!doctype html>
<?php session_start(); 
include('functions.php');
include('constants.php');     
?>
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

       <br /><br /><br />

