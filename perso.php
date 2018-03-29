<?php
include("includes/header.php");
require("connect.php");

$id=$_GET['id'];
$auteur=$_GET['auteur'];

$MaRequete="SELECT * FROM formcourt WHERE id_perso = '".$id."'"; //récupère les réponses au questionnaire court du personnage
$MonRs = $BDD -> query( $MaRequete );
$Tuple = $MonRs -> fetch();
$animal=$Tuple['animal'];
$maison=$Tuple['maison'];

$MaRequete="SELECT * FROM perso WHERE id = '".$id."'"; //récupère les informations de base du personnage
$MonRs = $BDD -> query( $MaRequete );
$Tuple = $MonRs ->fetch();

echo '
<div class="container">
    <div class="fond">
        <div class="alert alert-secondary" role="alert">
            <div class="card">
                <div class="card-body">
                    <p class ="h2">'.$Tuple['prenom'].' '.$Tuple['nom'].'</p> 
                </div>
            </div>
            <p><em>Créé par '.$auteur.'</em></p>
            <table class="persoTable">
                <tr>
                    <td>
                        <div class="persoImagePageContainer">
                            <img class="persoImagePage" src="image/'.$Tuple["image"].'"/><br />
                            <img class="persoAnimal" ' ;

if ($animal=='chouette') echo 'src="base_images/chouette.png" alt="Animal de compagnie"/>';
else if ($animal=='hibou') echo 'src="base_images/hibou.png" alt="Animal de compagnie"/>';
else if ($animal=='rat') echo 'src="base_images/rat.png" alt="Animal de compagnie"/>';
else if ($animal=='chat') echo 'src="base_images/chat.png" alt="Animal de compagnie"/>';

echo '
                            <img class="persoMaison" ';
if ($maison == 'Gryffondor') echo 'src="base_images/Gryffondor.png"/>';
else if ($maison == 'Serdaigle') echo 'src="base_images/Serdaigle.png"/>';
else if ($maison == 'Poufsouffle') echo 'src="base_images/Poufsouffle.png"/>';
else if ($maison == 'Serpentard') echo 'src="base_images/Serpentard.png"/>';

echo '
                        </div>
                    </td>
                    
                    <td>
                        <div class="persoDesc">
                            <div class="persoType">'.$Tuple["type"].'</div>    
                            '.$Tuple['age'].' ans<br />
';

$MaRequete="SELECT * FROM formcourt WHERE id_perso = '".$id."'"; //récupère les réponses au questionnaire court du personnage
$MonRs = $BDD -> query( $MaRequete );
$Tuple = $MonRs -> fetch();

$MaRequete3 = "SELECT * FROM formlibelles"; //récupère le libellé de chaque réponse
$MonRs3 = $BDD -> query($MaRequete3);
$Tuple3 = $MonRs3 -> fetch();

foreach(array_combine($Tuple3,$Tuple) as $libelle => $value)
{
    if (($libelle == 'Maison') OR ($libelle == 'Animal de compagnie') OR ($libelle == 'ID du formulaire') OR ($libelle == 'ID du personnage'));
    else if($value == NULL);
    else echo $libelle.' : '.$value.'<br />____<br />';
}
echo'
                        </div>
                    </td>
                </tr>
            </table></br>
';

$MaRequete="SELECT * FROM formlong WHERE id_perso = '".$id."'"; //récupère les réponses au questionnaire long du personnage
$MonRs = $BDD -> query( $MaRequete );
$Tuple = $MonRs ->fetch();

echo '
            <h4>Histoire</h4>
            '.$Tuple['histoire'].'<br /><br />

            <h4>Mental</h4>
            '.$Tuple['mental'].'<br /><br />

            <h4>Physique</h4>
            '.$Tuple['physique'].'<br /><br /><br />

        </div>
    </div>
</div>
';
include("includes/footer.php");
?>