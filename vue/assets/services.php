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
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="controlsasie.js"></script>
    <style>
    #datelecture,#numero{
      display: none;
    }
    </style>
    <!-- onligne boostrap -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

    <title>services</title>
</head>
<body class="back">
    <div class="container bg-success shadow-lg text-white mt-5">
        <div class="float-right m-4">
          <h1>Demande des Livres </h1>
          
        </div>
        <div class="btn float-left mr02">
          <a class="nav-link" href="../home.php"><button class="btn btn-light"><div class="fa fa-home p-1 m-2">ACCUEIL</div></button></a>        
          </div>
          <div class="btn">
          <a class="nav-link" href="../utilisateurlivre/utilisateur.php"><button class="btn btn-light"><div class="fa fa-user p-1 m-2">Utilisateur</div></button></a>

          </div>        
        
        <hr>
        
        
        <!--  -->
        <form action="../../control/gestionlivre/gestionlivre.php" method="post">
          <div class="input-group mb-3 mt-2">
          
            <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
            <input type="text" name="nom"  id="elevenom" class="form-control" placeholder="Nom " aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          <div class="input-group mb-3">
            <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
            <input type="text" name="prenom" id="eleveprenom" class="form-control" placeholder="Prenom " aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          <div class="input-group mb-3">
            <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
            <input type="text" name="TitreLivre" class="form-control" placeholder="Titre livre " aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
            <input type="text" name="Numero" class="form-control" placeholder="Numero " id="numero" aria-label="Username" aria-describedby="basic-addon1" value="1">
          <div class="input-group mb-3">
            <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
            <input type="text" name="universite" class="form-control" placeholder="Ecole / Universite " aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          <div class="input-group mb-3">
            <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
            <input type="text" name="niveau" class="form-control" placeholder="Niveau/Filiere" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          <!-- <div class="input-group mb-3"> -->
            <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
            <input type="date" name="datelecture" id="datelecture" class="form-control" placeholder="date . . . " aria-label="Username" aria-describedby="basic-addon1">
          <!-- </div> -->
         
          <button type="submit" class="btn btn-primary text-dark" onclick="return verification();">Submit</button>
          <button type="reset" class="btn btn-primary text-dark m-4">Clear</button>
    </div>
        </form>
        <!--  -->
        
</body>
</html>