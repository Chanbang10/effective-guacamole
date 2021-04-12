<?php
$serverName = "localhost";
$dBUserName = "root";
$dBpassword = "";
$dBName = "ladydonli";

$conn = mysqli_connect($serverName, $dBUserName, $dBpassword, $dBName );

if(!$conn) {
    die("Connection failed:" .mysqli_connect_error());
}
?>