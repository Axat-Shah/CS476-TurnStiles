<?php
$local = "localhost";
$user ="root";
$pwd = "";
$db = "hfp";

$con = mysqli_connect($local,$user,$pwd,$db);

if(!$con)
{
	echo "connnection failed";
	echo mysqli_error($con);
}


?>