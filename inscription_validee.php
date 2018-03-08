<?php 
include('header.php');
require("connect.php"); 

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$mdp_verif = $_POST['mdp_verif'];

if ($mdp==$mdp_verif)
{
    $requete = $BDD -> exec("INSERT INTO utilisateurs (pseudo, mdp) VALUES ('$pseudo', '$mdp')");

    echo '<body onLoad="alert(\'Inscription réussie !\')">';
    echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';
}
else
{
    echo '<body onLoad="alert(\'Les mots de passe ne correspondent pas.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=inscription.php">';
}
?>