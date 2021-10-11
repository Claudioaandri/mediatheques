<?php
    include "../../modele/connexion.php";
    $iddisp=$_GET['iddisp'];
   $requete=$conn->query("SELECT * FROM dispolivre WHERE iddisp=$iddisp");
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
      <form action="../../control/crud/updatedisp.php" class=" p-3" method="post">
       <input type="text" name="iddisp" class="form-control mb-0" id="id" value=<?php echo $resultat['iddisp'];?>><br>
        <input type="text" name="titre" class="form-control mb-0" id="id" value=<?php echo $resultat['titre'];?>><br>
        <input type="text" name="demande" id="titre" class="form-control" value=<?php echo $resultat['demande'];?>><br>
        <input type="submit" class="btn btn-danger form-control" value="modifier">
      </form>
      </div>
  </div>
</body>
</html>