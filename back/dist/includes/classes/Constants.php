<?php
class Constants {
	public static $BadUsernameLength = "Username must be between 5 and 25 characters.";
	public static $UsernameTaken = "This username already exists.";
	public static $InvalidEmail = "Email is invalid.";
	public static $EmailTaken = "This email is already in use.";
	public static $EmailsNotMatching = "Email and Confirm Email must be the same.";
	public static $InvalidPassword = "Password must only contain letters and numbers.";
	public static $BadPasswordLength = "Password must be at least 5 characters long.";
	public static $PasswordsNotMatching = "Password and Confirm Password must be the same.";
	
	public static $LoginFailed = "Username and/or password is incorrect.";
}
?>