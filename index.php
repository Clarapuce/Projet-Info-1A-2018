<?php
include("includes/header.php");
require("connect.php");

$MaRequete="SELECT * FROM SESSIONS Order By nom_session"; //récupère les données de toutes les sessions
$MonRs = $BDD -> query( $MaRequete );
$retour = 1;

echo '
<div class="container">
    <div class="fond">
        <div class="alignement">
            <div class="bienvenue">Bienvenue !</div>

            <div class="staff">
                <div class="rondstaff">
                    <img class="imgstaff" src="http://image.noelshack.com/fichiers-md/2018/10/6/1520716094-06-90.jpg">
                    <div>pseudo<br />contacter</div>
                </div>
                <div class="rondstaff">
                    <img class="imgstaff" src="http://image.noelshack.com/fichiers-md/2018/10/6/1520716249-ga-tm1a.png">
                    <div>pseudo<br>contacter</div>
                </div>
                <div class="rondstaff">
                    <img class="imgstaff" src="http://image.noelshack.com/fichiers-md/2018/10/6/1520716072-51.jpg">
                    <div>pseudo<br>contacter</div>
                </div>
            </div>

            <div class="presentation_container"><br />
                <div class="presentation">
                    Ce site vous permettra de créer votre propre personnage dans l\'univers d\'Harry Potter en répondant à des questionnaires. Il vous suffit de vous inscrire et de cliquer sur "créer un personnage". Une session correspond à une promotion d\'élèves.
                </div>
            </div>

            <table class="table_accueil">
                <tr>
                    <td>
                        <div class="contexte">
                        La série de romans "Harry Potter" raconte les aventures d\'un jeune sorcier nommé Harry Potter et de ses amis Ron Weasley et Hermione Granger à l\'école de sorcellerie Poudlard, dirigée par Albus Dumbledore. L\'intrigue principale de la série met en scène le combat de Harry contre Lord Voldemort, un mage noir à la recherche de l\'immortalité ayant autrefois assassiné les parents du garçon. À la tête de ses fidèles adeptes, les Mangemorts, Voldemort cherche depuis des décennies à acquérir le pouvoir absolu sur le monde des sorciers et des Moldus, les humains sans pouvoirs magiques.
                        </div>
                    </td>
                    <td>
                        <div class="creerPerso"><a href="creerPerso.php">créer un personnage</a></div>
                        <div class="nouveautes">
                            • xx.xx.xx : nouveauté<br />
                            • xx.xx.xx : nouveauté<br />
                            • xx.xx.xx : nouveauté
                        </div>
                    </td>
                </tr>
            </table>
        </div><br /><br />

<h4>Sessions créées</h4>
<table class="liste_sessions">
    <tr>
';

while ($Tuple = $MonRs ->fetch() )
{
    echo '
    <td>
        <div class="card text-white bg-light mb-3" style="max-width: 24rem;">
            <div class="card-header">
                <a href="formulaires.php?id='.$Tuple["nom_session"].'&auteur='.$Tuple["auteur"].'">
                <h3>'.$Tuple["nom_session"].'</h3>
                </a>
                <p class="auteur">Créée par '.$Tuple["auteur"].'</p>
            </div>
            <div class="card-body">
                <p class="description">'.nl2br($Tuple["description"]).'</p>
            </div>
        </div>
    </td>
    ';
    if($retour==2)
    {
        $retour=1;
        echo'</tr><tr>';
    }
    else $retour ++; 
}
echo '</table></div></div>';   

include("includes/footer.php");
?>
