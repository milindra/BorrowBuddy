<?php
 session_start();

 echo $_SESSION["email"];
 echo $_SESSION["pass"];
 if(isset($_SESSION["email"]) && isset($_SESSION["pass"]))
 {
 	echo "move";
 	header("location: welcome.php");
 }
 else
 {
 	echo "no";
 }

 ?>

<style type="text/css">
th
{
	text-align: right;
}
h3
{
	text-align: center;
</style>
<body bgcolor="#6e5353">
 <table cellpadding="5" cellspacing="10" align="center">
 <h3>Login Form using session and cookies with Remember Me </h>
 	<form method="post" action="validate2.php">
 		<tr><th>Email</th><td><input type="text" name="Email"></td></tr>
 		<tr><th>Password</th><td><input type="password" name="password"></td></tr>
 		<tr><td colspan="2" align="center"><input type="checkbox" name="Remember" value="1">Remember Me</td></tr>
 		<tr><td colspan="2" align="right"><input type="submit" name="login" value="Login"></td></tr>
 	</form>
 </table>
 </body>

