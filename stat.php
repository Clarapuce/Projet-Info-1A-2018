<?php
include("includes/header.php");
require("connect.php");

echo'
<div class=container>
	<div class=fond>
		<div class= jumbotron>
			<a href ="formulaires.php?id='.$_GET['id'].'&auteur='.$_GET['auteur'].'"> Retour </a>
			<h2>Statistiques</h2>
';

$maison = array("Gryffondor","Serdaigle","Poufsouffle","Serpentard");
$effectif = array();

$MaRequeteTotale="SELECT COUNT(id) 
				FROM PERSO
				WHERE PERSO.session_perso = '".$_GET['id']."';";
$requete = $BDD -> query( $MaRequeteTotale);
$tab = $requete -> fetch();

$total = $tab[0];

$MaRequeteEleve="SELECT COUNT(id) 
				FROM PERSO
				WHERE PERSO.session_perso = '".$_GET['id']."'
				AND type='Élève';";
$requete = $BDD -> query( $MaRequeteEleve);
$tab = $requete -> fetch();

$total_eleve = $tab[0];

$MaRequeteProf = "SELECT COUNT(id) 
				FROM PERSO
				WHERE PERSO.session_perso = '".$_GET['id']."'
				AND type='Professeur';";
$requete = $BDD -> query( $MaRequeteProf);
$tab = $requete -> fetch();

$total_prof = $tab[0];

if ($total != 0)
{
	echo'<h5>Élèves</h5><br />';
	for ($i = 0; $i<4; $i++)
	{
		$MaRequete="SELECT COUNT(id_perso) 
					FROM (SELECT F.id_perso FROM FORMCOURT AS F INNER JOIN PERSO AS P ON F.id_perso = P.id 
					WHERE P.session_perso = '".$_GET['id']."' AND F.maison = '".$maison[$i]."'
					AND P.type = 'Élève')AS TYPEMAISON;";
		$requete = $BDD -> query( $MaRequete);
		$tab = $requete -> fetch();

		$taux_maison = $tab[0];
		$effectif[$i] = $taux_maison;

		echo '<img src="base_images/'.$maison[$i].'.png" class="icone"/>'.$taux_maison." ~ ";
		
	}
	if ($total_eleve !=0)
	{
		$RqMoyenneEleve="SELECT SUM(age)
				FROM PERSO
				WHERE session_perso = '".$_GET['id']."'
				AND type='Élève';";
		$requete = $BDD -> query( $RqMoyenneEleve);
		$tab=$requete -> fetch();
		$moyenne_age_eleve = $tab[0]/$total_eleve;
	}
	else {$moyenne_age_eleve=0;}
	
	if ($total_prof !=0)
	{
		$RqMoyenneProf="SELECT SUM(age)
				FROM PERSO
				WHERE session_perso = '".$_GET['id']."'
				AND type='Professeur';";
		$requete = $BDD -> query( $RqMoyenneProf);
		$tab=$requete -> fetch();
		$moyenne_age_prof = $tab[0]/$total_prof;
	}
	else {$moyenne_age_prof=0;}

	echo'<br /> 
			Nombre d\'élèves : '.$total_eleve.'<br />
			Moyenne d\'âge : '.$moyenne_age_eleve.'

			<table class="stat">
				<tr>
	';

	for ($i = 0; $i<4;$i++)
	{
		$pourcentage = $effectif[$i]/$total_eleve*100;
		$pourcentage = round ( $pourcentage , 1 );

		if ($pourcentage!=0)
		{
			echo'
					<td> 
						<img src="base_images/'.$maison[$i].'.png" class="icone"/>'.$pourcentage.'%
					</td>
			';
		}
	}

	echo '
				</tr>
				<tr>
	';

	$couleur=array('darkred','darkblue','yellow','green');
	if($total_eleve!=0)
	{
		for ($i = 0; $i<4;$i++)
		{
			$ratio = $effectif[$i]/$total_eleve*600;
			$ratio = round ( $ratio , 0 );

			if ($ratio != 0)
			{
				echo'
						<td> 
							<img src="base_images/barre_'.$couleur[$i].'.png" height="20px" width="'.$ratio.'px"/>
						</td>';
			}
		}
	}
	
	
	echo'
				</tr>
			</table><hr>

			<h5>Professeurs</h5></br>
	
			Nombre de professeurs: '.$total_prof.'</br>
			Moyenne d\'âge : '.$moyenne_age_prof.'<hr>

			<h5>Type d\'animaux de compagnie</h5><br />
			<table class="stat">
				<tr>
	';

	$animal=array('chat','rat','hibou','chouette');
	$nbAnimal=array();

	for ($i = 0; $i<4; $i++)
	{
		$MaRequeteAnimal = "SELECT COUNT(id_perso) 
					FROM (SELECT F.id_perso FROM FORMCOURT AS F INNER JOIN PERSO AS P ON F.id_perso = P.id 
					WHERE P.session_perso = '".$_GET['id']."' AND F.animal = '".$animal[$i]."'
					)AS TYPEMAISON;";
		$requete = $BDD -> query( $MaRequeteAnimal);
		$tab = $requete -> fetch();

		$nbAnimal[$i] = $tab[0];
		$pourcentage = $nbAnimal[$i]/$total*100;
		$pourcentage = round ( $pourcentage , 1 );

		if ($pourcentage!=0)
		{
			echo'
					<td> 
						<img src="base_images/'.$animal[$i].'.png" class="icone"/>'.$pourcentage.'%
					</td>
			';
		}
	}

	echo '
				</tr>
				<tr>
	';

	for ($i = 0; $i<4; $i++)
	{
		$ratio= $nbAnimal[$i]/$total*600;
		$ratio = round ( $ratio , 0 );
		if($ratio != 0)
		{
			echo'
					<td> 
						<img src="base_images/barre_'.$couleur[$i].'.png" height="20px" width="'.$ratio.'px"/>
					</td>
			';
		}
	}
	echo'
				</tr>
			</table>
	';
}

else
{
	echo 'Il n\'y a pas d\'élèves ni de professeurs dans cette promotion';
}

echo '
		</div>
	</div>
</div>
';

include("includes/footer.php");
?>