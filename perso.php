<?php
include("header.php");
require("connect.php");
$id=$_GET['id'];
$auteur=$_GET['auteur'];
$animal='Chouette';

$MaRequete="SELECT * FROM PERSO WHERE id_perso = '".$id."'";
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
    <table>
        <tr>
            <td>
                <div class="persoImagePageContainer">
                <img class="persoImagePage" src="image/'.$Tuple["image"].'"/>
                <img class="persoAnimal" ' ;
if ($animal=='Chouette') echo 'src="image/chouette.png" alt="Animal de compagnie"/>
            </div>
            </td>
            
            <td>
                <div class="persoDesc">
                <div class="persoType">'.$Tuple["type"].'</div>    
                '.$Tuple['age'].' ans<br />';

                $MaRequete="SELECT * FROM formcourt WHERE id_perso = '".$id."'";
                
                $MonRs = $BDD -> query( $MaRequete );
                $Tuple = $MonRs -> fetch();
                
                $MaRequete2="SELECT column_name FROM information_schema.columns WHERE table_name = 'formcourt' AND table_schema='projet_web'";
                $MonRs2 = $BDD -> query( $MaRequete2 );
                $Tuple2 = $MonRs2 -> fetch();
                
                $a=0;
                $numColonne=0;
                foreach($Tuple as $value)
                { 
                    if($a==0) $a=$a+1;
                    else if ($a==2)
                    {
                        $b=$Tuple2[$numColonne];
                        $MaRequete3 = "SELECT $Tuple2[$numColonne] FROM formlibelles";
                        $MonRs3 = $BDD -> query($MaRequete2);
                        $MonRs3 -> fetch();
                        
                        echo $MonRs3[$b].$value."<br />";
                        $a=3;
                        $numColonne=$numColonne+1;
                    }
                    else $a=2;
                }
                echo'
                </div>
                
            </td>
        </tr>
    </table>
    </br>';




/**echo $key=$value
 foreach($Tuple as $key=>$value){
    if($key!='id_perso')
    {
        if($value!=NULL){
            echo $key . ' = ' . $value . '<br>';

            $colonne = "UPDATE FORMCOURT 
                        SET " . $key . "='" . $value ."'
                        WHERE id_perso=" . $_POST['id_perso'].";";
            
            $MonRs = $BDD -> query( $colonne );
        }
    }
}  
   **/

   
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