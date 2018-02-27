
    <?php
        include("header.php");
        
        require("connect.php");
        $MaRequete="SELECT * FROM SESSIONS Order By nom_session";
        $MonRs = $BDD -> query( $MaRequete );
        $retour = 1;
        echo '
        <div class="container">
        <div class="bienvenue">Bienvenue machin</div>
        
        <div class="staff">
        <div class="rondstaff1"><img src=""><div>pseudo<br>contacter</div></div>
        <div class="rondstaff2"><img src=""><div>pseudo<br>contacter</div></div>
        <div class="rondstaff3"><img src=""><div>pseudo<br>contacter</div></div>
        </div>
        
        <div class="presentation">présentation blabla</div>
        
        <table style="border-collapse:collapse;">
        <tr>
        <td>
        <div class="contexte">contexte</div>
        </td>
        <td>
        <div class="sessions">accéder aux sessions</div>
        <div class="nouveautes">nouveautés</div>
        </td>
        </tr>
        </table>
        
        <br />
        
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
        
        


        include("footer.php");
    ?>
