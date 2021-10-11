<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/product_styles.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
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
			/*else{
				echo "<div class='top_bar'>";
					echo "<div class='container'>";
						echo "<div class='row'>";
							echo"<div class='logo'><a href='index.html'>Charmant</a></div>";
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
			}*/
			else{
			//redirect to log in page
				echo '<script>alert("Please log in.");</script>';
				//header("login.html");
				header("Location: login.html");
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

	</header>

	<!-- Cart -->

	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Shopping Cart</div>
						<?php
							$totalprice = 0;
							include("dbconn.php");
							$sql = "SELECT * FROM cart WHERE client_id = '$client_id' AND status = '0'";
							$query = mysqli_query($dbconn,$sql);
							while($cartData = mysqli_fetch_assoc($query)){
								$sql1 = "SELECT * FROM product WHERE product_id = '".$cartData['product_id']."'";
								$query1 = mysqli_query($dbconn,$sql1);
								$productData = mysqli_fetch_assoc($query1);
								?>
								<div class="cart_items">
									<ul class="cart_list">
										<li class="cart_item clearfix">
											<div class="cart_item_image"><img src="<?php echo $productData['product_pic']; ?>"></div>
											<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
												<div class="cart_item_name cart_info_col">
													<div class="cart_item_title">Name</div>
													<div class="cart_item_text"><?php echo $productData['product_name'];?></div>
												</div>
												<div class="cart_item_quantity cart_info_col">
													<div class="cart_item_title">Quantity</div>
													<br>
													<div class="product_quantity clearfix">

													<input type="number" name="quantity" value="<?php echo $cartData['quantity']; ?>" />
											</div>
											</div>
												<div class="cart_item_price cart_info_col">
													<div class="cart_item_title">Price</div>
													<center><div class="cart_item_text">RM&nbsp;<?php echo $productData['product_price'];?></div>
												</div>
												<div class="cart_item_total cart_info_col">
													<div class="cart_item_title">Total</div>
													<div class="cart_item_text"><center>RM&nbsp;<?php echo $total = (int)$productData['product_price'] * (int)$cartData['qty'];$totalprice = $totalprice + $total;?></div>
												</div>
												<div class="cart_item_remove cart_info_col">
													<div class="cart_item_title">Remove</div>
													<center>
														<form action="deletecart.php" method="post">
															<div class="cart_item_text">
																<input type="hidden" name="cartid" value="<?php echo $cartData['cart_id'];?>">
																<button type="submit" name="submit" value="submit" class="btn btn-danger"><i style="font-size29px;" class="fa fa-trash"></i></button>
														</form>
												</div>

											</div>

											</div>
										</li>
									</ul>
								</div>
								<?php
							}
						?>

						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">RM&nbsp;<?php echo $totalprice; ?></div>
							</div>
						</div>
						<form action="#" method="post">
							<div class="cart_buttons">
								<button type="submit" class="button cart_button_checkout" value="submit">Buy Now</button>
							</div>
						</form>
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
<script src="plugins/easing/easing.js"></script>
<script src="js/cart_custom.js"></script>
</body>
</html>
