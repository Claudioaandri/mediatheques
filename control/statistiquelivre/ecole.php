<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../vue/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vue/icon/font/all.css">
    <title>Document</title>
</head>
<body>
<div class="col-md-5">
                <a href="../../vue/home.php" class="btn btn-dark mt-1"><i class="fa fa-home p-2"></i> Accueil</a>
            </div>
    <div class="container mt-5">
    <table class="table table-success">
        <tr>
            <th>Ecole</th>
            <th>Statistique</th>
        </tr>
        <?php
            include "../../modele/connexion.php";
            $requete='SELECT `universite`,SUM(numero) AS `points` FROM `avoirlivre` GROUP BY `universite` ORDER BY points DESC';
            $resultat=$conn->query($requete);
            while ($donnees=$resultat->fetch()) {
        ?>
        <tbody>
            <tr>
                <td id="titre"><?php echo $donnees['universite']; ?></td>
                <td id="points"><?php echo $donnees['points'];?></td>
            </tr>
        </tbody>
        <?php
         }
        ?>
    </table>
    </div>
</body>
</html>