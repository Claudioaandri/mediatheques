<!--ceci permet de recuperer les donnees afficher dans la base de donnees afin de modifier!-->
<?php
    include "../../modele/connexion.php";
    $idemp=$_GET['idemp'];
   $requete=$conn->query("SELECT * FROM emprunt WHERE idemp=$idemp");
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
      <h3 class="pt-4 text-light" style="font-family:sans-serif; font-weight:bold;">Modifier Emprunt</h3>
      <hr>
      <div class="form-group pb-1">
      <form action="../../control/crud/update-emprunt.php" class=" p-3" method="post">
        <input type="text" class="form-control mb-0" name="idemp" id="id" value="<?php echo $resultat['idemp'];?>"><br>
        <input type="text" name="im" id="titre" class="form-control" value="<?php echo $resultat['im']; ?>"><br>
        <input type="text" name="nom" id="editionlivre" class="form-control" value="<?php echo $resultat['nom']; ?>"><br>
        <input type="text" name="prenom" id="auteur" class="form-control" value="<?php echo $resultat['prenom']; ?>"><br>
        <input type="text" name="responsabilite" id="nombre" class="form-control" value="<?php echo $resultat['responsabilite']; ?>"><br>
        <input type="text" name="phone" id="rangelivre" class="form-control" value="<?php echo $resultat['phone']; ?>"><br>
        <input type="submit" class="btn btn-danger form-control" value="Update">
      </form>
      </div>
  </div>
</body>
</html>