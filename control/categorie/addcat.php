<?php
        include "../modele/connexion.php";
        $sql='SELECT DISTINCT categorie FROM livreid';
        $requete=$conn->query($sql);
       while ($resultat=$requete->fetch()) {
           echo '<li class="nav-item"><a class="nav-link" id="categorie" href="../control/categorie/cat.php">'.$resultat['categorie'].'</a></li>';
       };
        ?>