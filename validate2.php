<?php
    session_start();
    /*
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "mpsk22";
   $dbname = "loan_app";
   
   //Connect to MySQL Server
   if(mysql_connect($dbhost, $dbuser, $dbpass))
   {
      echo "connect 1\n";
   }
   
   //Select Database
   if(mysql_select_db($dbname)) //or die(mysql_error());
   {
      echo "connect 2\n";
   }
   */

   require "database_connect.php";
   // Retrieve data from Query String
   $email=$_POST["Email"];
   $pass=$_POST["password"];
   
   $_SESSION['email']=$email;
   $_SESSION['pass']=$pass;
   echo $_SESSION['email'];
   echo $_SESSION['pass'];
   // Escape User Input to help prevent SQL Injection
   $email = mysql_real_escape_string($email);
   $pass = mysql_real_escape_string($pass);
   
   //build query
   $query = "SELECT * FROM main where email = '$email' or password='$pass';";
   
   echo "$query\n";

   //Execute query
   $qry_result = mysql_query($query) or die(mysql_error());
   
      // Insert a new row in the table for each person returned
   if($row = mysql_fetch_array($qry_result)) {
      echo "correct";
      header("location: welcom2.php");
   }
   else
   {
      echo "incorrect";
      header("location: login.php?log=1
");
   }
   
?>
