<?php
/** bazar **/
include('header.php');
require("connect.php"); 

$session = $_POST['session_choisie'];
$prenom = htmlentities($_POST['prenom']);
$nom = htmlentities($_POST['nom']);
$age = $_POST['age'];

if (!isset($_POST['type']))
{
    echo '<body onLoad="alert(\'Vous devez sélectionner un type de personnage.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=creerPerso.php?nom='.$nom.'&prenom='.$prenom.'"&age='.$age.'">';
}
else
{

$type = $_POST['type'];



$file = $_FILES['image']["name"];
/**$_FILES['image']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
$_FILES['image']['type']     //Le type du fichier. Par exemple, cela peut être « image/png ».
$_FILES['image']['size']     //La taille du fichier en octets.
$_FILES['image']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
$_FILES['image']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.
**/
/**$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
$image_sizes = getimagesize($_FILES['image']['tmp_name']);

if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";
else if ($_FILES['image']['size'] > 1048576) $erreur = "Le fichier est trop gros";
else if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
else if ($image_sizes[0] > 500 OR $image_sizes[1] > 500) $erreur = "Image trop grande";
echo $erreur;
**/

$MaRequete="INSERT INTO perso (auteur,nom,prenom,image,age,type,session_perso)
VALUES('".$_SESSION['pseudo']."','".$nom."','".$prenom."','".$file."','".$age."',
'".$type."','".$session."');";
$MonRs = $BDD -> query( $MaRequete );
$target_dir="image/";
$target_file=$target_dir . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
echo '<body onLoad="alert(\'Personnage créé !\')">';
echo '<meta http-equiv="refresh" content="0;URL=index.php">';
exit();
}