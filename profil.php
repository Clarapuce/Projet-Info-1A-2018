<?php
include("includes/header.php");
require("connect.php");

if (empty($_SESSION['pseudo'])) erreur(ERR_IS_CO); //si la personne n'est pas connectée, affiche une erreur
else
{
    $auteur=$_SESSION['pseudo'];

    echo '<div class="container">
        <div class="fond">
            Vous êtes connecté en tant que '.$auteur.'. <br /><br />
            <div class="alert alert-secondary" role="alert">
                <div class="card">
                    <div class="card-body">
                        <p class ="h2">Personnages que vous avez créés</p>
                    </div>
                </div>
                <div class="centre"><br />
    ';

    $MaRequete = "SELECT * FROM PERSO WHERE auteur= '".$auteur."'"; //recherche des personnages créés par l'auteur
    $MonRs = $BDD -> query( $MaRequete );
    while ($Tuple = $MonRs ->fetch())
    {
        echo '
                    <div class="card text-white bg-light mb-3" style="max-width: 34rem;">
                        <table class="table">
                            <tr>
                                <div class="card-body">
                                    <td>
                                        <a href="perso.php?id='.$Tuple["prenom"].' '.$Tuple["nom"].'">
                                        <h3>'.$Tuple["prenom"].' '.$Tuple["nom"].'</h3>
                                        </a>
                                        <div class="persoElemt">
                                            '.$Tuple["age"].' ans - Appartient à '.$Tuple["session_perso"].'
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
                        </table>
                    </div>
        ';
            
    }
    echo '</table></div></div>';

    if ($_SESSION['statutStaff']==11)
    {
        echo '
                    <div class="alert alert-secondary" role="alert">
                        <div class="card">
                            <div class="card-body">
                                <p class ="h2">Sessions que vous avez créées</p>
                            </div>
                        </div>
                        <div class="centre"><br />
        ';
            
        $MaRequete="SELECT * FROM SESSIONS WHERE auteur= '".$auteur."'"; //recherche des sessions créées par l'auteur si celui-ci est un membre du staff
        $MonRs = $BDD -> query( $MaRequete );
        while ($Tuple = $MonRs ->fetch() )
            {
                echo '
                            <div class="card text-white bg-light mb-3" style="max-width: 34rem;">
                                <table class="table">
                                    <tr>
                                        <div class="card-body">
                                            <td>
                                                    <a href="formulaires.php?auteur='.$auteur.'&id='.$Tuple["nom_session"].'">
                                                    <h3>'.$Tuple["nom_session"].'</h3>
                                                    </a>
                                                <div class="descr_session">
                                                    '.nl2br($Tuple["description"]).'
                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                </table>
                            </div>';
                
            }
        echo '</table></div></div></div>';  
    }

    else
    {
        echo '</div></div>';
    } 
}

include("includes/footer.php");
?>