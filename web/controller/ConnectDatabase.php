<?php 

header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');
session_start();
include_once "Data.php";


$server = 'mysql1.cs.clemson.edu';
$username = 'MeTube_c5h6';
$password = 'metube2015';

$conn = mysql_connect($server, $username, $password) or die( mysql_error() );
$_SESSION['sql_connection'] = $conn;

$dbname = 'MeTube';
mysql_select_db($dbname, $conn) or die ( mysql_error() );	

// echo "database is connected successfully";

?>
