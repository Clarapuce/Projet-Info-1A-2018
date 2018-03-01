<?php
    $BDD=new PDO(
        "mysql:hst=localhost;dbname=projet_web;charset=utf8",
        "administrateur",
        "admin",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        //$CurseurPays=$bdd -> query($MaRequete);
        //$tuple=$CurseurPays->fetch();
?>
