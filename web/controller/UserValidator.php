<?php
/* Check If Signup Info is valid or not */

/*  To DO:
 *  1) needs to be improve here to fit multiple phone formates, maybe even international phone
 *  2) PhotoValidate, like image size, et al
 *  3) Check existance for username, email, etc
 */

session_start();

final class UserValidator
{
	private function __construct() { }
	
	public static function logIn($usr_name, $pwd)
	{
		if( empty($usr_name)  || empty($pwd) || !isset($usr_name) || !isset($pwd)  ){
			$error = "User name or password can not be empty.";			
			return $error;
		}
		return NULL;	
	}
	public static function userNameValidate($usr_name)
	{	
		if( empty($usr_name) || !isset($usr_name) ){
			$error_name = "Please enter your user name";
		}
		else{
			if( strlen($usr_name) < 3 ){
				$error_name = $error_name . "User name can not be less than 3 characters, ";
			}else if( strlen($usr_name) > 16 ){
				$error_name = $error_name . " User name can not be more than 16 characters, ";
			}
			if( !preg_match('/^[A-Za-z]+$/', substr($usr_name, 0, 1)) ){
				$error_name = $error_name . " User name must begin with letter, ";
			}
			if( !preg_match('/^[A-Za-z0-9_]+$/', $usr_name) ){
				$error_name = $error_name . " User name must be consist of letters, digits and _";
			}		
			
		}
		return $error_name;
	}
	public static function nameValidate($fname, $lname)
	{
		if( empty($fname) || empty($lname) || !isset($fname) || !isset($lname) ){
			$error_name = "Please enter your first name and last name";
		}
		else{
			if( !preg_match('/^[A-Za-z]+$/', $fname) ){
				$error_name = $error_name . "Name must be consisit of letters.";
			}
			if( !preg_match('/^[A-Za-z]+$/', $lname) ){
				$error_name = $error_name . "Name must be consisit of letters.";
			}
		}
		return $error_name;
	}
	public static function phoneValidate($phone)
	{	
		if( !empty($phone) ){
			if( !preg_match('/^[0-9]+$/', $phone) ){
				$error_phone = "Not a valid phone format. Telephone number must be digits";
			}		
		}
// 			if( !preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone) ){
// 				$error_phone = "Telephone number must be xxxxxxxxx";
// 			}
		return $error_phone;
		
	}
	public static function pwdValidate($pwd, $pwd_confirm)
	{
		if( empty($pwd) || empty($pwd_confirm) || !isset($pwd) || !isset($pwd_confirm) ){
			$error_pwd = "Password fields can not be empty.";
		}else{
			if( strlen($pwd) < 6 ){
				$error_pwd = $error_pwd . "Password can not be less than 6 letters, ";
			}else if( strlen($pwd) > 16 ){
				$error_pwd = $error_pwd . " Password can not be more than 16 letters, ";
			}
			if( !preg_match('/^[A-Za-z0-9!@#\\$%\\^&\\*_]+$/', $pwd) ){
				$error_pwd = $error_pwd . " Password must be consist of letter, digit or !@#$%^&*_";
			}
			if( $pwd !== $pwd_confirm ){
				$error_pwd = " Password you entered not match";
			}
		}
		return $error_pwd;		
	}
	public static function emailValidate($email)
	{
		if( empty($email) || !isset($email) ){
			$error_email = "Email can not be empty. Please enter your email";
		}
		else{
			if( !filter_var($email, FILTER_VALIDATE_EMAIL) == true ){
				$error_email = "Not a valid email format.";
			}			
		}
		return $error_email;
	}	
	public static function genderValidate($gender)
	{
		if( empty($gender) || !isset($gender) ){
			$error_gender = "Please select the gender.";
		}
		return $error_gender;
	}
	/* not necessary now */
	// 	public static function birthdayValidate($month, $day, $year)
	// 	{
	// 		if( !$month || !$day || !$year ){
	// 			$error_birth = "Please select your Date of Birth";
	// 		}
	// 		return $error_birth;
	// 	}	
}

?>