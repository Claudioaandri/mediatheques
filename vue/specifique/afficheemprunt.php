<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons/font/all.css">
    
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <title>Document</title> 
</head>
<body>
    <div class="container mt-3">
        
    <table class="table table-stripped bg-dark text-light">
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>RESPONSABILITE</th>
            <th>TITRELIVRE</th>
            <th>CATEGORIE</th>
            <th>PHONE</th>
            <th>DATE</th>
            <th>ACTION</th>
        </tr>
        <?php
            include "../../modele/connexion.php";
            $sql='SELECT emprunt.nom,emprunt.prenom,emprunt.responsabilite,emprunt.phone,
            membrebibliotheque.idmembre,membrebibliotheque.nom,membrebibliotheque.prenom,membrebibliotheque.responsabilite,membrebibliotheque.titrelivre,membrebibliotheque.categorie,membrebibliotheque.phone,membrebibliotheque.dateemprunt FROM emprunt INNER JOIN membrebibliotheque 
            ON emprunt.nom=membrebibliotheque.nom AND emprunt.prenom=membrebibliotheque.prenom';
            $requete=$conn->query($sql);
            while ($resultat=$requete->fetch()){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $resultat['nom']; ?></td>
                    <td><?php echo $resultat['prenom']; ?></td>
                    <td><?php echo $resultat['responsabilite']; ?></td>
                    <td><?php echo $resultat['titrelivre']; ?></td>
                    <td><?php echo $resultat['categorie']; ?></td>
                    <td><?php echo $resultat['phone']; ?></td>
                    <td><?php echo $resultat['dateemprunt']; ?></td>
                    <td>
                        <a href="../../control/crud/suppemp.php?idmembre=<?= $resultat['idmembre']; ?>">  
                                <i class="fas fa-trash text-danger mr-2 phone"></i>
                        </a>
                    </td>
                </tr> 
            </tbody>
          <?php
          }
          ?>
    </table>
    </div>
</body>
</html>