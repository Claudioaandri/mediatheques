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
        <div class="btn float-left mr02">
            <a class="nav-link" href="../home.php"><button class="btn btn-light"><div class="fa fa-home p-1 m-2">ACCUEIL</div></button></a>        
        </div>
        <div class="btn">
            <a class="nav-link" href="afficheemprunt.php"><button class="btn btn-light"><div class="fa fa-user p-1 m-2">Listes des Umprunts</div></button></a>
        </div>
        <div class="btn">
            <a class="nav-link" href="listborrowers.php"><button class="btn btn-light"><div class="fa fa-user p-1 m-2">List</div></button></a>
        </div>
        <div class="btn">
            <a class="nav-link" href="membre.php"><button class="btn btn-light"><div class="fa fa-user p-1 m-2">Membre</div></button></a>
        </div>
        <div class="container mt-4 p-3 bg-dark">
            <h3 class="mb-4 mt-2 text-light">NOUVEAU</h3>
            <form action="../../control/empruntlivre/insertemprunt.php" method="post">
                <div class="form-group">
                    <input type="text" name="IM" class="form-control mb-2" placeholder="IM" required>
                    <input type="text" name="nom" id="nom" class="form-control mb-2" placeholder="Nom" required>
                    <input type="text" name="prenom" id="prenom" class="form-control mb-2" placeholder="Prenom" required>
                    <input type="text" name="resp" class="form-control mb-2" placeholder="Responsabilite" required>
                    <input type="text" name="tell" class="form-control mb-2" placeholder="Phone" required>  
                    
                    <input type="submit" value="Enregistrer" class="form-control btn btn-danger mt-3" onclick="return verification();">
                </div>
            </form>
        </div>
    </body>
</html>