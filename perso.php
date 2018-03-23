<?php
include("header.php");
require("connect.php");
$id=$_GET['id'];
$auteur=$_GET['auteur'];


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
    <p><em>Créée par '.$auteur.'</em></p>
    <table>
    <tr>
    <div class="card-body">
        <td>
            <a href="perso.php?id='.$Tuple["id_perso"].'&auteur='.$Tuple["auteur"].'">
                <h3>'.$Tuple["prenom"].' '.$Tuple["nom"].'</h3>
            </a>
            <div class="persoElemt">
                '.$Tuple["age"].' ans - Créé par '.$Tuple["auteur"].'
            </div>
        </td>
        <td>
            <div class="persoType">
                '.$Tuple["type"].'
            </div>
            <img class="persoImage" src="image/'.$Tuple["image"].'"/>
        </td>
    </div>
    </tr>
    </br>';

$MaRequete="SELECT * FROM formcourt WHERE id_perso = '".$id."'";
$MonRs = $BDD -> query( $MaRequete );

while($donnees = $MonRs -> fetch())
{ 
    echo $donnees;
    echo 'a';
}


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
echo '</table></div></div></div>';
include("footer.php");
?>