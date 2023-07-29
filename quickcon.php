
<?php
$nme=$_POST['name'];

$mail=$_POST['email'];

$msg=$_POST['message'];

	$user = "root";
	$server = "localhost";
	$pwd = "";
	$dname = "hfp";

	$con = mysqli_connect($server,$user,$pwd,$dname);


	$sql = "insert into quick_contact(name,e_mail,msg) values ('$nme','$mail','$msg')";

	$res = mysqli_query($con,$sql);

	if($res)
	{
		header('location:index.php');
	}
	else
	{
		mysqli_error();
	}

?>
