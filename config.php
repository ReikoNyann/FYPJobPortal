<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "mu2wil";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    echo "<script>alert('Connection Failed.')</script>";
}

?>