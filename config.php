<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";
$conn = mysqli_connect("localhost","root","","myproject");
mysqli_set_charset($conn,"utf8");
if(!$conn)
{
echo"connection faild";
}
else {
	echo "";
}

?>