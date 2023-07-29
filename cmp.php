<?php
$uname=$_POST['name'];

$phone=$_POST['phno'];

$animal=$_POST['select'];

$addr=$_POST['address'];

$descp=$_POST['description'];

	$user = "root";
	$server = "localhost";
	$pwd = "";
	$dname = "hfp";

	$con = mysqli_connect($server,$user,$pwd,$dname);

	$sql = "insert into cmp (u_name,phoneno, choice,addr,descrp) values ('$uname','$phone','$choice','$addr','$descp')";

	$res = mysqli_query($con,$sql);

	if($res)
	{
header('location: index.php');
	}
	else
	{
		mysqli_error();
	}
?>
