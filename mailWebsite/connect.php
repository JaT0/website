<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "vmail";

//database connection
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}



?>

