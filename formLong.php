<?php
include("header.php");?>
<div class="container">
    <div class="jumbotron">
        <h1>Descriptions longues</h1></br>
        <form action = "enregistrer_form.php?id_perso=<?php echo $_GET['id_perso']?>&amp;type=long" method ="POST">
            <h2>DESCRIPTION PHYSIQUE</h2>
            <hr>
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="physique"></textarea>
            </div>

            <h2>DESCRIPTION MENTALE</h2>
            <hr>
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="mental"></textarea>
            </div>

            <h2>HISTOIRE</h2>
            <hr>
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="histoire"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
<?php include("footer.php");
?>