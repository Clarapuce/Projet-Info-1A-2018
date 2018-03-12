<?php 
/**ajouter sécurité */
include('header.php');
require("connect.php"); 

$pseudo = htmlentities($_POST['pseudo']);
$mdp = htmlentities($_POST['mdp']);

$resultat = $BDD -> query("SELECT statutStaff FROM utilisateurs WHERE pseudo = '".$pseudo."' AND mdp = '".$mdp."'");
$ligne = $resultat -> fetch();

if ($ligne==null)
{
    echo '<body onLoad="alert(\'Membre non reconnu\')">';
    echo '<meta http-equiv="refresh" content="0;URL=connexion.php?pseudo='.$pseudo.'">';
}
else
{
    $_SESSION['statutStaff']= implode("",$ligne);
    $_SESSION['pseudo'] = $pseudo;
    header('location: index.php');
    exit();
}?>
