<?php
    session_start();
    include "../../modele/connexion.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../icons/font/all.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../../vue/js/jquery.min.js"></script>

        <!-- <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script> -->
        <title>Biblio-enligne</title>
    </head>

    <body class="">
        <div class="container-fluid mt-4">
            <div class="row mb-3">
                <div class="col-md-4">
                    <a href="../home.php" class="btn btn-primary mr-3" type="button"> <i class="fa fa-home"> Accueil </i> </a>
                    <a href="../ajoutlivre/ajoutlivre.php" class="btn btn-primary" type="button"> <i class="fa fa-plus"> Ajout</i> </a>
                    
                </div>
                <div class="col-md-4">
                <strong style="font-size:50px; font-weight: bold;">
                    <?php
                        $selection='SELECT  SUM(nombre) AS total FROM feuil1';
                        $selection=$conn->prepare($selection);
                        $selection->execute();
                        while($totallivre=$selection->fetch()){
                        echo "Total"." = ".$totallivre['total'];
                        }
                    ?>
                </strong>
                </div>
                <div class="col-md-4">
                    <input type="search" name="" class=" inputsm float-right" id="myInput" class="form" placeholder="Chercher un livre">
                </div>    
            </div>    
        </div>
                <div class="container-fluid mt-4" id="all">
                <table style="font-size: 15px;" class="table table-bordered table-striped table-hover bg-light text-dark" id="datatableid">
                    <thead style="font-family:arial;background-color:#011733;color:white; font-size:10px;">
                        <tr style="width: 100px;">
                            <th>TITRE</th>
                            <th>EDITION</th>
                            <th>AUTEUR</th>
                            <th>NOMBRE</th>
                            <th>RANGE</th>
                            <th>CASE</th>
                            <th>NUMERO</th>
                            <th>CATEGORIE</th>
                            <th>Modifier</th>
                            <th>supprimer</th>
                        </tr>
                    </thead>
                    <?php
                    $selection='SELECT DISTINCT * FROM feuil1 GROUP BY titre';
                    $recupArticle = $conn->prepare($selection);
                    $recupArticle->execute();
                    while($article = $recupArticle->fetch()){
                       ?>
                    <tbody id="myTable">
                        <tr>
                            <td><?php echo $article['titre']; ?></td>
                            <td><?php echo $article['editionlivre']; ?></td>
                            <td><?php echo $article['auteur']; ?></td>
                            <td><?php echo $article['nombre']; ?></td>
                            <td><?php echo $article['rangelivre']; ?></td>
                            <td><?php echo $article['caselivre']; ?></td>
                            <td><?php echo $article['numerolivre']; ?></td>
                            <td><?php echo $article['categorie']; ?></td>
                            <td>
                                <a href="../modifier/modifier-article.php?id=<?= $article['id']; ?>">
                                <i class="fas fa-edit text-info phone"></i>
                                </a>
                            </td>
                            <td>    
                                <a href="../../control/crud/supprimer-article.php?id=<?= $article['id']; ?>">  
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
      </div>
    <script>
      $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
       });
    
    });
    </script>
   
</body>
</html>