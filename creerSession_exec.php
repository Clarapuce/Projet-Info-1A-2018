<?php 
include('includes/header.php');
require("connect.php"); 

$pseudo = htmlentities($_SESSION['pseudo']);
$nom = htmlentities($_POST['nom']);
$description = htmlentities($_POST['description']);

if(isset($_POST['formC'])) $formcourt=$_POST['formC'];
else $formcourt=0;
if(isset($_POST['formL'])) $formlong=$_POST['formL'];
else $formlong=0;

if (empty($_POST['description']))
{
    echo '<body onLoad="alert(\'Vous devez remplir la description de la session.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=creerSession.php?nom='.$nom.'">';
}
else if ((!isset($_POST['formC']) and (!isset($_POST['formL']))))
{
    echo '<body onLoad="alert(\'Vous devez sélectionner au moins un formulaire.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=creerSession.php?nom='.$nom.'&description='.$description.'">';
}
else
{
    $description=addslashes($description);
    $requete = $BDD -> exec("INSERT INTO sessions (nom_session,auteur,formcourt,formlong,description) VALUES ('$nom','$pseudo','$formcourt','$formlong','$description')"); //insère la session dans la table "sessions"
    echo '<body onLoad="alert(\'Session créée !\')">';
    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    exit();
}