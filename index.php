<!DOCTYPE html>
<html lang="en">
<head>
<title>TurnStiles</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="TurnStiles">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<ul>
				<li class="menu_item"><a href="index.php">Home</a></li>
				<li class="menu_item"><a href="about.php">About us</a></li>
				<li class="menu_item"><a href="tutorials.php">FAQs</a></li>
				<li class="menu_item"><a href="online_store/index.php">Store</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		 <div class="background_image" style="background-image:url(images/index.jpg); margin-top: 100px;"></div> 

		<!-- Header -->

		<?php
		include("header.php");
		?>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col"> <center>
						<div class="home_content">
							<div class="home_title">TurnStiles</div>
							<div class="home_text"><h3>Our Mission is to enhance the lives of our customers by providing high-quality, stylish and functional furniture solutions that transform their living spaces into personalized havens of comfort and beauty.</h3><p class="home_text"> <h3>We strive to exceed customer expectations through exceptional product selection, excellent service and a seamless online shopping experience.</h3></p></div>
						</div> 
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Info Boxes -->

	<div class="info" id="complaint">
		<div class="container">
			<div class="row">

			<!-- Complaint -->
				<div class="col-lg-3 info_box_col">
					<div class="info_box">
						<div class="info_image"><img src="images/dec1.avif" alt=""></div>
						<div class="info_content">
							<div class="info_text">“Design creates culture. Culture shapes values. Values determine the future".<br><br> - Robert Peters.<br><br><br><br><br><br><br></div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="info_form_container">
						<div class="info_form_title">Need Help?</div>
						 <form action="cmp.php" class="info_form" id="info_form" method="POST" onsubmit="validate();">
							<input type="text" class="info_input" placeholder="Name" name="name" id="name" pattern="[a-z A-Z]{5,}" title="Insert only letters" required>
							<input type="text" class="info_input" placeholder="Phone Number" name="phno" id="phno" pattern='^\+?\d{0,13}' title="Format is (+16399695949)" required>
							<select name="select" id="choice" class="info_form_dep info_input info_select" value="<?php echo $row['select']; ?>" required="required">
								<option value="--Select Item--">--Select Item--</option>
                                <option value="Chair">Chair</option>
								<option value="Sofa">Sofa</option>
								<option value="Bed">Bed</option>
								<option value="Office Furniture">Office Furniture</option>
								<option value="Misc.">Misc.</option>
							</select>
							<textarea class="info_input" placeholder="Address" id="address" name="address" required></textarea><br><br>
							<textarea class="info_input" placeholder="Description" id="descp" name="description" pattern="[a-zA-Z]{20,100}" title="Write a short description" required></textarea><br><br>
							<button class="info_form_button">Make A Complaint</button><br><br>
						 </form>
						<script type="text/javascript">
							function validate() {
      		 var r = confirm("Are you sure you want to place a complaint?");
							  if (r == true) {
								alert("Your complaint is placed Successfully! Thank You!");
							  } else {
								alert("Thanks for sticking around!");
							  }
							  if( document.info_form.name.value == "" ) {
            alert( "Please provide your name!" );
            document.info_form.name.focus() ;
            return false;
         }
         if( document.info_form.phno.value == "" ) {
            alert( "Please provide your number!" );
            document.info_form.phno.focus() ;
            return false;
         }
		 if( document.info_form.choice.value == "" ) {
            alert( "Please select Item!" );
            document.info_form.choice.focus() ;
            return false;
         }
		 if( document.info_form.address.value == "" ) {
            alert( "Please provide your address!" );
            document.info_form.address.focus() ;
            return false;
         }
		 if( document.info_form.descp.value == "" ) {
            alert( "Please enter description!" );
            document.info_form.descp.focus() ;
            return false;
         }
							}

						</script>
					</div>
				</div>
				<div class="col-lg-3 info_box_col">
					<div class="info_box">
						<div class="info_image"><img src="images/dec2.avif" alt=""></div>
						<div class="info_content">
				
							<div class="info_text">“Design is not just what it looks like and feels like. Design is how it works”<br><br> - Steve Jobs<br><br><br><br><br><br><br><br></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- Boxes -->
	<div class="boxes d-flex flex-lg-row flex-column align-items-start justify-content-start">

		<!-- Box -->
		<div class="box">
			<div class="background_image" style="background-image:url(images/gradient_1.jpg)"></div>
			<div class="box_title">Our Mission</div>
			<div class="box_subtitle">take a look</div>
			<div class="box_text">Our Mission is to enhance the lives of our customers by providing high-quality, stylish and functional furniture solutions that transform their living spaces into personalized havens of comfort and beauty.
			We strive to exceed customer expectations through exceptional product selection, excellent service and a seamless online shopping experience for the customer.<br></div>
		</div>

		<!-- Box -->
		<div class="box">
			<div class="background_image" style="background-image:url(images/gradient_2.jpg)"></div>
			<div class="box_title">Our Vision</div>
			<div class="box_subtitle">take a look</div>
			<div class="box_text">Our Vision at TurnStiles is to become the go-to destination for individual seeking exquisite furniture that combines timeless design, superior craftmanship, and affordibility. We aim to be recognized as industary leaders, known for our unweavering commitment to delivering exceptional value, inspiring spaces and creating lasting relationships with our lasting customers .</div>
		</div>

		<!-- Box -->
		<div class="box">
			<div class="background_image" style="background-image:url(images/gradient_3.jpg)"></div>
			<div class="box_title">Our Motive</div>
			<div class="box_subtitle">take a look</div>
			<div class="box_text">At TurnStiles, our motives is to revolutionize the way people perceive and experience furniture shopping. We are driven by a passion for curating a diverse collection of furniture that caters to wide range of taste and preferences. By offering an extensive selection, competative prices. Our ultimate goal is to help individuals create homes that truely reflect their aspirations. </div>
		</div>

	</div>

	<!-- Services -->

	<div class="services" id="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Our Services</div>
					<div class="section_subtitle">to choose from</div>
				</div>
			</div>
			<div class="row icon_boxes_row">

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
						<i class="fa fa-phone fa-3x" aria-hidden="true"></i>	
						
							<div class="icon_box_title">Customer Support</div>
						</div>
						<div class="icon_box_text">TurnStiles offer channels such as phone, email, or live chat to address customer inquiries, provide assistance, and resolve any issues that may arise before, during, or after the purchase.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><i class="fa fa-cc-amex fa-3x" aria-hidden="true"></i></div>
							<div class="icon_box_title">Multiple Payment forms</div>
						</div>
						<div class="icon_box_text">TurnStiles accepts various forms of payment to suit consumers needs. </div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><i class="fa fa-truck fa-3x" aria-hidden="true"></i></div>
							<div class="icon_box_title">Delivery Option</div>
						</div>
						<div class="icon_box_text">TurnStiles offer delivery services to transport the purchased furniture to the customer's desired location.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><i class="fa fa-cog fa-3x" aria-hidden="true"></i></div>
							<div class="icon_box_title">Customization Options</div>
						</div>
						<div class="icon_box_text">TurnStiles allows customization services, allowing customers to tailor certain aspects of the furniture to their preferences. This may include selecting fabric or upholstery, choosing finishes or colors, or modifying dimensions.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><i class="fa fa-wrench fa-3x" aria-hidden="true"></i></div>
							<div class="icon_box_title">Assembly options</div>
						</div>
						<div class="icon_box_text"> For additional charges, TurnStiles provide assembly services, where our professionals assemble the furniture on-site for the customer's convenience. </div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i></div>
							<div class="icon_box_title">Personalized Consultation</div>
						</div>
						<div class="icon_box_text">TurnStiles provides personalized consultation scd ervices to assist customers in choosing the right furniture for their needs. This can involve expert advice on selecting suitable pieces based on space, functionality, aesthetics, and budget..</div>
					</div>
				</div>

			</div>
			</div>
		</div>
	</div>

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
