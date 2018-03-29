<?php
include('includes/header.php');
require('connect.php');

if ($_GET['type']=="court")
{
    $table='FORMCOURT';
}
else $table='FORMLONG';

$MaRequete="INSERT INTO ".$table." (id_perso) VALUES('".$_GET['id_perso']."');"; //crée dans la table correspondant au formulaire rempli une ligne dédiée au personnage créé
$MonRs = $BDD -> query($MaRequete);
foreach($_POST as $key=>$value)
{
    if($value!=NULL)
    {
        $value=addslashes(htmlentities($value));
        $colonne = "UPDATE ".$table." 
                    SET " . $key . "='" . $value ."'
                    WHERE id_perso ='" . $_GET['id_perso']."';"; //insère une à une les valeurs dans la ligne créée précédemment
        $MonRs = $BDD -> query( $colonne );
    }
    
}

if ($_GET['type']=="court")
{
    header('Location:formLong.php?id_perso='.$_GET['id_perso']);
    exit();
}
else 
{
    echo '
    <div class="container">
        <div class="jumbotron">
            <p>Votre personnage a bien été créé !<br />
                <a href=\'perso.php?id='.$_GET['id_perso'].'&auteur='.$_SESSION['pseudo'].'\'>Fiche personnage</a><br />
                <a href=\'index.php\'>Retour à la page d\'accueil</a>
            </p>  
        </div>
    </div>
    ';
}
?>