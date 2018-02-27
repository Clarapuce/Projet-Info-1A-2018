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

        <div class="navbar navbar-default" role="navigation">
            <!-- Partie de la barre toujours affichée -->
            <div class="navbar-header">
                <!-- Bouton d'accès affiché à droite si la zone d'affichage est trop petite -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                    <span class="sr-only">Activer la navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Accueil</a>
          <span class="ajouter_film"><?php ajouter_film() ?></span>
      </div>
            </div>
            
            <!-- Partie de la barre masquée si la surface d'affichage est insuffisante -->
            <div class="collapse navbar-collapse" id="navbar-collapse-target">
                <div class="dropdown_position"><div class="dropdown">
                
<?php connexion() ?>
                </div></div>
            </div>
        </div>

        <body>
            

<?php
function ajouter_film()
{
    if (isset($_SESSION['usr_id']) AND isset($_SESSION['pseudo']))
    {
        echo '<a href="ajout_film.php">Ajouter un film</a>';
    }
    else
    {
        
    }
}
function connexion()
{
    if (isset($_SESSION['usr_id']) AND isset($_SESSION['pseudo']))
    {
        echo '<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Bienvenue '.$_SESSION['pseudo'].'
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="deconnexion.php" title="deconnexion">Se déconnecter</a></li>
        </ul>';
    }
    else
    {
        echo '<a href="connexion.php" title="connexion">Se connecter</a>';
    }
}
?>

               
        
