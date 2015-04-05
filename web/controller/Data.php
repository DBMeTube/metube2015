<?php
session_start();

$_SESSION['bd_connection'];

$_SESSION['usr_id'];
$_SESSION['usr_name'];
$_SESSION['usr_status'];
$_SESSION['channel_id'];
$_SESSION['video_id'];
$_SESSION['video_name'];
$_SESSION['watcher_id'];

$_SESSION['homepage_url'] = "HomePage.php";
$_SESSION['logout_url'] = "Logout.php";
$_SESSION['index_url'] = "index.php";
$_SESSION['mainpage_url'] = "BrowsePage.php";

$_SESSION['video_download_table'] = "usr_download_video";
$_SESSION['video_upload_table'] = "usr_upload_video";
$_SESSION['user_table'] = "user";
$_SESSION['video_table'] = "video";


/* MISC Functions, For Debugging Purpose */
function printSQLCmd($sql_cmd){
	echo '<h3>' . "The SQL Command you type-in is: " . '</h3>';
	echo '<br/>' . var_dump($sql_cmd) . '<br/>';
}
function printDataInSession(){
	echo '<h3>' . "Data In Session Now is: " . '</h3>';
	echo '<br/>' . var_dump($_SESSION) . '<br/>';
}
function printDataInPOST(){
	echo '<h3>' . "Data In POST[] Now is: " . '</h3>';
	echo '<br/>' . var_dump($_POST) . '<br/>';
}
function printDataInGET(){
	echo '<h3>' . "Data In GET[] Now is: " . '</h3>';
	echo '<br/>' . var_dump($_GET) . '<br/>';
}
function printJsonMsg($json_message){
	//$json_string = json_encode($json_message, JSON_PRETTY_PRINT);
	echo '<h3>' . "JSON Message is: " . '</h3>';
	echo '<br/>' . var_dump($json_message) . '<br/>';
}
function printArrayMsg($array_message){
	echo '<h3>' . "Array Message is: " . '</h3>';
	echo '<br/>' . var_dump($array_message) . '<br/>';
}
function printVariable($var){
	echo '<h3>' . "Variable is: " . '</h3>';
	echo '<br/>' . var_dump($var) . '<br/>';	
}

?>