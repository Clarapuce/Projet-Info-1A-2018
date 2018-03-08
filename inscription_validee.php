<?php 
include('header.php');
require("connect.php"); 

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$mdp_verif = $_POST['mdp_verif'];

if (!empty($pseudo))
{
    if (!empty($mdp))
    {
        if ($mdp==$mdp_verif)
        {
            $resultat = $BDD -> query("SELECT pseudo FROM utilisateurs WHERE pseudo = '".$pseudo."'");
            $ligne = $resultat -> fetch();
            if (empty($ligne))
            {
                $requete = $BDD -> exec("INSERT INTO utilisateurs (pseudo, mdp) VALUES ('$pseudo', '$mdp')");

                echo '<body onLoad="alert(\'Inscription réussie !\')">';
                $_SESSION['statutStaff']= 0;
                $_SESSION['pseudo'] = $pseudo;
                echo '<meta http-equiv="refresh" content="0;URL=index.php">';
                exit();
                /**echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';**/
            }
            else
            {
                echo '<body onLoad="alert(\'Ce pseudo est déjà utilisé, veuillez en choisir un autre.\')">';
                echo '<meta http-equiv="refresh" content="0;URL=inscription.php">';
            } 
        }
        else
        {
            echo '<body onLoad="alert(\'Les mots de passe ne correspondent pas.\')">';
            echo '<meta http-equiv="refresh" content="0;URL=inscription.php">';
        }
    }
    else
    {
        echo '<body onLoad="alert(\'Veuillez renseigner votre mot de passe.\')">';
        echo '<meta http-equiv="refresh" content="0;URL=inscription.php">';
    }
}
else
{
    echo '<body onLoad="alert(\'Veuillez renseigner votre pseudo.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=inscription.php">';
}
?>
