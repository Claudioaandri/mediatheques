<!--ceci permet de recuperer les donnees afficher dans la base de donnees afin de modifier!-->
<?php
    include "../../modele/connexion.php";
    $idlivre=$_GET['idlivre'];
   $requete=$conn->query("SELECT * FROM avoirlivre WHERE idlivre=$idlivre");
   $resultat=$requete->fetch();
?>
<!--on verra ici les donnees deja present dans la base de donnees pour le modifier!-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Modifier Emprunt</title>
</head>
<body class="">
  <div class="container-fluid text-light mt-3 xform shadow">
      <h3 class="pt-4 text-light" style="font-family:sans-serif; font-weight:bold;">Modifier Utilisateur</h3>
      <hr>
      <div class="form-group pb-1">
      <form action="../../control/crud/update-utilisateur.php" class=" p-3" method="post">
        <input type="text" name="idlivre" class="form-control mb-0"  id="id" value="<?php echo $resultat['idlivre'];?>"><br>
        <input type="text" name="nom" id="titre" class="form-control" value="<?php echo $resultat['nom']; ?>"><br>
        <input type="text" name="prenom" id="editionlivre" class="form-control" value="<?php echo $resultat['prenom']; ?>"><br>
        <input type="text" name="titrelivre" id="auteur" class="form-control" value="<?php echo $resultat['titrelivre']; ?>"><br>
        <input type="text" name="Numero" id="nombre" class="form-control" value="<?php echo $resultat['Numero']; ?>"><br>
        <input type="text" name="universite" id="rangelivre" class="form-control" value="<?php echo $resultat['universite']; ?>"><br>
        <input type="text" name="niveau" id="rangelivre" class="form-control" value="<?php echo $resultat['niveau']; ?>"><br>
        <input type="text" name="datelecture" id="rangelivre" class="form-control" value="<?php echo $resultat['datelecture']; ?>"><br>
        <input type="submit" class="btn btn-danger form-control" value="Update">
      </form>
      </div>
  </div>
</body>
</html>