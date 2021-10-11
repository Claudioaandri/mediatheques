<!--ceci permet de recuperer les donnees afficher dans la base de donnees afin de modifier!-->
<?php
    include "../../modele/connexion.php";
    $id=$_GET['id'];
   $requete=$conn->query("SELECT * FROM feuil1 WHERE id=$id");
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
    <title>Ajout livre</title>
</head>
<body class="">
  <div class="container-fluid text-light mt-3 xform shadow">
      <h3 class="pt-4 text-light" style="font-family:sans-serif; font-weight:bold;">Modifier article</h3>
      <hr>
      <div class="form-group pb-1">
      <form action="../../control/crud/update.php" class=" p-3" method="post">
        <input type="text" class="form-control mb-0" name="id" id="id" value="<?php echo $resultat['id'];?>"><br>
        <input type="text" name="titre" id="titre" class="form-control" value="<?php echo $resultat['titre']; ?>"><br>
        <input type="text" name="editionlivre" id="editionlivre" class="form-control" value="<?php echo $resultat['editionlivre']; ?>"><br>
        <input type="text" name="auteur" id="auteur" class="form-control" value="<?php echo $resultat['auteur']; ?>"><br>
        <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $resultat['nombre']; ?>"><br>
        <input type="text" name="rangelivre" id="rangelivre" class="form-control" value="<?php echo $resultat['rangelivre']; ?>"><br>
        <input type="text" name="caselivre" id="caselivre" class="form-control" value="<?php echo $resultat['caselivre']; ?>"><br>
        <input type="text" name="numerolivre" id="numerolivre" class="form-control" value="<?php echo $resultat['numerolivre']; ?>"><br>
        <input type="text" name="categorie" id="categorie" class="form-control" value="<?php echo $resultat['categorie']; ?>"><br>
        <input type="submit" class="btn btn-danger form-control" value="Update">
      </form>
      </div>
  </div>
</body>
</html>
