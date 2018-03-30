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
            <p><em>Créé par '.$auteur.'</em>
            ';
            if (isset($_SESSION['pseudo']) AND $auteur == $_SESSION['pseudo']) echo '- <a href="formCourt.php?id_perso='.$Tuple['id'].'">Modifier le personnage</a> <br />';         
            echo '
            </p>
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

if($Tuple==null) echo "<em>Le questionnaire court n'a pas été rempli.</em>";
else
{
    foreach(array_combine($Tuple3,$Tuple) as $libelle => $value)
    {
        if (($value == NULL) OR ($libelle == 'Maison') OR ($libelle == 'Animal de compagnie') OR ($libelle == 'ID du formulaire') OR ($libelle == 'ID du personnage'));
        else if ($libelle == 'Objectif' AND $value == 0);
        else if ($libelle == 'Rapport à autrui')
        {
            if ($value == 1) echo $libelle.' : introverti<br />____<br />';
            if ($value == 2) echo $libelle.' : plutôt introverti<br />____<br />';
            if ($value == 3) echo $libelle.' : mitigé<br />____<br />';
            if ($value == 4) echo $libelle.' : plutôt extraverti<br />____<br />';
            if ($value == 5) echo $libelle.' : extraverti<br />____<br />';
        }
        else if ($libelle == 'Manière de penser')
        {
            if ($value == 1) echo $libelle.' : pragmatique<br />____<br />';
            if ($value == 2) echo $libelle.' : plutôt pragmatique<br />____<br />';
            if ($value == 3) echo $libelle.' : mitigé<br />____<br />';
            if ($value == 4) echo $libelle.' : plutôt créatif<br />____<br />';
            if ($value == 5) echo $libelle.' : créatif<br />____<br />';
        }
        else if ($libelle == 'Ouverture')
        {
            if ($value == 1) echo 'Ouverture d\'esprit : Rigide<br />____<br />';
            if ($value == 2) echo 'Ouverture d\'esprit : plutôt rigide<br />____<br />';
            if ($value == 3) echo 'Ouverture d\'esprit : mitigé<br />____<br />';
            if ($value == 4) echo 'Ouverture d\'esprit : plutôt ouvert d\'esprit<br />____<br />';
            if ($value == 5) echo 'Ouverture d\'esprit : ouvert d\'esprit<br />____<br />';
        }
        else if ($libelle == 'Manière de penser')
        {
            if ($value == 1) echo $libelle.' : introverti<br />____<br />';
            if ($value == 2) echo $libelle.' : plutôt introverti<br />____<br />';
            if ($value == 3) echo $libelle.' : mitigé<br />____<br />';
            if ($value == 4) echo $libelle.' : plutôt extraverti<br />____<br />';
            if ($value == 5) echo $libelle.' : extraverti<br />____<br />';
        }
        else if ($libelle == 'Habitudes')
        {
            if ($value == 1) echo $libelle.' : reste sur ses acquis<br />____<br />';
            if ($value == 2) echo $libelle.' : a tendance à rester sur ses acquis<br />____<br />';
            if ($value == 3) echo $libelle.' : mitigé<br />____<br />';
            if ($value == 4) echo $libelle.' : a tendance à innover<br />____<br />';
            if ($value == 5) echo $libelle.' : innove<br />____<br />';
        }
        else if ($libelle == 'Nature')
        {
            if ($value == 1) echo $libelle.' : rationnel<br />____<br />';
            if ($value == 2) echo $libelle.' : plutôt rationnel<br />____<br />';
            if ($value == 3) echo $libelle.' : mitigé<br />____<br />';
            if ($value == 4) echo $libelle.' : plutôt emotionnel<br />____<br />';
            if ($value == 5) echo $libelle.' : emotionnel<br />____<br />';
        }
        else if ($libelle == 'Stratégie')
        {
            if ($value == 1) echo $libelle.' : organisé<br />____<br />';
            if ($value == 2) echo $libelle.' : plutôt organisé<br />____<br />';
            if ($value == 3) echo $libelle.' : mitigé<br />____<br />';
            if ($value == 4) echo $libelle.' : plutôt flexible<br />____<br />';
            if ($value == 5) echo $libelle.' : flexible<br />____<br />';
        }
        else if ($libelle == 'Confiance en soi')
        {
            if ($value == 1) echo $libelle.' : peu confiant<br />____<br />';
            if ($value == 2) echo $libelle.' : plutôt peu confiant<br />____<br />';
            if ($value == 3) echo $libelle.' : mitigé<br />____<br />';
            if ($value == 4) echo $libelle.' : plutôt confiant<br />____<br />';
            if ($value == 5) echo $libelle.' : très confiant<br />____<br />';
        }
        else if ($libelle == 'Anxiété')
        {
            if ($value == 1) echo $libelle.' : calme<br />____<br />';
            if ($value == 2) echo $libelle.' : plutôt calme<br />____<br />';
            if ($value == 3) echo $libelle.' : mitigé<br />____<br />';
            if ($value == 4) echo $libelle.' : plutôt stressé<br />____<br />';
            if ($value == 5) echo $libelle.' : stressé<br />____<br />';
        }
        else if ($libelle == 'Influence du regard des autres')
        {
            if ($value == 1) echo $libelle.' : peu influençable<br />____<br />';
            if ($value == 2) echo $libelle.' : plutôt peu influençable<br />____<br />';
            if ($value == 3) echo $libelle.' : mitigé<br />____<br />';
            if ($value == 4) echo $libelle.' : plutôt influençable<br />____<br />';
            if ($value == 5) echo $libelle.' : influençable<br />____<br />';
        }
        else 
        {
            echo $libelle.' : '.$value.'<br />____<br />';
        }
    }
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