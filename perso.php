<?php
include("header.php");
require("connect.php");
$id=$_GET['id'];
$auteur=$_GET['auteur'];

$MaRequete="SELECT * FROM FORMCOURT WHERE id_perso = '".$id."'";
$MonRs = $BDD -> query( $MaRequete );
$Tuple = $MonRs -> fetch();
$animal=$Tuple['animal'];

$MaRequete="SELECT * FROM PERSO WHERE id = '".$id."'";
$MonRs = $BDD -> query( $MaRequete );
$Tuple = $MonRs ->fetch();

echo '
<div class="container"><div class="fond">
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
                <img class="persoImagePage" src="image/'.$Tuple["image"].'"/>
                <br /><img class="persoAnimal" ' ;
                
if ($animal=='Chouette') echo 'src="image/chouette.png" alt="Animal de compagnie"/> <div class="persoAnimalTexte">Animal : chouette</div>';
else if ($animal=='Hibou') echo 'src="image/hibou.png" alt="Animal de compagnie"/> <div class="persoAnimalTexte">Animal : hibou</div>';
else if ($animal=='Rat') echo 'src="image/rat.png" alt="Animal de compagnie"/> <div class="persoAnimalTexte">Animal : rat</div>';
else if ($animal=='Chat') echo 'src="image/chat.png" alt="Animal de compagnie"/> <div class="persoAnimalTexte">Animal : chat</div>';

echo '
            </div>
            </td>
            
            <td>
                <div class="persoDesc">
                <div class="persoType">'.$Tuple["type"].'</div>    
                '.$Tuple['age'].' ans<br />';

                $MaRequete="SELECT * FROM formcourt WHERE id_perso = '".$id."'";
                $MonRs = $BDD -> query( $MaRequete );
                $Tuple = $MonRs -> fetch();
                
                $MaRequete3 = "SELECT * FROM formlibelles";
                $MonRs3 = $BDD -> query($MaRequete3);
                $Tuple3 = $MonRs3 -> fetch();

                $a=0;
                foreach(array_combine($Tuple3,$Tuple) as $libelle => $value)
                {
                    if (($libelle=='Animal de compagnie') OR ($a==0)) $a+=1;
                    else if($a==1) $a+=1;
                    else if($value==NULL);
                    else echo $libelle.' : '.$value.'<br />____<br />';
                }
                echo'
                </div>
                
            </td>
        </tr>
    </table>
    </br>';

$MaRequete="SELECT * FROM formlong WHERE id_perso = '".$id."'";
$MonRs = $BDD -> query( $MaRequete );
$Tuple = $MonRs ->fetch();
echo '<h4>Histoire</h4>
'.$Tuple['histoire'].'<br /><br />
<h4>Mental</h4>
'.$Tuple['mental'].'<br /><br />
<h4>Physique</h4>
'.$Tuple['physique'].'<br /><br /><br />
</div></div></div>';
include("footer.php");
?>