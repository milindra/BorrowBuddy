<?php
session_start();
mysql_connect("localhost","root","nith");
mysql_select_db("borrowbuddy");

$email=$_SESSION['email'];
//echo $email;
$qry="Select * from main where email='$email';";
$result=mysql_query($qry);

if($data=mysql_fetch_assoc($result))
{	header("content-type: image/jpg");

	echo "".$data['image']."";
}
//echo "s";
?>
