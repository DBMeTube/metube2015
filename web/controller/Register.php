<?php
session_start();
include_once 'Data.php';
include_once 'UserValidator.php';
include_once 'ConnectDatabase.php';
include_once 'User.php';

/* User Registration Validation */
if( isset($_POST['submit']) ){
	$user_info = array(
		'uname' 		=> 	$_POST['uname'],	
		'phone'			=> 	$_POST['phone'],
		'email'			=> 	$_POST['email'],
		'fname'			=>	$_POST['fname'],
		'lname'			=>	$_POST['lname'],
		'pwd'			=>	$_POST['pwd'],
		'pwd_confirm'	=>	$_POST['pwd_confirm'],
		'birthday'		=>	$_POST['birthDay'],
		'month'			=>	$_POST['birth']['month'],
		'day'			=>	$_POST['birth']['day'],
		'year'			=>	$_POST['birth']['year'],
		'gender'		=>	$_POST['gender']
	);
	
	$signup_error = UserValidator::userNameValidate($user_info['uname']);
	if( !$signup_error ){
			$signup_error = UserValidator::nameValidate($user_info['lname'], $user_info['fname']);
			if( !$signup_error ){
					$signup_error = UserValidator::emailValidate($user_info['email']);
					if( !$signup_error ){
							$signup_error = UserValidator::phoneValidate($user_info['phone']);
							if( !$signup_error ){
									$signup_error = UserValidator::genderValidate($user_info['gender']);
									if( !$signup_error ){
										$signup_error = UserValidator::pwdValidate($user_info['pwd'], $user_info['pwd_confirm']);
									}
							}
					}
			}
	}
	/* Register Data goes to DB */
	if( !$signup_error ){
		User::signUp($user_info);
		echo "<meta http-equiv=\"refresh\" content=\"0; url=../home.html\">";
	}
	
}
echo "<div  align=\"center\" id='signUpResult'>". $signup_error . "</div>";

// printDataInPOST($_POST);
// printVariable($user_info);

?>