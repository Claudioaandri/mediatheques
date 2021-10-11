<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../vue/css/bootstrap.min.css">
    <script src="../../vue/js/bootstrap.min.js"></script>
    <script src="../../vue/js/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
        include "../modele/connexion.php";
        $sql='SELECT DISTINCT categorie FROM feuil1';
        $requete=$conn->query($sql);
       while($resultat=$requete->fetch()){
        ?>
    <!-- <div class="container-fluid"> -->
        <!-- <div class="col-md-3"></div> -->
        <!-- <div class="col-md-8 center m-5"> -->
            <form action="../control/categorie/cat.php" method="post">  
                <li class="nav-item mb-1">
                <input type="submit"  class="btn btn-outline-primary text-dark  p-2 m-0   bold" value="<?php echo $resultat['categorie'];?>" name="Categoriechoix">
                </li>
            </form>
                <!--
                <ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="assets/category.php">AllBooks</a></li>
									<li class="nav-item"><a class="nav-link" href="edition/Rechercheedition.php">Edition</a></li>
								</ul>
                  -->

        <!-- </div>    -->
    <!-- </div> -->
    <?php
    }
    ?>
</body>
</html>

