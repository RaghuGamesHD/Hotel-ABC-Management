<?php
if(isset($_POST['loginButton'])) {
	// When login button is pressed print message
	// echo "login button pressed";
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];
	// login function
	$result = $account->login($username, $password);
	if($result == true) {
		// $_SESSION['UserLoggedIn'] = $username;
		header("Location: index.php");
		echo "you are logged in!";
	}
}
?>