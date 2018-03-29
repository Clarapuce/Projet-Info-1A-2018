<?php 
include('includes/header.php');

if (!empty($_SESSION['pseudo'])) erreur(ERR_IS_CO); //affiche une erreur si la personne est déjà connecté
?>

<form method="post" action="inscription_exec.php">
    <div class="container">
        <div class="fond">
            <div class="alignement">
                <h2>Inscription</h2>
                <table>
                    <tr>
                        <td>Pseudo :</td>
                        <td> <input type="text" name="pseudo" value="<?php if (isset($_GET['pseudo'])) echo htmlentities($_GET['pseudo']); ?>"></td>
                    </tr>
                        
                    <tr>
                        <td><br />Mot de passe : </td>
                        <td><br/> <input type="password" name="mdp"><br /></td>
                    </tr>

                    <tr>
                        <td><br />Retapez votre mot de passe : </td>
                        <td><br /> <input type="password" name="mdp_verif"><br /></td>
                    </tr>
                </table><br />
                
                <input type="submit" value="Valider"> <input type="reset" value="Annuler">

            </div>
        </div>
    </div>
</form>

<?php 
include('includes/footer.php');
?>
