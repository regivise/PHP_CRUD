<?php
$dbHost ="localhost";
$dbUser ="root";
$dbPassword="";
$database="crud_bookapp";

$conn = mysqli_connect($dbHost,$dbUser,$dbPassword,$database);

if(!$conn){

    die("database connection error");
}


?>