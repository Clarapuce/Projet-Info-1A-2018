<?php 
include('includes/header.php');
require("connect.php"); 

if (!isset($_SESSION['statutStaff'])) erreur(NOT_CO); //si la personne n'est pas connectée, renvoie une erreur

$MaRequete="SELECT * FROM SESSIONS Order By nom_session"; //récupère toutes les sessions créées
$MonRs = $BDD -> query( $MaRequete );
$retour = 1;
?>

<form method="post" action="creerPerso_exec.php" id="creerPerso" enctype="multipart/form-data">
    <div class="container">
        <div class="largeur">
            <div class="fond">
                <div class="alignement">
                    <h2>Création de personnage</h2>
                    <table>
                        <tr>
                            <td>Prénom :</td>
                            <td> <input type="text" name="prenom" value="<?php if (isset($_GET['prenom'])) echo htmlentities($_GET['prenom']); ?>" required></td>
                        </tr>
                            
                        <tr>
                            <td><br />Nom : </td>
                            <td><br /> <input type="text" name="nom" value="<?php if (isset($_GET['nom'])) echo htmlentities($_GET['nom']); ?>" required><br/></td>
                        </tr>

                        <tr>
                            <td><br />Âge : </td>
                            <td><br /> <input type="number" name="age" min="10" value="" required><br /></td>
                        </tr>

                        <tr>
                            <td><br />Type de personnage :</td>
                            <td><br /> 
                            <input type="radio" name="type" value="Professeur"> Prof<br />
                            <input type="radio" name="type" value="Élève"> Élève<br /></td>
                        </tr>

                        <tr>
                            <td><br />Choix de la session :</td>
                            <td><br /> 
                            <select name="session_choisie" id="session_choisie">
                                <?php while ($Tuple = $MonRs ->fetch() )
                                {
                                    echo '<option value="'.$Tuple["nom_session"].'">'.$Tuple["nom_session"].'</option>';
                                }
                                ?>
                            </select>
                            </td>
                        </tr>

                        <tr>
                            <td><br /><label for="image">Image représentant votre personnage (JPG ou PNG) :</label></td>
                            <td><br /><input name="MAX_FILE_SIZE" size="1048576" type="hidden"><input type="file" name="image" id="image"/></td>
                        </tr>
                    </table><br />

                    <input type="submit" value="Valider">
                </div>
            </div>
        </div>
    </div>
</form>

<?php
include('includes/footer.php');
?>