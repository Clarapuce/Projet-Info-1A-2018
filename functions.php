<?php
function creerSession()
{
    if (isset($_SESSION['statutStaff']) AND isset($_SESSION['pseudo']) AND ($_SESSION['statutStaff']==11))
    {
        echo '<a href="creerSession.php" class="liens2">Créer une session</a>';
    }
}

function connexion()
{
    if (isset($_SESSION['pseudo']))
    {
        echo '<a href="creerPerso.php" class="liens2">Créer un personnage</a> 
        <a href="profil.php" class="liens2">Voir mon profil</a> 
        <a href="deconnexion.php" title="deconnexion" class="liens3">Se déconnecter</a>';
    }
    else
    {
        echo '<a href="inscription.php" title="inscription" class="liens3">S\'inscrire</a> <a href="connexion.php" title="connexion" class="liens3">Se connecter</a>';
    }
}

function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
}
?>
