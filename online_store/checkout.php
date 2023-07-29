<?php


session_start();
error_reporting(0);
$user_token=0;
$connect = mysqli_connect("localhost", "root", "", "hfp");
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
	  <link href="css/main_styles.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="C:\wamp64\www\HopeForPaws\styles\responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
	<!--header-->
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i>+1 (800) 581-185</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> TurnStiles@gmail.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->


<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>

					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							    <li><a href="../index.php">TurnStiles &nbsp;<img src="images/logo.jpg" width="40" height="40"></a></li>
								<li><a href="../index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
								<li><a href="index.php"><i class="fa fa-crosshairs"></i>All products</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
    						</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->


	<div class="register-req">
				<p><center>Please give proper details to easily get items at your delivered address.</p></center>
			</div><!--/register-req-->

			<div class="container">
				<div class="row">
					<div class="col-sm-2">

					</div>
				<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To :-</p>
						<center>	<div class="form-one">
								<form name="form1" action=" " method="post">
									<input type="text" placeholder="First Name" name="firstname" required pattern="[A-Za-z]+" title="please enter valid firstname[a-z only]" style="width:800px; ">
									<input type="text" placeholder="Last Name" name="lastname" required pattern="[A-Za-z]+" title="please enter valid lastname[a-z only]" style="width:800px; ">
									<input type="text" placeholder="Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="please enter valid email address" style="width:800px; ">
									<input type="text" placeholder="Resi. Address" name="resi" required style="width:800px; ">
									<input type="text" placeholder="City" name="city" required pattern="[A-Za-z]+" title="please enter valid city name[a-z only]" style="width:800px; ">
									<input type="text" placeholder="Pincode" name="pincode" style="width:800px; ">
									<input type="text" placeholder="Contact Number" name="cno" required  style="width:800px; ">
									<input type="submit" class="info_form_button" name="submit1" value="save" style="background-color:#27ce4e; color:black; font-weight:bold">

								</form>
							</div>

			<?php

			if(isset($_POST["submit1"]))
			{ $tmp_random= rand ( 10000 , 99999 );
      $user_token = $_POST[firstname] . '_' . $tmp_random;

				$link=mysqli_connect("localhost","root","");
				mysqli_select_db($link,"hfp");
				//mysqli_query($link,"insert into checkoutaddress(user_token,firstname,lastname,email,resi,city,pincode,cno) values('$user_token','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[resi]','$_POST[city]','$_POST[pincode]','$_POST[cno]')");
					mysqli_query($link,"insert into checkoutaddress(user_token,firstname,lastname,email,resi,city,pincode,cno) values('$user_token','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[resi]','$_POST[city]','$_POST[pincode]','$_POST[cno]')");
					foreach($_SESSION["shopping_cart"] as $keys => $values)
					{
						$_SESSION['pay'] = $values['item_price'];
						$a = $values["item_name"];
						$b= $values["item_quantity"];
						$c= $values["item_price"];
						mysqli_query($link,"insert into orderdata(user_token,item_name,item_quantity,item_price) values('$user_token','$a','$b','$c')");

$user_token;

					}

				?>
			<script type="text/javascript">
				alert("click ok to transferring you to Paypal");

			setTimeout(function(){
					// var abc = "";
					window.location="https://www.paypal.com/sdk/js?client-id=sb";
				},20);

			</script>
			<?php


			}


			?>
						</div>
					</div>

				</div>
			</div>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
