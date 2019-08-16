<?php
class User {
	private $con;
	private $UserName;
	public function __construct ($con, $UserName) {
		$this->con = $con; // assigning connection variable to the variable in the class
		$this->UserName = $UserName;
	}
	public function getUserName() {
		return $this->UserName;
	}
	public function getTheName() {
		$query = mysqli_query($this->con, "SELECT StaffName FROM staff WHERE StaffUsername = '$this->UserName'");
		$row = mysqli_fetch_array($query);
		return $row['StaffName'];
	}
	public function getProfilePic() {
	$query = mysqli_query($this->con, "SELECT StaffPic FROM staff WHERE StaffUsername = '$this->UserName'");
	$row = mysqli_fetch_array($query);
	return $row['StaffPic'];
	}
	/*
	public function getUserID() {
		$query = mysqli_query($this->con, "SELECT UserID FROM app_user WHERE UserName = '$this->UserName'");
		$row = mysqli_fetch_array($query);
		return $row['UserID'];
	}
	public function getEmail() {
		$query = mysqli_query($this->con, "SELECT Email FROM app_user WHERE UserName = '$this->UserName'");
		$row = mysqli_fetch_array($query);
		return $row['Email'];
	}*/
	/*
	public function getUserIDs($usernames) {
		foreach ($usernames as &$name) {
			$name = mysqli_real_escape_string($this->con, $name);
		}
		$UserIDsQuery = mysqli_query($this->con, "SELECT UserID, UserName FROM app_user WHERE UserName IN ('".implode("', '", $usernames)."')");
		$names = array();
		while(($row = mysqli_fetch_assoc($result)) !== false) {
			$names[$row['UserName']] = $row['UserID'];

		}
		return $names;
	} */
}
?>