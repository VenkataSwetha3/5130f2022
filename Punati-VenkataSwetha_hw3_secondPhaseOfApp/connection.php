<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = Mysqli_connect($servername,$username,$password) or die("unable to connect to host");
$sql = MySQLi_select_db($conn,'test');
?>