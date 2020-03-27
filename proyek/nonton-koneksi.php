<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utsDB";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (mysqli_connect_error()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
} else {
	echo "";
}
?>