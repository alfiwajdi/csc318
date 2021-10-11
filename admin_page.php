<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin-home</title>
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
			if(isset($_SESSION['admin_id'])){
				// store session in var
				$client_id = $_SESSION['admin_id'];
		?>

			<div class='top_bar'>
				<div class='container'>
					<div class='row'>
						<div class='col d-flex flex-row'>
							<div class='top_bar_content ml-auto'>
								<div class='top_bar_user'>
									<div class='user_icon'><img src='images/user.svg'></div>
									<div><a href='logout.php'>Log out</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>

		<!-- Header Main -->
		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">Charmant</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">Men</a></li>
													<li><a class="clc" href="#">Women</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
									</form>
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
									<li><a href="admin_page.php">Home<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="client_list.php">clients<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">products<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="order_list.php">orders<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>
					</div>
				</div>
			</div>
		</nav>

	</header>

	<!-- Banner -->
	<div class="banner_2">
			
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
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Advertise With Us</a></li>
							<li><a href="#">Help & FAQs</a></li>
							<li><a href="#">Contributors</a></li>
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
							<li><a href="#">Perfume Directory</a></li>
							<li><a href="#">Perfume Brands</a></li>
							<li><a href="#">Perfume & People in the industry</a></li>
							<li><a href="#">Fragrance Events</a></li>
							<li><a href="#">Fragrance News</a></li>
							<li><a href="#">Fragrance Forums</a></li>
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
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
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

<?php
	}
	else{
       //redirect to log in page
       echo '<script>alert("Please log in.");</script>';
       header("refresh:0.5;login_admin.html");
      }
?>

</html>