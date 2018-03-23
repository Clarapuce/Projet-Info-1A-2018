<?php
/** bazar **/
include('header.php');
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

/**$_FILES['image']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
$_FILES['image']['type']     //Le type du fichier. Par exemple, cela peut être « image/png ».
$_FILES['image']['size']     //La taille du fichier en octets.
$_FILES['image']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
$_FILES['image']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.

$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
$image_sizes = getimagesize($_FILES['image']['tmp_name']);

if ($_FILES['image']['error'] > 0) 
{
    echo '<body onLoad="alert(\'Erreur lors du transfert d\'image.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=creerPerso.php?nom='.$nom.'&prenom='.$prenom.'">';
}
else if ($_FILES['image']['size'] > 1048576) 
{
    echo '<body onLoad="alert(\'Votre image est trop lourde.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=creerPerso.php?nom='.$nom.'&prenom='.$prenom.'">';
}
else if ( !in_array($extension_upload,$extensions_valides) ) 
{
    echo '<body onLoad="alert(\'Extension de l\'image incorrecte.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=creerPerso.php?nom='.$nom.'&prenom='.$prenom.'">';
}
else if ($image_sizes[0] > 500 OR $image_sizes[1] > 500) 
{
    echo '<body onLoad="alert(\'Dimensions de l\'image trop grandes.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=creerPerso.php?nom='.$nom.'&prenom='.$prenom.'">';
}**/

$MaRequete="INSERT INTO perso (auteur,nom,prenom,image,age,type,session_perso)
VALUES('".$_SESSION['pseudo']."','".$nom."','".$prenom."','".$file."','".$age."',
'".$type."','".$session."');";
$MonRs = $BDD -> query( $MaRequete );
$target_dir="image/";
$target_file=$target_dir . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
$recupID=   "SELECT id FROM perso 
            WHERE auteur='".$_SESSION['pseudo']."'
            AND nom='".$nom."'
            AND prenom='".$prenom."'
            AND type='".$type."'
            AND session_perso='".$session."';";
$requete = $BDD -> query( $recupID );
$tab=$requete -> fetch();
$id_perso = $tab[0];

echo '<body onLoad="alert(\'Personnage créé !\')">';
echo '<meta http-equiv="refresh" content="0;URL=formCourt.php?id_perso='.$id_perso.'">';
//a enlever, passer direct à la page suivante

//exit();
}