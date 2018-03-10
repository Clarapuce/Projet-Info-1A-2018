<?php
include('header.php');

if (empty($_SESSION['pseudo'])) erreur(ERR_IS_DE);

else
{
    session_unset ();

    session_destroy ();

    header ('location: index.php');
}
?>
