<?php
try
{
    $BDD=new PDO(
        "mysql:hst=localhost;dbname=projet_web;charset=utf8",
        "administrateur",
        "admin",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e) {
    die('Erreur fatale : ' . $e->getMessage());
}  
?>
