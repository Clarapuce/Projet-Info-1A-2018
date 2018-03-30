<?php 
include('includes/header.php');
require("connect.php"); 

$pseudo = addslashes(htmlentities($_POST['pseudo']));
$mdp = addslashes(htmlentities($_POST['mdp']));
$mdp_verif = addslashes(htmlentities($_POST['mdp_verif']));

if ($mdp == $mdp_verif)
{
    $resultat = $BDD -> query("SELECT pseudo FROM utilisateurs WHERE pseudo = '".$pseudo."'"); //vérifie que l'utilisateur n'existe pas déjà
    $ligne = $resultat -> fetch();
    if (empty($ligne))
    {
        $requete = $BDD -> exec("INSERT INTO utilisateurs (pseudo, mdp) VALUES ('$pseudo', '$mdp')"); //ajoute le pseudo de l'utilisateur et son mot de passe à la base de données

        echo '<body onLoad="alert(\'Inscription réussie !\')">';
        $_SESSION['statutStaff']= 0;
        $_SESSION['pseudo'] = $pseudo;
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
        exit();
    }
    else
    {
        echo '<body onLoad="alert(\'Ce pseudo est déjà utilisé, veuillez en choisir un autre.\')">';
        echo '<meta http-equiv="refresh" content="0;URL=inscription.php?pseudo='.$pseudo.'">';
    } 
}
else
{
    echo '<body onLoad="alert(\'Les mots de passe ne correspondent pas.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=inscription.php?pseudo='.$pseudo.'">';
}

?>
