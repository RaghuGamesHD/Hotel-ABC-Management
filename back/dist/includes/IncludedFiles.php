<?php
include("../../includes/config.php");
include("includes/classes/User.php"); // linking to the user class, and putting on top so that other classes below can use it.
// include("includes/classes/Account.php");
// include("includes/classes/Constants.php");

if(!isset($_SESSION['UserLoggedIn']))
{
    // not logged in
    header("Location: login.php");
}
else {
	$UserLoggedIn = new User($con, $_SESSION['UserLoggedIn']); // to make the userloggedin object accessible by the pages
}

?>