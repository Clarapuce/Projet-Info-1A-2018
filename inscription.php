<?php 
include('header.php');
?>

<form method="post" action="inscription_validee.php">
<div class="container">
<div class="alignement">
<h2>Inscription</h2>
<table>
    <tr>
        <td>Pseudo :</td>
        <td> <input type="text" name="pseudo"></td>
    </tr>
        
    <tr>
        <td><br/>Mot de passe : </td>
        <td><br/> <input type="password" name="mdp"><br/></td>
    </tr>

    <tr>
        <td><br/>Retapez votre mot de passe : </td>
        <td><br/> <input type="password" name="mdp_verif"><br/></td>
    </tr>
</table>

<br/>
<input type="submit" value="Valider"> <input type="reset" value="Annuler">
</div>
</div>
</form>

<?php 
include('footer.php');
?>