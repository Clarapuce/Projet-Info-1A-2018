<?php 
include('header.php');
require("connect.php"); 
if (!isset($_SESSION['statutStaff'])) erreur(NOT_CO);
$MaRequete="SELECT * FROM SESSIONS Order By nom_session";
$MonRs = $BDD -> query( $MaRequete );
$retour = 1;
?>
<form method="post" action="creerPerso_exec.php" id="creerPerso">
<div class="container">
<div class="alignement">
<h2>Création de personnage</h2>
<table>
    <tr>
        <td>Prénom :</td>
        <td> <input type="text" name="prenom" value="<?php if (isset($_GET['prenom'])) echo htmlentities($_GET['prenom']); ?>"></td>
    </tr>
        
    <tr>
        <td><br/>Nom : </td>
        <td><br/> <input type="text" name="nom" value="<?php if (isset($_GET['nom'])) echo htmlentities($_GET['nom']); ?>"><br/></td>
    </tr>

    <tr>
        <td><br/>Âge : </td>
        <td><br/> <input type="number" name="age" min="10" value="<?php if (isset($_GET['nom'])) echo htmlentities($_GET['nom']); ?>"><br/></td>
    </tr>
    <tr>
        <td><br/>Type de personnage :</td>
        <td><br/> 
        <input type="radio" name="type" value="Professeur"> Prof<br />
        <input type="radio" name="type" value="Élève"> Élève<br/></td>
    </tr>

    <tr>
        <td><br/>Choix de la session :</td>
        <td><br/> 
        <select id="session_choisie">
            <?php while ($Tuple = $MonRs ->fetch() )
        {
            echo '<option value="'.$i.'">'.$Tuple["nom_session"].'</option>';
        }
            ?>
        </select>
        </td>
    </tr>

    <tr>
        <td><br />Image représentant votre personnage (JPG ou PNG) :</td>
        <td><br /><input type="file" name="image" id="image"/></td>
    </tr>
</table>

<br/>
<input type="submit" value="Valider">
</div>
</div>
</form>

<?php
include('footer.php');
?>