<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "hfp");
?>

<?php
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
	  <link href="css/main_style.css" rel="stylesheet">
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

		<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		.flip-card {
			background-color: transparent;
			width: 300px;
			height: 300px;
			perspective: 1000px;
		}

		.flip-card-inner {
			position: relative;
			width: 100%;
			height: 100%;
			text-align: center;
			transition: transform 0.6s;
			transform-style: preserve-3d;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		}

		.flip-card:hover .flip-card-inner {
			transform: rotateY(180deg);
		}

		.flip-card-front, .flip-card-back {
			position: absolute;
			width: 100%;
			height: 100%;
			backface-visibility: hidden;
		}

		.flip-card-front {
			background-color: black;
			color: white;
			z-index: 2;
		}

		.flip-card-back {
			align:center;
			background-color: #eedd82;
			color: red;
			transform: rotateY(180deg);
			z-index: 1;
		}
		</style>

</head>

<body>
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

	
		<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item">
								<div class="col-sm-6">
									<h1>TurnStiles</h1>
									<h2>Online Store</h2>
									<p>Various collection Home Decor Merch. </p>

								</div>
								<div class="col-sm-6">
									<img src="images/slider1.avif" width="300" height="250" class="img-responsive"  width="400px" height="400px" alt="" />

								</div>
							</div>


							<div class="item ">
								<div class="col-sm-6">
                                    <h1>TurnStiles</h1>
									<h2>Online Store</h2>
									<p>Explore our wide selection of Sofa's.</p>

								</div>
								<div class="col-sm-6">
									<img src="images/slider2.jpg" class="img-responsive" width="400px" height="400px" alt="" />

								</div>
							</div>

							<div class="item active">
								<div class="col-sm-6">
									<h1>TurnStiles</h1>
									<h2>Online Store</h2>
									<p>What better way to celebrate summer than with a sale?</p>

								</div>
								<div class="col-sm-6">
									<img src="images/slider3.jpg" class=" img-responsive" width="400px" height="400px" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->
<br/>
<div class="row">
<div class="col" style="padding-left: 400px; ">
<a href="chair.php"><button class="btn " name="chair" value="Chair">Chair</button></a>
<a href="Cabinets.php"><button class="btn" name="Cabinets" value="Cabinets">Cabinets</button></a>
<a href="DiningTable.php"><button class="btn" name="Dining Table" value="Dining Table">Dining Table</button></a>
<a href="Sofa.php"><button class="btn" name="Sofa" value="Sofa">Sofa</button></a>
<a href="table.php"><button class="btn" name="Table" value="Table">Table</button></a>
<a href="beds.php"><button class="btn" name="Beds" value="Beds">Beds</button></a>
<a href="wardrobe.php"><button class="btn title" name="bag" value="Bag">Wardrobe</button></a>
</div>
</div>
<br>
<br>
		<div class="container">
				<h2 class="title text-center">Wardrobe</h2><br /><br />
			<?php
				$query = "SELECT * FROM products WHERE product_cat = 7 ";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["product_id"]; ?>">
					<div style="border:6px solid #F7F7F5; overflow: hidden; margin-bottom:30px; position: relative; color: #FE980F; font-family: 'Roboto', sans-serif; font-size: 24px; font-weight: 700;" align="center" >
						<br>
						<div class="flip-card">
	<div class="flip-card-inner">
		<div class="flip-card-front">

				<img src="images/<?php echo $row["product_image"]; ?>" class="img-responsive " /><br />
		</div>
	<div class="flip-card-back">
			<br><br>
			<p><?php echo $row["product_desc"]; ?></p>
		</div>
	</div>
</div>



						<h4 class="text-info"><?php echo $row["product_title"]; ?></h4>

						<h3 class="text-danger">$ <?php echo $row["product_price"]; ?></h3>

						<input type="text" name="quantity" value="1" maxlength="1" class="form-control" style="width:20%" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["product_title"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["product_price"]; ?>" />
						<br>

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
												<br><br>
					</div>
				</form>
			</div>

			<?php
					}
				}
			?>
		</div>
	</div>
	<br />

	<?php
	include("footer.php");
	?>

	<script src="js/jquery.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	</body>
</html>
