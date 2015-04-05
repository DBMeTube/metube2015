<?php
/* This class will handle all basic user behavior, like login, logout, signup, etc */
/* Necessary data should stores into $_SESSION[], so other pages can use */

session_start();

include_once 'Data.php';
include_once 'ConnectDatabase.php';

final class User
{
	private function __construct() { }
	
	public static function loginByUsrname($usr_name)
	{
		
		
	}
	public static function loginByEmail($email)
	{
		
		
	} 
	public static function signUp($user_info)
	{
		$uname = $user_info['uname'];	$email = $user_info['email'];		$password = $user_info['pwd'];
		$lname = $user_info['lname'];	$fname = $user_info['fname'];
		$phone = $user_info['phone'];	$birthday = $user_info['birthday'];	$gender = $user_info['gender'];
		
		$query = "INSERT INTO " .
				$_SESSION['user_table'] .
				" (username, fname, lname, email, password, birthday, gender, phone) VALUES( " . 
				"'$uname', '$fname', '$lname', '$email', '$password', '$birthday', '$gender', '$phone'" . 
				")";
		
		$data = mysql_query($query) or die( mysql_error() );
		
	} 
	
}
?>
