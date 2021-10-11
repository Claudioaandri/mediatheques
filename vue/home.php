	
<?php 	require 'assets/navigation.php'; ?>

    <!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<div class="col-md-6">
                                <div class="feature_item">
                                    <img src="img/s1.png" style="width: 150px;" alt="">
                                    <h4>Livres</h4>
                                    
                                    <hr>
                                    <a class="primary_btn"  href="ajoutlivre/ajoutlivre.php"><span>Nouveautes</span></a>
                                </div>
                            </div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="img-fluid home_right_img">
							<img class="" src="img/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--================ End Home Banner Area =================-->

	

    <!--================Footer Area =================-->
	
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="../img/logo.png" alt="">
							</a>
							<h4>Follow Us</h4>
						</div>
						<div class="footer_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Application is made  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Claudio and Andry</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<script type="module">
		import { Toast } from 'bootstrap.esm.min.js'

		Array.from(document.querySelectorAll('#staticBackdropLabel'))
			.forEach(toastNode => new Toast(toastNode))
	</script>
</body>
</html>