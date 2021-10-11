<!-- ajouter des nouveaux livres  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <title>Ajout livre</title>
</head>
<body>
    <div class="container mt-3 text-light bg-danger">
    <div class="btn float-left mr02">
          <a class="nav-link" href="../home.php"><button class="btn btn-success"><div class="fa fa-home p-1 m-0">Accueil</div></button></a>        
          </div>

    <div class="btn float-left mr02">
          <a class="nav-link" href="../assets/category.php"><button class="btn btn-success"><div class="fa fa-home p-1 m-0">All Books</div></button></a>        
          </div>
    
        <h2 class="mb-4 p-4">Ajouter Livres</h2>

        <form action="../../control/insert.php" method="post">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre du nouveau livre . . . " required><br>   
            <label for="Edition">Edition</label>
            <input type="text" name="editionlivre" id="editionlivre" class="form-control" placeholder="Edition du livre . . . " required><br>   
            <label for="auteur">Auteur</label>
            <input type="text" name="auteur" id="auteur" class="form-control" placeholder="Auteur du livre . . . " required><br> 
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre disponible . . . " required><br>
            <label for="rangelivre">Rangelivre</label>
            <input type="text" name="rangelivre" id="rangelivre" class="form-control" placeholder="ranger . . . " required><br>
            <label for="caselivre">Caselivre</label>
            <input type="text" name="caselivre" id="caselivre" class="form-control" placeholder=" numero du case . . . " required><br>
            <label for="numerolivre">Numerolivre</label>
            <input type="text" name="numerolivre" id="numerolivre" class="form-control" placeholder=" numero du livre . . . " required><br>
            <label for="categorie">Categorie</label>
            <input type="text" name="categorie" id="categorie" class="form-control" placeholder="Categorie . . . "  required><br>
            <input type="submit" class="form-control btn btn-dark mb-4" value="envoyer">
        </form>  
    </div>> 


</body>
</html>