<?php
include 'include/config.php';

if (isset($_POST['submit'])) {

//$ip =$_SERVER['REMOTE_ADDR'];
$id=mysql_real_escape_string($_POST['p_id']);
$name=mysql_real_escape_string($_POST['p_name']);
$description=mysql_real_escape_string($_POST['p_description']);
$price=mysql_real_escape_string($_POST['p_price']);
$qty=mysql_real_escape_string($_POST['qty']);
$image=mysql_real_escape_string($_POST['image']);
$date = date('m/d/Y H:i');

if ( isset($_SERVER['HTTP_CLIENT_IP']) && ! empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
}

$ip = filter_var($ip, FILTER_VALIDATE_IP);
$ip = ($ip === false) ? '0.0.0.0' : $ip;

$sub_total= $qty * $price;

$qry="INSERT into costumer_cart values(null,'$ip','','$id','$image','$name','$description','$qty','$price','$sub_total','','','$date')";
mysql_query($qry) or die(mysql_error());
echo "<script type='text/javascript'> window.location.href = 'index.php';</script>";

//var_dump($qry) or die();
}


else{
	echo "ERROR Inserting in Database";
}


?>