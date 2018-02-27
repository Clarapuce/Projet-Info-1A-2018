
    <?php
        include("header.php");
        
        require("connect.php");
        $MaRequete="SELECT * FROM SESSIONS Order By nom_session";
        $MonRs = $BDD -> query( $MaRequete );
        $retour = 1;
        echo '<div class="container">
        <table><tr>';
            while ($Tuple = $MonRs ->fetch() )
            {
                echo '
                <td>
                <div class="card text-white bg-secondary mb-4" style="max-width: 24rem;">
                    <div class="card-header">
                    <a href="index.php?id='.$Tuple["nom_session"].'">
                        <h3>'.$Tuple["nom_session"].
                        '</h3>
                    </a>
                    <p class="auteur">Créée par '.$Tuple["auteur"].'
                    </p>
                    </div>
                    <div class="card-body">
                        <p class="description">'.$Tuple["description"].'</p>
                    </div>
                </div>
              <article>
                    
                    
                </article>
                </td>';
                // Changer couleur lien dans css
                // Changer taille du texte
                //Changer espacement
                if($retour==2)
                {
                    $retour=1;
                    echo'</tr><tr>';
                }
                else{$retour ++;}
                
            }
        echo '</table></div>';   
        
        


        //include("footer.php");
    ?>
    </body>
</html>
