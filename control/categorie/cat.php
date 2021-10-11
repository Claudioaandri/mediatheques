<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link rel="stylesheet" href="../../vue/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vue/icons/font/all.css">
    <script src="../../vue/js/jquery.min.js"></script>
    <script src="../../vue/js/bootstrap.min.js"></script>
</head>

<body>
    
    
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-4">
                <a href="../../vue/home.php" class="btn btn-dark mt-3"><i class="fa fa-home p-2"></i> Accueil</a>
            </div>
            <div class="col-md-4">
                <strong class="text-danger" style="font-size: 25px; ">
        <?php
         include "../../modele/connexion.php";
            $categorie = $_POST['Categoriechoix'];
            $selection='SELECT  SUM(nombre) AS total,categorie FROM feuil1 WHERE categorie=:categorieLiv';
            $select=$conn->prepare($selection);
            $select->execute(array(
                'categorieLiv' => $categorie
            ));
            while($totallivre=$select->fetch()){   
            echo "Total ".$totallivre['categorie']." = ".$totallivre['total'];
            }
         ?>
    </strong>
            </div>
        </div>
    </div>    

    <div class="container mt-4">
    
    <table style="" id="myTable" class="table table-warning">
        <tr>
        <th>TITRE</th>
        <th>EDITION</th>
        <th>AUTEUR</th>
        <th>NOMBRE</th>
        <th>RANGE</th>
        <th>CASE</th>
        <th>NUMERO</th>
        <th>CATEGORIE</th>
        <th>Action</th>
        </tr>
        <?php
            // $categorie = $_POST['Categoriechoix'];
            $requete = $conn->prepare('SELECT  * FROM feuil1 WHERE categorie=:categorieLiv');
            $requete->execute(array(
                'categorieLiv' => $categorie
            ));
            while ($resultat = $requete->fetch()) {
                if ($resultat) {
        ?>
            <tbody>
                <tr>
                <td><?= $resultat['titre']; ?></td>
                    <td><?= $resultat['editionlivre']; ?></td>
                    <td><?= $resultat['auteur']; ?></td>
                    <td><?= $resultat['nombre']; ?></td>
                    <td><?= $resultat['rangelivre']; ?></td>
                    <td><?= $resultat['caselivre']; ?></td>
                    <td><?= $resultat['numerolivre']; ?></td>
                    <td><?= $resultat['categorie']; ?></td>
                    <td><a href="../crud/supprimer-article.php?id=<?= $resultat['id']; ?>">  
                            <i class="fas fa-trash text-danger mr-2 phone"></i>
                            </a>
                    </td>
                </tr>
            </tbody>
        <?php
            }
        }
        ?>
    </table>

    
    </div>
</body>
</html>