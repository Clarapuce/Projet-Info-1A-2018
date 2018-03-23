<?php
include("header.php");
require("connect.php");

$maison = array("Gryffondor","Serdaigle","Poufsouffle","Serpentard");
for ($i = 0; $i<4;$i++)
{
    $MaRequette="SELECT COUNT(maison) 
                FROM (SELECT * FROM FORMCOURT WHERE maison ='".$maison[$i]."') AS TYPEMAISON;";
    $requete = $BDD -> query( $MaRequette);
    $tab=$requete -> fetch();
    $taux_maison = $tab[0];
    echo $maison[$i]." : ".$taux_maison;

}
?>

<?php include("footer.php");
?>