<?php
include('header.php');
    require('connect.php');
    //$MaRequete='INSERT INTO FORMCOURT (id_perso) VALUES('.$_POST['id_perso'].');';
    $question=array('maison','lieu_naissance','nom_naissance','bois_baguette',
    'contenu_baguette','animal','sante','niveau_scolaire','patronus','statut',
    'freres_soeurs','peau','taille','poids','yeux','couleur_cheveux','coupe','objectif[]',
    'Rapport à autrui','Manière de penser','Ouverture',
    'Habitudes','Nature','Stratégie','Confiance en soi',
    'Anxiété','Influence du regard des autres','peur','hobby');
    //$MonRs = $BDD -> query( $MaRequete );
    foreach($_POST as $key=>$value){
        echo $key . ' = ' . $value . '<br>';
    }
    for($i=0;$i<29;$i++)
    {
        $colonne = "UPDATE FORMCOURT 
        SET " . $question[$i]."='".$_POST[$question[$i]]."'
        WHERE id_perso=".$_POST['id_perso'].";";
        //var_dump($colonne);
        $MonRs = $BDD -> query( $colonne );

        
    }

    include('footer.php');
    ?>