<?php
$server = "localhost";
$user = "mu2wil";
$password = "mu2Wil@mu2Wil";
$database = "mu2Wil";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    echo "<script>alert('Connection Failed.')</script>";
}

?>