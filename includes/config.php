<?php 
ob_start(); // function to start output buffering (when a php page loads, it will send data to the server in pieces
session_start();
$timezone = date_default_timezone_set("Europe/London");
$con = mysqli_connect("localhost", "root", "", "abcms");
if(mysqli_connect_errno()) { // return error connecting to database if any
	echo "Failed to connect: " . mysqli_connect_errno();
}
?>