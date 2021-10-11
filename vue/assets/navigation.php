<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="icons/font/all.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


	<script src="js/jquery.min.js"></script>
    <title>Biblio-enligne</title>
</head>

<body>
    <!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="home.php"><h2>Mediatheques</h2></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="home.php">Accueil</a></li>
						 <!--  categorie des livre !-->
                               
						 <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">CATEGORIE <i class="fa fa-angle-down m-2"></i></a>
								<ul class="dropdown-menu smooth-scroll list-unstyled">
									<!-- ************************************************************************** -->
									<?php include "../control/categorie/categoriechoix.php";?>
									<!-- <li class="nav-item"><a class="nav-link" href="newcategorie/newcat.php">New Category<i class="ml-2 fa fa-plus-circle"></i></a>	</li> -->
								</ul>
							</li>
						 <!--  categorie des livre !-->
							<li class="nav-item"><a class="nav-link" href="visiteur/classementvisiteur.php">Visiteur</a></li>
							<li class="nav-item"><a class="nav-link" href="assets/services.php">Services</a></li>
							<!-- liste des livres !-->
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Bibliotheques</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="assets/category.php">AllBooks</a></li>
									<li class="nav-item"><a class="nav-link" href="disponibilite/dispolivre.php">Diponibilite</a></li>
									<li class="nav-item"><a class="nav-link" href="specifique/addspecifique.php">Emprunt</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Statistiques</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../control/statistiquelivre/livre.php">Livre</a></li>
									<li class="nav-item"><a class="nav-link" href="../control/statistiquelivre/ecole.php">Ecole</a></li>
								</ul>
							</li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<script>
      $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
       });
    
    });
    </script>

	<!--Navigation links with a Smooth Scroll effect-->
<ul class="smooth-scroll list-unstyled">
  <li>
    <h5><a href="#test1">Click to scroll to section 1</a></h5>
  </li>
  <br>
  <li>
    <h5><a href="#test2">Click to scroll to section 2</a></h5>
  </li>
  <br>
</ul>
