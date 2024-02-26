<?php
session_start();

$host = "localhost";    /* Host name */
$user = "abhay";         /* User */
$password = "abhay";         /* Password */
$dbname = "foodorder";   /* Database name */

// Create connection
$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
