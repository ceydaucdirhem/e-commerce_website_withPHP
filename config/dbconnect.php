<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "ceyshop";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Bağlanma hatası:".mysqli_connect_error());
}

?>