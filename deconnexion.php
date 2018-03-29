<?php
include('includes/header.php');

if (empty($_SESSION['pseudo'])) erreur(ERR_IS_DE); //affiche une erreur si la personne est déjà déconnectée

else
{
    session_unset ();

    session_destroy ();

    header ('location: index.php');
}
?>
