<?php
include("header.php");?>
<div class="container">
    <div class="jumbotron">
        <h1>Questionnaire de Proust</h1></br>
        <form action = "formCourt.php" method ="POST">
            <h2>GÉNÉRALITÉS</h2>
            <hr>
            <p>Maison : </p>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="maison" id="inlineRadio1" value="Gryffondor">
            <label class="form-check-label" for="inlineRadio1">Gryffondor</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="maison" id="inlineRadio1" value="Serdaigle">
            <label class="form-check-label" for="inlineRadio1">Serdaigle</label>
            </div>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="maison" id="inlineRadio1" value="Poufsouffle">
            <label class="form-check-label" for="inlineRadio1">Poufsouffle</label>
            </div>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="maison" id="inlineRadio1" value="Serpentard">
            <label class="form-check-label" for="inlineRadio1">Serpentard</label>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Lieu de naissance</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                <option value="Ville">Ville</option>
                <option value ="Banlieu">Banlieu</option>
                <option value ="Campagne">Campagne</option>
                </select>
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput">Nom du lieu de naissance:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="lieu_naissance">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Bois de la baguette</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option value="Saule">Bois de Saule</option>
                <option value="Vigne">Bois de Vigne</option>
                <option value="Chêne">Bois de Chêne</option>
                <option value="If">Bois d'If</option>
                <option value="Aubépine">Bois d'Aubépine</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Contenu de la baguette</label>
                <select class="form-control" id="exampleFormControlSelect1">
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
                    <input class="form-check-input" type="radio" name="animal" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Chat</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="animal" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Rat</label>
                    </div>
        
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="animal" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Hiboux</label>
                    </div>
        
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="animal" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Chouette</label>
                    </div>
                </div>
            </fieldset>
            
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Niveau de santé</legend>
                    <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineRadio1">Fragile</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                    </div>
                    <?php for($i = 2; $i <5;$i++)
                        {
                            echo'<div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="'.$i.'">
                            </div>';
                        }
                    ?>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio1">Robuste</label>
                    </div>
                    </form>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Niveau scolaire</legend>
                    <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineRadio1">Très mauvais élève</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                    </div>
                    <?php for($i = 2; $i <5;$i++)
                        {
                            echo'<div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="'.$i.'">
                            </div>';
                        }
                    ?>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                    <label class="form-check-label" for="inlineRadio1">Excellent élève</label>
                    </div>
                    </form>
                </div>
            </fieldset>
            
            <div class="form-group">
            <label for="formGroupExampleInput">Patronus:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="patronus" >
            </div>

            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Statut</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Né-moldu
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Sang-mêlé
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Sang-pur
                    </label>
                    </div>
            </fieldset>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Nombre de frères et soeurs</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <?php 
                    for ($i = 1; $i<11;$i++)
                    {
                        echo '<option value ="'.$i.'">'.$i.'</option>';
                    }
                ?>
                </select>
            </div>

            

            <h2>PHYSIQUE</h2>
            <hr>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationCustom03">Couleur de peau</label>
                <input type="text" class="form-control" id="validationCustom03" name ="peau" required>
                </div>
                <div class="col-md-3 mb-3">
                <label for="validationCustom04">Taille</label>
                <input type="text" class="form-control" id="validationCustom04" name ="taille" required>
                </div>
                <div class="col-md-3 mb-3">
                <label for="validationCustom05">Poids</label>
                <input type="text" class="form-control" id="validationCustom05" name ="poids"required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationCustom03">Couleur des yeux</label>
                    <select class="form-control" name="yeux">
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
                    <label for="validationCustom04">Couleur de cheveux</label>
                    <select class="form-control" name="yeux">
                        <option value="Brun">Brun</option>
                        <option value="Blonds">Blonds</option>
                        <option value="Chatain">Chatain</option>
                        <option value="Roux">Roux</option>
                        <option value="Noir">Noir</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
            
                <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Coupe de cheveux</label>
                    <input type="text" class="form-control" id="validationCustom05" name ="poids"required>
                </div>
            </div>            
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0">Statut</legend>
                        <div class="col-sm-4">
                            <div class="form-check form-check-inline" name="particularite">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Cicatrices">
                                <label class="form-check-label" for="inlineCheckbox1">Cicatrices</label>
                            </div>
                            <div class="form-check form-check-inline" name="particularite">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Tatouage">
                                <label class="form-check-label" for="inlineCheckbox1">Tatouage</label>
                            </div>
                            <div class="form-check form-check-inline" name="particularite">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Autre">
                                <label class="form-check-label" for="inlineCheckbox1">Autre</label>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Précisions</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="precisions" >
                            </div>
                        </div>
                    </div>
                </fieldset>
                <h2>PERSONNALITÉ</h2>
                <hr>
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Objectifs de vie</legend>
                            <div class="col-sm-4">
                                <div class="form-check form-check-inline" name="objectif">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Amitié">
                                    <label class="form-check-label" for="inlineCheckbox1">Amitié</label>
                                </div>
                                <div class="form-check form-check-inline" name="objectif">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Savoir">
                                    <label class="form-check-label" for="inlineCheckbox1">Savoir</label>
                                </div>
                                <div class="form-check form-check-inline" name="objectif">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Pouvoir">
                                    <label class="form-check-label" for="inlineCheckbox1">Pouvoir</label>
                                </div>
                                <div class="form-check form-check-inline" name="objectif">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Aventure">
                                    <label class="form-check-label" for="inlineCheckbox1">Aventure</label>
                                </div>
                                <div class="form-check form-check-inline" name="objectif">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Realisation de soi">
                                    <label class="form-check-label" for="inlineCheckbox1">Realisation de soi</label>
                                </div>
                                <div class="form-check form-check-inline" name="objectif">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Richesse">
                                    <label class="form-check-label" for="inlineCheckbox1">Richesse</label>
                                </div>
                                <div class="form-check form-check-inline" name="objectif">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Autre">
                                    <label class="form-check-label" for="inlineCheckbox1">Autre</label>
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
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Rapport à autrui</legend>
                                <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio1">Introverti</label>
                                <input class="form-check-input" type="radio" name="autrui" id="inlineRadio1" value="1">
                        </div>
                            <?php for($i = 2; $i <5;$i++)
                                {
                                    echo'<div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="autrui" id="inlineRadio2" value="'.$i.'">
                                    </div>';
                                }
                            ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="autrui" id="inlineRadio2" value="5">
                            <label class="form-check-label" for="inlineRadio1">Extraverti</label>
                            </div>
                            </form>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Manière de penser</legend>
                                <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio1">Pragmatique</label>
                                <input class="form-check-input" type="radio" name="creativite" id="inlineRadio1" value="1">
                        </div>
                            <?php for($i = 2; $i <5;$i++)
                                {
                                    echo'<div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="nature" id="inlineRadio2" value="'.$i.'">
                                    </div>';
                                }
                            ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nature" id="inlineRadio2" value="5">
                            <label class="form-check-label" for="inlineRadio1">Creatif</label>
                            </div>
                            </form>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Ouverture d'esprit</legend>
                                <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio1">Rigide</label>
                                <input class="form-check-input" type="radio" name="creativite" id="inlineRadio1" value="1">
                        </div>
                            <?php for($i = 2; $i <5;$i++)
                                {
                                    echo'<div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="nature" id="inlineRadio2" value="'.$i.'">
                                    </div>';
                                }
                            ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nature" id="inlineRadio2" value="5">
                            <label class="form-check-label" for="inlineRadio1">Ouvert</label>
                            </div>
                            </form>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0"></legend>
                                <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio1">Sur s</label>
                                <input class="form-check-input" type="radio" name="creativite" id="inlineRadio1" value="1">
                        </div>
                            <?php for($i = 2; $i <5;$i++)
                                {
                                    echo'<div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="nature" id="inlineRadio2" value="'.$i.'">
                                    </div>';
                                }
                            ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nature" id="inlineRadio2" value="5">
                            <label class="form-check-label" for="inlineRadio1">Ouvert</label>
                            </div>
                            </form>
                        </div>
                    </fieldset>
        </form>
    </div>
            
</container>
<?php include("footer.php");
?>