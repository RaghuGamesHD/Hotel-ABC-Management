<?php
class Account {
	private $con;
	private $errorArray;
	public function __construct ($con) {
		$this->con = $con; // assigning connection variable to the variable in the class
		$this->errorArray = array();
	}
	public function login($un, $pw) {
		$pw = md5($pw); // encrypting entered password
		$query = mysqli_query($this->con, "SELECT * FROM staff WHERE StaffUsername = '$un' AND StaffPassword = '$pw'");
		if(mysqli_num_rows($query) == 1) {
			return true;
		}
		else {
			array_push($this->errorArray, Constants::$LoginFailed);
			return false;
		}
	}
	public function register($nm, $un, $em, $pw, $pw2, $rl) {
		$this->validateUserName ($un);
		$this->validateName ($nm);
		$this->validateEmail ($em);
		$this->validatePasswords ($pw, $pw2);
		if (empty($this->errorArray) == true) {
			// insert into database
			return $this->insertUserDetails($nm, $un, $em, $pw, $rl);
		}
		else {
			return false;
		}
	}
	public function getError ($error) {
		if(!in_array($error, $this->errorArray)) { // if error is not present in the array
			$error = "";
		}
		return "<span style = 'color: red'> $error </span>";
	}
	private function insertUserDetails ($nm, $un, $em, $pw, $rl) {
		$encryptedPw = md5($pw);
		$ProfilePic = "./imgs/avatar-1.png";
		$result = mysqli_query($this->con, "INSERT INTO staff VALUES ('', '$nm', '$un', '$em', '$encryptedPw', '$ProfilePic', '$rl')");
		return $result;
	}
	private function validateName ($nm) {
		// echo "username function works";
		if (strlen($nm) > 500) {
			array_push($this->errorArray, Constants::$BadUsernameLength);
			return;
		}		
	}
	private function validateUserName ($un) {
		// echo "username function works";
		if (strlen($un) < 5 || strlen($un) > 30) {
			array_push($this->errorArray, Constants::$BadUsernameLength);
			return;
		}
		// to do: check if username exists
		$checkUsernameQuery = mysqli_query($this->con, "SELECT StaffUsername FROM staff WHERE StaffUsername = '$un'");
		if(mysqli_num_rows($checkUsernameQuery) != 0) {
			array_push($this->errorArray, Constants::$UsernameTaken);
			return;
		}
	}
	private function validateEmail ($em) {
		// echo "email function works";
		if (!filter_var($em, FILTER_VALIDATE_EMAIL)) { // check if email is in the correct format
			array_push($this->errorArray, Constants::$InvalidEmail);
			return;
		}
		// to do: check if email exists
		$checkEmailQuery = mysqli_query($this->con, "SELECT StaffEmail FROM staff WHERE StaffEmail = '$em'");
		if(mysqli_num_rows($checkEmailQuery) != 0) {
			array_push($this->errorArray, Constants::$EmailTaken);
			return;
		}
	}
	private function validatePasswords ($pw, $pw2) {
		// echo "password function works";
		if ($pw != $pw2) {
			array_push($this->errorArray, Constants::$PasswordsNotMatching);
			return;
		}
		if (preg_match('/[^A-Za-z0-9]/', $pw)) { // if password contains any characters other than A-Z, a-z or 0-9
			array_push($this->errorArray, Constants::$InvalidPassword);
			return;
		}
		if (strlen($pw) < 5) {
			array_push($this->errorArray, Constants::$BadPasswordLength);
			return;
		}
	}
}
?>