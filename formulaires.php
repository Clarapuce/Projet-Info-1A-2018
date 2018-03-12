<?php
include("header.php");

require("connect.php");
$id=$_GET['id'];
$auteur=$_GET['auteur'];
echo '
<div class="container">
<div class="alert alert-secondary" role="alert">
    <div class="card">
        <div class="card-body">
        
        <p class ="h2">'.$id.'</p>
        </div>
    </div>
    <p><em>Créée par '.$auteur.'</em></p>
    <div class="centre">
    </br>';
    
    $MaRequete="SELECT * FROM PERSO WHERE session_perso= '".$id."'";
    $MonRs = $BDD -> query( $MaRequete );
    while ($Tuple = $MonRs ->fetch() )
    {
        echo '
        <div class="card text-white bg-light mb-3" style="max-width: 34rem;">
            <table class="table">
                <tr>
                    <td>
                    <div class="card-body">
                    <a href="perso.php?id='.$Tuple["prenom"].' '.$Tuple["nom"].'">
                        <h3>'.$Tuple["prenom"].' '.$Tuple["nom"].
                        '</h3>
                    </a>
                    <div class="persoElemt">'.$Tuple["age"].' ans - Créé par '.$Tuple["auteur"].'</div>
                    </td>
                    <td>
                    <div class="persoType">'.$Tuple["type"].'</div>
                    <img class="persoImage" src="image/'.$Tuple["image"].'"/>
                        
                    </div>
                    </td>
                </tr>
            </table>
        </div>';
        
}
echo '</table></div></div></div>';
include("footer.php");
?>
