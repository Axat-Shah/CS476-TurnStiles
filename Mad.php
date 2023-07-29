<?php
// 1. Enter Database details
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'password';
$dbname = 'database name';

// 2. Create a database connection
$connection = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$connection) {
    die("Database connection failed: " . mysql_error());
}

// 3. Select a database to use 
$db_select = mysql_select_db($dbname,$connection);
if (!$db_select) {
    die("Database selection failed: " . mysql_error());
}

$query = mysql_query("SELECT * FROM users WHERE name = 'Admin' ");

while ($rows = mysql_fetch_array($query)) { 
   $name = $rows['Name'];
   $address = $rows['Address'];
   $email = $rows['Email'];
   $subject = $rows['Subject'];
   $comment = $rows['Comment']

   echo "$name<br>$address<br>$email<br>$subject<br>$comment<br><br>";      
} 

?>