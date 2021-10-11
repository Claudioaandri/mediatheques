<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../vue/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../vue/icon/font/all.css">
        <script src="controlsasiemembre.js"></script>
        <title>Document</title>
    </head>
    <body>
        <div class="container mt-4 p-3 bg-dark">
    <div class="btn float-left mr02">
          <a class="nav-link" href="../specifique/addspecifique.php"><button class="btn btn-success"><div class="fa fa-home p-1 m-0">RETOUR</div></button></a>        
          </div>
            <h3 class="mb-4 mt-2 text-light">Borrow book</h3>
            <form action="../../control/empruntlivre/insertmembre.php" method="post">
                <div class="form-group">
                    <input type="text" name="nom" id="nom" class="form-control mb-2" placeholder="Nom" required>
                    <input type="text" name="prenom" id="prenom" class="form-control mb-2" placeholder="Prenom" required>
                    <input type="text" name="resp" class="form-control mb-2" placeholder="Responsabilite" required>
                    <input type="text" name="titre" class="form-control mb-2" placeholder="titre Livre" required> 
                    <input type="text" name="categorie" class="form-control mb-2" placeholder="Categorie Livre" required>       
                    <input type="text" name="tell" class="form-control mb-2" placeholder="Phone" required>   
                    <input type="date" name="date" class="form-control mb-2" placeholder="Date" style="display:none;">                     
                    <input type="submit" value="Enregistrer" class="form-control btn btn-danger mt-3" onclick="return verification();">
                </div>
            </form>
        </div>
    </body>
</html>