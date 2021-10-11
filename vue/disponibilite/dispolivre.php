<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <title>Document</title>
    <style>
      #editionLivre{
          display:none;
      }
    </style>
</head>
<body>
    <div class="container-fluid ">
        <a href="dispoaffiche.php" class="btn btn-success m-3">Afficher Livre Disponible</a>
        <div class="row mt-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="../../control/verifdisponibilite/verifdisp.php" method="post">
                    <input type="text" class="form-control mb-3" placeholder="Titre Livre .. " name="titrelivre" >
                    <input type="text" class="form-control mb-2" placeholder="nombre .. " name="nombrelivre" id="editionLivre" value="1">
                  
                    <input type="submit"class="btn btn-secondary mt-4 form-control p-2" value="Valider">
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>