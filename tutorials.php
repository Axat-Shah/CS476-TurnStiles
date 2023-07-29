<!DOCTYPE html>
<html lang="en">
<head>
<title>Tutorials</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Hope For Paws project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
</head>
<body>

<div class="super_container">

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<ul>
				<li class="menu_item"><a href="index.php">Home</a></li>
				<li class="menu_item"><a href="about.php">About us</a></li>
				<li class="menu_item"><a href="adoption.php">Adoption</a></li>
				<li class="menu_item"><a href="wishlist.php">Wishlist</a></li>
				<li class="menu_item"><a href="tutorials.php">Tutorials</a></li>
				<li class="menu_item"><a href="online_store/index.php">E-store</a></li>
				<li class="menu_item"><a href="https://test.instamojo.com/@hopeforpaws437">Donate</a></li>
			</ul>
		</div>
	</div>
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>

		<!-- Header -->

		<?php
		include("header.php");
		?>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content" style="padding-top: 100px;">
							<div class="home_title">Tutorials</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
						include("dbconfig.php");

						?>
	<div class="stuff">
		<div class="container">
			<div class="row">

				<!-- FAQ -->
				<center>
				<div class="col-lg-7">
					<div class="faq">
						<div class="faq_title"><h1>FAQs</h1></div><br>
						<div class="elements_accordions">
							<div class="accordions">

								<?php
							$sq = "select * from faq_info";
							$res = mysqli_query($con,$sq);
							while($row = mysqli_fetch_assoc($res)){
					?>
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div><?php echo $row['f_title']; ?> </div></div>
									<div class="accordion_panel">
										<div>
											<p><?php echo $row['f_description'];?></p>
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
				</center>
			</div>
		</div>
	</div>
	<center>
	<h1 class="stuff" style="margin-left: 20px; color: black;"> Videos </h1>
	<div class="boxes d-flex flex-lg-row flex-column align-items-start justify-content-start" style="background-color: black;">

		<!-- Box -->
		<div class="box">
			<div class="box_title">How to Assemble a Burrow sofa?</div>
			<div class="box_subtitle">Take a look!</div>
			<iframe src="https://www.youtube.com/embed/nEdlvs_7uC8"  width="350" height="215" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- Box -->
		<div class="box">
			<div class="box_title">How to assemble an office chair?</div>
			<div class="box_subtitle">Take a look!</div>
			<iframe src="https://www.youtube.com/embed/eup_lsJf_9E"  width="350" height="215" frameborder="0" allowfullscreen></iframe>
		</div>
		<!-- Box -->
		<div class="box">
			<div class="box_title">How to assemble a bedframe?</div>
			<div class="box_subtitle">Take a look!</div>
			<iframe src="https://www.youtube.com/embed/-BMwCKVF-0E"  width="350" height="215" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	</center>

	<!-- Footer -->
	<?php
	include("footer.php");
	?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
