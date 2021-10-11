<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../vue/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vue/icon/font/all.css">
    <script src="../../vue/js/jquery.min.js"></script>
    
    <title>Classement Visiteur</title>
</head>
<body>
    <div class="container mr-0">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input type="search" name="search" id="search" class="form-control mt-3" placeholder="Search a members">
            </div>
        </div>
    </div>
    <div class="container mt-4 bg-dark text-white">
    <h2 class="">Classement des etudiants</h2>
   <hr>
   <div >
       <table id="myTable" class="table mt-5 text-light">
           <tr>
               <th>Nom</th>
               <th>Prenom</th>
               <th>Ecole</th>
               <th>Niveau/Filiere</th>
               <th>Date</th>
               <th>Presence</th>
               </tr>
                <?php
               include "../../modele/connexion.php";
               
               $sql='SELECT nom,prenom,SUM(numero) AS presence,universite,niveau,datelecture FROM avoirlivre GROUP BY nom ORDER BY presence DESC';
               $requete=$conn->query($sql);
               while ($donnees=$requete->fetch()) {
               ?>
           <tbody>
                   <tr>
                       <td><?php  echo $donnees['nom'];?></td>
                       <td><?php  echo $donnees['prenom']; ?></td>
                       <td><?php  echo $donnees['universite']; ?></td>
                       <td><?php  echo $donnees['niveau']; ?></td>
                       <td><?php  echo $donnees['datelecture']; ?></td>
                       <td><?php  echo $donnees['presence']; ?></td>
                   </tr>
           </tbody>
           <?php
               }
           ?>
       </table>
   </div>
    </div>
    <script src="../../vue/js/jquery.min.js"></script>
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