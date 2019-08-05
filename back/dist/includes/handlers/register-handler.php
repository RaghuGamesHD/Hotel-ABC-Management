<?php

function sanitiseFormName ($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

function sanitiseFormUsername ($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	// $inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

function sanitiseFormEmail ($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	// $inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

function sanitiseFormPassword ($inputText) {
	$inputText = strip_tags($inputText);
	// $inputText = str_replace(" ", "", $inputText);
	// $inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

if(isset($_POST['registerButton'])) {
	// When register button is pressed print message
	// echo "register button pressed";
	$registerName = sanitiseFormName($_POST['registerName']);
	$registerUsername = sanitiseFormUsername($_POST['registerUsername']);
	$registerEmail = sanitiseFormEmail($_POST['registerEmail']);
	$registerPassword = sanitiseFormPassword($_POST['registerPassword']);
	$registerConfirmPassword = sanitiseFormPassword($_POST['registerConfirmPassword']);
	$registerRole = $_POST['registerRole'];
	// echo $registerUserName;
	$wasSuccessful = $account->register($registerName, $registerUsername, $registerEmail, $registerPassword, $registerConfirmPassword, $registerRole); // use arrow when you have an instance of the class
	if($wasSuccessful == true) {
		// $_SESSION['UserLoggedIn'] = $registerUserName;
		header("Location: index.php");
		echo "you are registered!";
	}

}
?>