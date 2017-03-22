<?php
session_start();
$myemail="ramansudhanshu150@gmail.com";
$password="12345";
if(isset($_POST["login"]))
{
	$email=$_POST["Email"];
	$pass=$_POST["password"];
	if($myemail==$email and $pass==$password){
    echo "Congratulation You are Loged in !!";
     $_SESSION["email"]=$email;
     header("location: welcome.php");
}
else
 echo "invalid email or password";
}
else
header("location :login.php");
?>