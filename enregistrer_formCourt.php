<?php
include('header.php');
    require('connect.php');
    //$MaRequete='INSERT INTO FORMCOURT (id_perso) VALUES('.$_POST['id_perso'].');';
    /*$question=array('maison','lieu_naissance','nom_naissance','bois_baguette',
    'contenu_baguette','animal','sante','niveau_scolaire','patronus','statut',
    'freres_soeurs','peau','taille','poids','yeux','couleur_cheveux','coupe','particularite','precisions',
    'objectif','objectif_autre','rapport_autrui','maniere_de_penser','ouverture','habitudes',
    'nature','strategie','confiance','anxiete','influence' ,'peur','peur_autre','hobby',
    'hobby_autre');*/

    var_dump($_POST['id_perso']);

    foreach($_POST as $key=>$value){
        if($key!='id_perso')
        {
            if($value!=NULL){
                echo $key . ' = ' . $value . '<br>';

                $colonne = "UPDATE FORMCOURT 
                            SET " . $key . "='" . $value ."'
                            WHERE id_perso=" . $_POST['id_perso'].";";
                
                $MonRs = $BDD -> query( $colonne );
            }
        }
        
    }
    //$MonRs = $BDD -> query( $MaRequete );
    include('footer.php');
    ?>