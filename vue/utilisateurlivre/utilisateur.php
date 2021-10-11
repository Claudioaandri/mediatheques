<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste utilisateur</title>
    <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../icons/font/all.css">

</head>
<body>
    <div class="container mr-0">
    <div class="btn float-left mr02">
          <a class="nav-link" href="../assets/services.php"><button class="btn btn-success"><div class="fa fa-home p-1 m-0">RETOUR</div></button></a>        
          </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input type="search" name="search" id="search" class="form-control mt-3" placeholder="Search a members">
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <h4 style="font-family: serif;" class="tetx-dark">Liste des utilisateurs</h4>
        <hr>
    <table id="myTable" class="table table-warning">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Titre Livre</th>
            <th>Universite</th>
            <th>Niveau/Filiere</th>
            <th>Date</th>
            <th>Modifier</th>
        </tr>
        <?php
        include "../../modele/connexion.php";
        $requete='SELECT * FROM avoirlivre';
        $req=$conn->query($requete);
        while ($donnees=$req->fetch()) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $donnees['nom']; ?></td>
                <td><?php echo $donnees['prenom']; ?></td>
                <td><?php echo $donnees['titrelivre']; ?></td>
                <td><?php echo $donnees['universite']; ?></td>
                <td><?php echo $donnees['niveau']; ?></td>
                <td><?php echo $donnees['datelecture']; ?></td>
                <td>
                    <a href="../modifier/modifier-utilisateur.php?idlivre=<?= $donnees['idlivre']; ?>">
                                <i class="fas fa-edit text-info phone"></i>
                                </a>
                </td>
            </tr>
        </tbody>
        <?php
           }
        ?>
    </table>
    </div>
    <script src="../js/jquery.min.js"></script>
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