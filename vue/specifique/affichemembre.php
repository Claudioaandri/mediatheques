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
            <th>IM</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>RESPONSABILITE</th>
            <th>TITRELIVRE</th>
            <th>CATEGORIE</th>
            <th>PHONE</th>
        </tr>
        <?php
            include "../../modele/connexion.php";
            $sql='SELECT DISTINCT im,nom,prenom,responsabilite,titrelivre,categorie,phone FROM membrebibliotheque';
            $requete=$conn->query($sql);
            while ($resultat=$requete->fetch()){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $resultat['im']; ?></td>
                    <td><?php echo $resultat['nom']; ?></td>
                    <td><?php echo $resultat['prenom']; ?></td>
                    <td><?php echo $resultat['responsabilite']; ?></td>
                    <td><?php echo $resultat['titrelivre']; ?></td>
                    <td><?php echo $resultat['categorie']; ?></td>
                    <td><?php echo $resultat['phone']; ?></td>
                </tr> 
            </tbody>
          <?php
          }
          ?>
    </table>
    </div>
</body>
</html>