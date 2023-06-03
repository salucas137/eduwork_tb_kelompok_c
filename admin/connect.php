<?php
$hostName="localhost";
$username="root";
$password="";
$dbName ="film_db";
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect($hostName,$username,$password,$dbName);

?>