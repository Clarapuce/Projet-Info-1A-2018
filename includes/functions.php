<?php
function creerSession() //si la personne connectée est un membre du staff, affiche le lien pour créer une session
{
    if (isset($_SESSION['statutStaff']) AND isset($_SESSION['pseudo']) AND ($_SESSION['statutStaff']==11))
    {
        echo '<a href="creerSession.php" class="liens2">Créer une session</a>';
    }
}

function connexion() //affiche les liens en fonction de si la personne est connectée ou non
{
    if (isset($_SESSION['pseudo']))
    {
        echo '<a href="creerPerso.php" class="liens2">Créer un personnage</a> 
        <a href="profil.php" class="liens2">Voir mon profil</a> 
        <a href="deconnexion.php" title="deconnexion" class="liens3">Se déconnecter</a>';
    }
    else
    {
        echo '<a href="inscription.php" title="inscription" class="liens3">S\'inscrire</a> 
        <a href="connexion.php" title="connexion" class="liens3">Se connecter</a>';
    }
}

function erreur($err='') //affichage en cas d'erreur
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p>
   </div></div></div></body></html>');
}
?>
