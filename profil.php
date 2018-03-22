<?php
include("header.php");
require("connect.php");

$auteur=$_SESSION['pseudo'];


echo '
<div class="container">
Vous êtes connecté en tant que '.$auteur.'. <br /><br />
<div class="alert alert-secondary" role="alert">
    <div class="card">
        <div class="card-body">
        
        <p class ="h2">Personnages que vous avez créés</p>
        </div>
    </div>
    <div class="centre">
    </br>';
    
    $MaRequete="SELECT * FROM PERSO WHERE auteur= '".$auteur."'";
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
                    <div class="persoElemt">'.$Tuple["age"].' ans - Appartient à '.$Tuple["session"].'</div>
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

if ($_SESSION['statutStaff']==11)
{
    echo '
    <div class="container">
    <div class="alert alert-secondary" role="alert">
        <div class="card">
            <div class="card-body">
            
            <p class ="h2">Sessions que vous avez créées</p>
            </div>
        </div>
        <div class="centre">
        </br>';
        
        $MaRequete="SELECT * FROM SESSIONS WHERE auteur= '".$auteur."'";
        $MonRs = $BDD -> query( $MaRequete );
        while ($Tuple = $MonRs ->fetch() )
        {
            echo '
            <div class="card text-white bg-light mb-3" style="max-width: 34rem;">
                <table class="table">
                    <tr>
                        <td>
                        <div class="card-body">
                        <a href="formulaires.php?auteur='.$auteur.'&id='.$Tuple["nom_session"].'">
                            <h3>'.$Tuple["nom_session"].'</h3>
                        </a>
                        <div class="descr_session">'.nl2br($Tuple["description"]).'</div>
                        </td>
                     
                    </tr>
                </table>
            </div>';
            
        }
    echo '</table></div></div></div>';  
}

include("footer.php");
?>