<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>
<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">
	
		<?php
			session_start();
			if(isset($_SESSION['client_id'])){
				// store session in var
				$client_id = $_SESSION['client_id'];

				echo "<div class='top_bar'>";
					echo "<div class='container'>";
						echo "<div class='row'>";
							echo "<div class='col d-flex flex-row'>";
								echo "<div class='top_bar_content ml-auto'>";
									echo "<div class='top_bar_user'>";
										echo "<div class='user_icon'><a href='update_charmant.php'><img src='images/user.svg'></a></div>";
										echo "<div><a href='cart.php'>Cart</a></div>";
										echo "<div><a href='logout.php'>Log out</a></div>";
									echo "</div>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
					echo "</div>";					
				echo "</div>";
			}
			else{
				echo "<div class='top_bar'>";
					echo "<div class='container'>";
						echo "<div class='row'>";
							echo"<div class='logo'><a href='index.php'>Charmant</a></div>";
							echo "<div class='col d-flex flex-row'>";
								echo "<div class='top_bar_content ml-auto'>";
									echo "<div class='top_bar_user'>";
										echo "<div class='user_icon'><img src='images/user.svg' alt='update_charmant.php'></div>";
										echo "<div><a href='SignUp.html'>Register</a></div>";
										echo "<div><a href='Login.html'>Sign in</a></div>";
									echo "</div>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
					echo "</div>";					
				echo "</div>";
			}
		?>

		<!-- Header Main -->
		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
											
												<span class="custom_dropdown_placeholder clc"></span>
												<ul class="custom_list clc">
													
												</ul>

								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
							<!-- Main Nav Menu -->

							 <div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="Product1.php">Products<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">About us<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="cart.php">cart<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>
					</div>
				</div>
			</div>
		</nav>

	</header>

	<!-- Banner -->

	<div class="banner_2">
		<div class="banner_2_background" style="background-image:url(https://img.squarelet.com/ghimg.ashx?sq=2571ba11-e344-4949-bf23-f03e9adc2a77)"></div>
		<div class="banner_2_container">
			<!-- Banner 2 Slider -->

			<div class="owl-carousel owl-theme banner_2_slider">

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content"><br><br></div>
								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
										<div class="banner_2_image"><img src="images/.jpg" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- Best Sellers -->
	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Highlights</div>
							<ul class="clearfix">
								<li class="active"></li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>

						<div class="bestsellers_panel panel active">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">
							
							<?php
								// database connection 
								include("dbconn.php");
								$sql="SELECT * FROM product where pt_id=1 limit 3";
								$sql2="SELECT * FROM product where pt_id=2 limit 3";
								$rs = mysqli_query($dbconn, $sql);
								$rs2 = mysqli_query($dbconn, $sql2);
								while($row_rs=mysqli_fetch_assoc($rs))
								{	$row_rs2=mysqli_fetch_assoc($rs2);
								?>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="<?php echo $row_rs['product_pic']; ?>"></div>
										<div class="bestsellers_content">
											<div class="product_name"><div>Men</div></div>
											<div class="bestsellers_name"><?php echo $row_rs['product_name']; ?></a></div>
											<div class="bestsellers_price discount">RM<?php echo $row_rs['product_price']; ?></div>
										</div>
									</div>
								</div>
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="<?php echo $row_rs2['product_pic']; ?>"></div>
										<div class="bestsellers_content">
											<div class="product_name"><div>Women</div></div>
											<div class="bestsellers_name"><?php echo $row_rs2['product_name']; ?></a></div>
											<div class="bestsellers_price discount">RM<?php echo $row_rs2['product_price']; ?></div>
										</div>
									</div>
								</div>
								<?php 
								} 
							?>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
						
	<!-- Brands -->
	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/Dior.jpg"></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/Lalique.jpg"></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/CalvinKlein.jpg"></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/Boss.jpg"></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/Balenciaga.jpg"></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/Trussardi.png"></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/Bvlgari.jpg"></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/Valentino.png" height="100" ></div></div>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="index.php">Charmant</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">03-27765 9870</div>
						<div class="footer_contact_text">
							<p>1, Lebuh Bandar Utama, Bandar Utama, </p>
							<p>47800 Petaling Jaya, Selangor</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
								<li><a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
								<li><a href="https://www.google.com"><i class="fab fa-google"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it fast</div>
						<ul class="footer_list">
							<li><p>Contact Us</p></li>
							<li><p>Advertise With Us</p></li>
							<li><p>Help & FAQs</p></li>
							<li><p>Contributors</p></li>
						</ul>
						<div class="footer_subtitle"></div>
						<ul class="footer_list">
						</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Quick Links</div>
						<ul class="footer_list">
							<li><p>Perfume Directory</p></li>
							<li><p>Perfume Brands</p></li>
							<li><p>Perfume & People in the industry</p><li>
							<li><p>Fragrance Events</p></li>
							<li><p>Fragrance News</p></li>
							<li><p>Fragrance Forums</p></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-center">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><img src="images/logos_1.png"></li>
								<li><img src="images/logos_2.png"></li>
								<li><img src="images/logos_3.png"></li>
								<li><img src="images/logos_4.png"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
</html>