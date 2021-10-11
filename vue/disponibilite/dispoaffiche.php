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

    <title>Livre Disponible</title>
</head>
<body>

    <div class="container-fluid mt-4">
        <div class="row ">

            <div class="col-md-4">
                <a href="../home.php" class="btn btn-dark m-3"><i class="fa fa-home p-2"></i> Accueil</a>
            </div>  
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input type="search" class="form-control p-2" name="search" id="search" placeholder="Search books....">
            </div>
        
        </div>
    </div>
   <div class="container mt-2">
   <table id="myTable" class="table table-dark text-light">
        <tr>
            <th>titre</th>
            <th>occupe</th>
            <th>disponible</th>
            <th>Action</th>
        </tr>
        <tr>
        <?php 
         include "../../modele/connexion.php";
        $selection='SELECT feuil1.nombre,dispolivre.iddisp,dispolivre.titre,SUM(dispolivre.demande) AS demande FROM feuil1 INNER JOIN dispolivre ON feuil1.titre=dispolivre.titre GROUP BY titre';
        $requete=$conn->prepare($selection);
        $requete->execute();
        while($donnees=$requete->fetch()){
                      ?>
            <tbody>
                <td><?php echo $donnees['titre']; ?></td>
                <td><?php echo $donnees['demande']; ?></td> 
                <td><?php echo $donnees['nombre'];?></td>
                <td>
                    <a href="../../control/crud/supprimer.php?iddisp=<?= $donnees['iddisp']; ?>">  
                    <i class="fas fa-trash text-danger mr-2 phone"></i>
                    </a>
                </td>
            </tbody>
            <?php
              }
            ?>
        </tr>
    </table>
   </div>
   <script>
      $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
       });
    
    });
    </script>
</body>
</html>