<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog_single_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_single_responsive.css">

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
										echo "<div><a href='#'>Cart</a></div>";
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
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="index.php">Charmant</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
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
									<li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
									<li>
										<a href="#">Products<i class="fas fa-chevron-down"></i></a>
									</li>
									<li><a href="about us.php">About us<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>
					</div>
				</div>
			</div>
		</nav>

	</header>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/post_4.jpg" data-speed="0.8"></div>
	</div>

	<!-- Single Blog Post -->

	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="single_post_title">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</div>
					<div class="single_post_text">
						<p>Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin. Praesent at tempus lectus, eleifend blandit felis. Fusce augue arcu, consequat a nisl aliquet, consectetur elementum turpis. Donec iaculis lobortis nisl, et viverra risus imperdiet eu. Etiam mollis posuere elit non sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis arcu a magna sodales venenatis. Integer non diam sit amet magna luctus mollis ac eu nisi. In accumsan tellus ut dapibus blandit.</p>

						<div class="single_post_quote text-center">
							<div class="quote_image"><img src="images/quote.png" alt=""></div>
							<div class="quote_text">Quisque sagittis non ex eget vestibulum. Sed nec ultrices dui. Cras et sagittis erat. Maecenas pulvinar, turpis in dictum tincidunt, dolor nibh lacinia lacus.</div>
							<div class="quote_name">Liam Neeson</div>
						</div>

						<p>Praesent ac magna sed massa euismod congue vitae vitae risus. Nulla lorem augue, mollis non est et, eleifend elementum ante. Nunc id pharetra magna.  Praesent vel orci ornare, blandit mi sed, aliquet nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog Posts -->
	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">

						<!-- Blog post -->
						<div class="blog_post">
							<div class="blog_image" style="background-image:url(images/post_1.jpg)"></div>
							<div class="blog_text">Our Perfumers’ Picks Of The Top 8 Fragrance Industry Blogs</div>
							<div class="blog_button"><a href="https://www.alphaaromatics.com/blog/the-top-8-fragrance-industry-blogs-to-follow-our-prefumers-picks/">Continue Reading</a></div>
						</div>

						<!-- Blog post -->
						<div class="blog_post">
							<div class="blog_image" style="background-image:url(images/post_2.jpg)"></div>
							<div class="blog_text">What Is The Key To Designing Winning Marketable Fragrances?</div>
							<div class="blog_button"><a href="https://www.alphaaromatics.com/blog/the-key-to-designing-winning-fragrances/">Continue Reading</a></div>
						</div>

						<!-- Blog post -->
						<div class="blog_post">
							<div class="blog_image" style="background-image:url(images/post_3.jpg)"></div>
							<div class="blog_text">A Step By Step Guide To Launching Your Own Perfume Line</div>
							<div class="blog_button"><a href="https://www.alphaaromatics.com/blog/how-to-launch-a-perfume-line/">Continue Reading</a></div>
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
							<li>Contact us</li>
							<li>Advertise with us</li>
							<li>Help & FAQs</li>
							<li>Contributors</li>
						</ul>
					</div>
				</div>


				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Quick Links</div>
						<ul class="footer_list">
							<li>Perfume Directory</li>
							<li>Perfume Brands</li>
							<li>Perfume & People in the industry</li>
							<li>Fragrance Events</li>
							<li>Fragrance News</li>
							<li>Fragrance Forums</li>
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/blog_single_custom.js"></script>
</body>

</html>