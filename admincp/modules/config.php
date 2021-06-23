<?php
$servername = "localhost";
$database = "banhang";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db($conn, $database);
mysqli_set_charset($conn, 'UTF8');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
