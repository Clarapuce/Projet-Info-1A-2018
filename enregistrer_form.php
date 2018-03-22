<?php
include('header.php');
    require('connect.php');
    if($_GET['type']=="court")
    {
        $table='FORMCOURT';
    }
    else{$table='FORMLONG';}

    $MaRequete="INSERT INTO ".$table." (id_perso) VALUES('".$_GET['id_perso']."');";
    /*$question=array('maison','lieu_naissance','nom_naissance','bois_baguette',
    'contenu_baguette','animal','sante','niveau_scolaire','patronus','statut',
    'freres_soeurs','peau','taille','poids','yeux','couleur_cheveux','coupe','particularite','precisions',
    'objectif','objectif_autre','rapport_autrui','maniere_de_penser','ouverture','habitudes',
    'nature','strategie','confiance','anxiete','influence' ,'peur','peur_autre','hobby',
    'hobby_autre');*/

    
    $MonRs = $BDD -> query( $MaRequete );
    foreach($_POST as $key=>$value){
        if($value!=NULL){

            $colonne = "UPDATE ".$table." 
                        SET " . $key . "='" . $value ."'
                        WHERE id_perso='" . $_GET['id_perso']."';";
            
            $MonRs = $BDD -> query( $colonne );
        }
        
    }
    
    if($_GET['type']=="court")
    {
        header('Location:formLong.php?id_perso='.$_GET['id_perso']);
        exit();
    }
    else 
    {
        echo '
        <div class="container">
            <div class="jumbotron">
                <p>Votre personnage a bien été créé !</br>
                <a href=\'perso.php\'>Fiche personnage</a></br>
                <a href=\'index.php\'>Retour à la page d\'accueil</a></p>  
            </div>
        </div>';
    }

    ?>