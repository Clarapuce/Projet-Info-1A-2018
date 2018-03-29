<?php
include('includes/header.php');
require("connect.php"); 

$pseudo = $_SESSION['pseudo'];
$session = $_POST['session_choisie'];
$prenom = addslashes(htmlentities($_POST['prenom']));
$nom = addslashes(htmlentities($_POST['nom']));
$age = $_POST['age'];

if (!isset($_POST['type']))
{
    echo '<body onLoad="alert(\'Vous devez sélectionner un type de personnage.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=creerPerso.php?nom='.$nom.'&prenom='.$prenom.'">';
}
else
{
    $type = $_POST['type'];
    $file = $_FILES['image']["name"];

    $MaRequete = "INSERT INTO perso (auteur,nom,prenom,image,age,type,session_perso)
    VALUES('".$_SESSION['pseudo']."','".$nom."','".$prenom."','".$file."','".$age."',
    '".$type."','".$session."');"; //ajoute le personnage à la table "perso"
    $MonRs = $BDD -> query( $MaRequete );
    
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
    
    $recupID =   "SELECT id FROM perso WHERE auteur='".$_SESSION['pseudo']."'
    AND nom='".$nom."' AND prenom='".$prenom."' AND type='".$type."' AND session_perso='".$session."';";
    $requete = $BDD -> query( $recupID );
    $tab = $requete -> fetch();

    $id_perso = $tab[0];
    echo '<meta http-equiv="refresh" content="0;URL=formCourt.php?id_perso='.$id_perso.'">';
}