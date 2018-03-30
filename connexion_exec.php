<?php 

include('includes/header.php');
require('connect.php'); 

$pseudo = addslashes(htmlentities($_POST['pseudo']));
$mdp = addslashes(htmlentities($_POST['mdp']));

$resultat = $BDD -> query("SELECT statutStaff FROM utilisateurs WHERE pseudo = '".$pseudo."' AND mdp = '".$mdp."'"); //vérifie que les données sont correctes et que le membre existe
$ligne = $resultat -> fetch();

if ($ligne==null)
{
    echo '<body onLoad="alert(\'Membre non reconnu\')">';
    echo '<meta http-equiv="refresh" content="0;URL=connexion.php?pseudo='.$pseudo.'">';
}
else
{
    $_SESSION['statutStaff']= implode("",$ligne); //conversion de l'array statutStaff
    $_SESSION['pseudo'] = $pseudo;
    header('location: index.php');
    exit();
}
?>
