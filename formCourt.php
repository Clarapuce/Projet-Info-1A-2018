<?php
include("includes/header.php");
require("connect.php");

if (!isset($_SESSION['statutStaff'])) erreur(NOT_CO); //si la personne n'est pas connectée, renvoie une erreur
if(!isset($_GET['id_perso'])) erreur(NO_CHARACTER); //si on n'a pas accédé à la création de personnage auparavant, renvoie une erreur

$id_perso=$_GET['id_perso'];
?>

<div class="container">
    <div class="jumbotron">
    
        <h1>Questionnaire de Proust</h1><br />
        <form action = "enregistrer_form.php?id_perso=<?php echo $_GET['id_perso']?>&amp;type=court" method ="POST">
<!--=================================================================================== -->
            <h2 class="form_titre">GÉNÉRALITÉS</h2>
            <hr>

            <p>Maison :</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" required name="maison" id="inlineRadio1" value="Gryffondor" >
                <label class="form-check-label" for="inlineRadio1">Gryffondor</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" required name="maison" id="inlineRadio1" value="Serdaigle" >
                <label class="form-check-label" for="inlineRadio1">Serdaigle</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" required name="maison" id="inlineRadio1" value="Poufsouffle" >
                <label class="form-check-label" for="inlineRadio1">Poufsouffle</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" required name="maison" id="inlineRadio1" value="Serpentard" >
                <label class="form-check-label" for="inlineRadio1">Serpentard</label>
            </div><br /><br />
            
            <div class="form-group">
                <label for="exampleFormControlSelect2">Lieu de naissance</label>
                <select multiple class="form-control" id="exampleFormControlSelect2" name ="lieu_naissance" required>
                    <option value="Ville">Ville</option>
                    <option value ="Banlieu">Banlieue</option>
                    <option value ="Campagne">Campagne</option>
                </select>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Nom du lieu de naissance :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" required name="nom_naissance">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Bois de la baguette :</label>
                <select class="form-control" id="exampleFormControlSelect1" required name="bois_baguette" >
                    <option value="Saule">Bois de Saule</option>
                    <option value="Vigne">Bois de Vigne</option>
                    <option value="Chêne">Bois de Chêne</option>
                    <option value="If">Bois d'If</option>
                    <option value="Aubépine">Bois d'Aubépine</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Contenu de la baguette :</label>
                <select class="form-control" id="exampleFormControlSelect1" required name="contenu_baguette" required>
                    <option value="Ventricule de dragon">Ventricule de dragon</option>
                    <option value="Plume de Phénix">Plume de Phénix</option>
                    <option value="Bois de licorne">Bois de licorne</option>
                </select>
            </div>
            
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Animal de compagnie</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" required name="animal" id="inlineRadio1" value="chat">
                            <label class="form-check-label" for="inlineRadio1">Chat</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" required name="animal" id="inlineRadio1" value="rat">
                            <label class="form-check-label" for="inlineRadio1">Rat</label>
                        </div>
                
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" required name="animal" id="inlineRadio1" value="hibou">
                            <label class="form-check-label" for="inlineRadio1">Hibou</label>
                        </div>
                
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" required name="animal" id="inlineRadio1" value="chouette">
                            <label class="form-check-label" for="inlineRadio1">Chouette</label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0"> Niveau de santé :</legend>
                    <div class="col-sm-3">
                        <label class="form-check-label" for="inlineRadio1">Fragile</label>
                    </div>
                    <div class="col-sm-4">
                        <?php 
                            for($j = 1; $j <6;$j++)
                            {
                                echo'
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" required name="sante" id="inlineRadio2" value="'.$j.'">
                                    </div>
                                ';
                            }
                        ?>
                    </div>
                    <div class="col-sm-2">
                        <label class="form-check-label" for="inlineRadio1">Robuste</label>
                    </div>
                </div>
            </fieldset>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0"> Niveau scolaire :</legend>
                    <div class="col-sm-3">
                        <label class="form-check-label" for="inlineRadio1">Mauvais élève</label>
                    </div>
                    <div class="col-sm-4">
                        <?php 
                            for($j = 1; $j <6;$j++)
                            {
                                echo'
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" required name="niveau_scolaire" id="inlineRadio2" value="'.$j.'">
                                    </div>
                                ';
                            }
                        ?>
                    </div>
                    <div class="col-sm-2">
                        <label class="form-check-label" for="inlineRadio1">Excellent élève</label>
                    </div>
                </div>
            </fieldset>
                        
            <div class="form-group">
                <label for="formGroupExampleInput">Patronus :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" required name="patronus" >
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Statut :</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="statut" id="gridRadios1" value="Né-Moldu" checked>
                            <label class="form-check-label" for="gridRadios1">Né-moldu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="statut" id="gridRadios2" value="Sang-mêlé">
                            <label class="form-check-label" for="gridRadios2">
                                Sang-mêlé
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="statut" id="gridRadios2" value="Sang-pur">
                            <label class="form-check-label" for="gridRadios2">Sang-pur</label>
                        </div>
                    </div>
            </fieldset>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Nombre de frères et soeurs :</label>
                <select class="form-control" id="exampleFormControlSelect1" required name="freres_soeurs">
                    <?php 
                        for ($i = 0; $i<11;$i++)
                        {
                            echo '<option value ="'.$i.'">'.$i.'</option>';
                        }
                    ?>
                </select>
            </div><br />
            
<!--=================================================================================== -->
            <h2 class="form_titre">PHYSIQUE</h2>
            <hr>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Couleur de peau :</label>
                    <input type="text" class="form-control" id="validationCustom03" required name ="peau" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Taille (en cm) :</label>
                    <input type="text" class="form-control" id="validationCustom04" required name ="taille" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Poids (en kg) :</label>
                    <input type="text" class="form-control" id="validationCustom05" required name ="poids"required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationCustom03">Couleur des yeux :</label>
                    <select class="form-control" required name="yeux">
                        <option value="Bleus">Bleus</option>
                        <option value="Verts">Verts</option>
                        <option value="Marron">Marron</option>
                        <option value="Noisette">Noisette</option>
                        <option value="Gris">Gris</option>
                        <option value="Rouge">Rouge</option>
                        <option value="Verron">Verron</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Couleur de cheveux :</label>
                    <select class="form-control" required name="couleur_cheveux">
                        <option value="Brun">Brun</option>
                        <option value="Blonds">Blonds</option>
                        <option value="Chatain">Chatain</option>
                        <option value="Roux">Roux</option>
                        <option value="Noir">Noir</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
            
                <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Coupe de cheveux :</label>
                    <input type="text" class="form-control" id="validationCustom05" required name ="coupe" required>
                </div>
            </div> 

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0">Particularités :</legend>
                    <div class="col-sm-4">
                        <div class="form-check form-check-inline" >
                            <input class="form-check-input" name="particularite"type="radio" id="inlineradio1" value="Cicatrices">
                            <label class="form-check-label" for="inlineradio1">Cicatrices</label>
                        </div>
                        <div class="form-check form-check-inline" >
                            <input class="form-check-input" name="particularite" type="radio" id="inlineradio1" value="Tatouage">
                            <label class="form-check-label" for="inlineradio1">Tatouage</label>
                        </div>
                        <div class="form-check form-check-inline" >
                            <input class="form-check-input" name="particularite" type="radio" id="inlineradio1" value="Autre">
                            <label class="form-check-label" for="inlineradio1">Autre</label>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Précisions :</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="precisions" >
                        </div>
                    </div>
                </div>
            </fieldset><br />

<!--=================================================================================== -->
            <h2 class="form_titre">PERSONNALITÉ</h2>
            <hr>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0">Objectif de vie :</legend>
                    <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" required name="objectif" type="radio" id="inlineradio1"  value="Amitié" >
                            <label class="form-check-label" for="inlineradio1">Amitié</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" required name="objectif" type="radio" id="inlineradio1"  value="Savoir" >
                            <label class="form-check-label" for="inlineradio1">Savoir</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" required name="objectif" type="radio" id="inlineradio1"   value="Pouvoir" >
                            <label class="form-check-label" for="inlineradio1">Pouvoir</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" required name="objectif" type="radio" id="inlineradio1"   value="Aventure" >
                            <label class="form-check-label" for="inlineradio1">Aventure</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" required name="objectif" type="radio" id="inlineradio1"   value="Realisation de soi" >
                            <label class="form-check-label" for="inlineradio1">Realisation de soi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" required name="objectif" type="radio" id="inlineradio1"   value="Richesse">
                            <label class="form-check-label" for="inlineradio1">Richesse</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" required name="objectif" type="radio" id="inlineradio1"   value="Autre">
                            <label class="form-check-label" for="inlineradio1">Autre</label>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Autre</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="objectif_autre" placeholder="Autre objectif" >
                        </div>
                    </div>
                </div>
            </fieldset>

            <?php 
                $theme = array("Rapport à autrui","Manière de penser","Ouverture","Habitudes","Nature","Stratégie","Confiance en soi", "Anxiété", "Influence du regard des autres");
                $cles = array("rapport_autrui","maniere_de_penser","ouverture","habitudes","nature","strategie","confiance","anxiete","influence" );
                $valmin = array("Introverti","Pragmatique","Rigide", "Reste sur ses acquis", "Rationnel"," Organisé", "Peu confiant", "Calme", "Peu influençable");
                $valmax = array("Extraverti","Créatif", "Ouvert d'esprit", "Innove","Emotionnel", "Flexible", "Très confiant", "Stressé", "Influençable");
                for ($i = 0; $i < 9; $i ++)
                {
                    echo'
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-3 pt-0">'.$theme[$i].' : </legend>
                            <div class="col-sm-3"><label class="form-check-label" for="inlineRadio1">'.$valmin[$i].'</label></div>

                            <div class="col-sm-4">
                    ';
                    for($j = 1; $j <6;$j++)
                    {
                        echo'
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" required name="'.$cles[$i].'" id="inlineRadio2" value="'.$j.'">
                            </div>
                        ';
                    }
                    echo '
                            </div>
                            <div class="col-sm-2"><label class="form-check-label" for="inlineRadio1">'.$valmax[$i].'</label></div>
                        </div>
                    </fieldset>';
                }

                $peur = array("La solitude","Un insecte/ animal","Le feu","Le noir","Le vide","L'orage","Le regard des autres","La violence","La mort","Autre");
            
                echo'
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Grande peur :</legend>
                        <div class="col-sm-4">';
                            for($i=0;$i<10;$i++)
                            {
                                echo'
                                <div class="form-check form-check-inline" >
                                    <input class="form-check-input" type="radio" required name="peur" id="inlineradio1" value="'.$peur[$i].'">
                                    <label class="form-check-label" for="inlineradio1">'.$peur[$i].'</label>
                                </div>
                                ';
                            }
                            echo'
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Précisions :</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" name="peur_autre" >
                                </div>
                            </div>
                        </div>
                </fieldset>
                ';

                $hobby = array("Musique","Chant","Dessin","Ecriture","Lecture","Etudes","Sport","Théâtre","Cinéma","Sorties","Voyage","Autre");
                
                echo'
                <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-3 pt-0">Hobby :</legend>
                            <div class="col-sm-4">
                ';
                for($i=0;$i<12;$i++)
                {
                    echo'
                                <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="radio" name="hobby" id="inlineradio1" value="'.$hobby[$i].'">
                                <label class="form-check-label" for="inlineradio1">'.$hobby[$i].'</label>
                            </div>
                    ';
                }
                echo'
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Précisions :</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="hobby_autre" >
                            </div>
                        </div>
                    </div>
                </fieldset>
                ';
            ?>

            <div class="form-group">
                <label for="formGroupExampleInput">Talent spécial :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" required name="talent" placeholder="Un truc pour lequel je suis fort!">
                <label for="formGroupExampleInput">Bête noire :</label>
                <input type="text" class="form-control" id="formGroupExampleInput" required name="bete_noire" placeholder="Un truc que je deteste par dessus tout!">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>      
</div>

<?php 
include("includes/footer.php");
?>