<?php
 include 'include/config.php';
 
 if (isset($_POST['submit'])) {

 	$id=$_POST['del_id'];

$query="DELETE from costumer_cart where p_id=$id ";
$result=mysql_query($query) or die(mysql_error());

//var_dump($result)or die();

if ($result) {
echo "<script type='text/javascript'>alert('Item successfully deleted'); window.location.href = 'checkout.php';</script>";

}
else{
 	echo "There was an error";
 }

}

?>