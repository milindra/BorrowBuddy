<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "password";
   $dbname = "borrowbuddy";
   
   //Connect to MySQL Server
   if(mysql_connect($dbhost, $dbuser, $dbpass))
   {
      //echo "connect 1\n";
   }
   else
   { 
      die("error some fault in Database connection");
   }
   //Select Database
   if(mysql_select_db($dbname)) //or die(mysql_error());
   {
      //echo "connect 2\n";
   }
   else
   {
      die("error some fault in Database connection");
   }

?>   
