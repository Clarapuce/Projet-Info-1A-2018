<?php 
include('includes/header.php');
require("connect.php"); 

if (!isset($_SESSION['statutStaff'])) erreur(NOT_CO); //affiche une erreur si la personne n'est pas connectée
else if ($_SESSION['statutStaff']!=11) erreur(BAD_STATUT); //affiche une erreur si le membre n'est pas membre du staff
?>

<form method="post" action="creerSession_exec.php" id="creerSession">
    <div class="container">
        <div class="fond">
            <div class="largeur">
                <div class="alignement">
                    <h2>Création de session</h2>
                    <table>
                        <tr>
                            <td>Nom de la session :</td>
                            <td> <input type="text" name="nom" value="<?php if (isset($_GET['nom'])) echo htmlentities($_GET['nom']); ?>" required></td>
                        </tr>
                            
                        <tr>
                            <td><br />Description : </td>
                            <td><br />
                                <textarea rows="4" cols="20" name="description" form="creerSession"><?php if (isset($_GET['description'])) echo $_GET['description'];?></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td><br />Choix des formulaires :</td>
                            <td><br /> 
                                <input type="checkbox" name="formC" value="1"> Formulaire court <br />
                                <input type="checkbox" name="formL" value="1"> Formulaire long<br />
                            </td>
                        </tr>
                    </table><br />

                    <input type="submit" value="Valider"> <input type="reset" value="Annuler">
                </div>
            </div>
        </div>
    </div>
</form>

<?php
include('includes/footer.php');
?>