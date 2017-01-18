

<?php
//Start session
session_start();
 
//Include database connection details
require_once('include/config.php');
 
//Array to store validation errors
$errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}
 
//Sanitize the POST values
$username = clean($_POST['username']);
$password = clean($_POST['password']);
 
//Input Validations
if($username == '') {
$errmsg_arr[] = 'Username missing';
$errflag = true;
}
if($password == '') {
$errmsg_arr[] = 'Password missing';
$errflag = true;
}
 
//If there are input validations, redirect back to the login form
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: login.php");
exit();
}
 
//Create query
$qry="SELECT * FROM member WHERE username='$username' AND password='".md5($_POST['password'])."'";
$result=mysql_query($qry) or die(mysql_error());
 
//Check whether the query was successful or not
if($result) {
if(mysql_num_rows($result) > 0) {
		
		if ( isset($_SERVER['HTTP_CLIENT_IP']) && ! empty($_SERVER['HTTP_CLIENT_IP'])) {
    		$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
    		$ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
		}

			$ip = filter_var($ip, FILTER_VALIDATE_IP);
			$ip = ($ip === false) ? '0.0.0.0' : $ip;

		$update="UPDATE member set sess_ip='$ip'";
		mysql_query($update)or die(mysql_error());

//Login Successful
session_regenerate_id();
$member = mysql_fetch_assoc($result);
$_SESSION['SESS_MEMBER_IP_ADD'] = $member['sess_ip'];
$_SESSION['SESS_MEMBER_ID'] = $member['id'];
$_SESSION['SESS_FIRST_NAME'] = $member['fname'];
$_SESSION['SESS_LAST_NAME'] = $member['lname'];
$_SESSION['user_log']=$_SESSION['SESS_FIRST_NAME'].' '.$_SESSION['SESS_LAST_NAME'];
$user_ip=$_SESSION['SESS_MEMBER_IP_ADD'];
$user_log=$_SESSION['user_log'];

		$update1="UPDATE costumer_cart set sess_user='$user_log' where c_ip_add='$ip'";
		mysql_query($update1)or die(mysql_error());


session_write_close();
echo "<script type='text/javascript'>alert('Welcome ". $_SESSION['user_log'] . "'); window.location.href = 'user/user_cart.php';</script>";
exit();
}else {
//Login failed

$errmsg_arr = 'user name and password not found';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
echo "<script type='text/javascript'>alert('Error ". $_SESSION['ERRMSG_ARR'] . "'); window.location.href = 'login.php';</script>";
exit();
}
}
}else {
die("Query failed");
}
?>