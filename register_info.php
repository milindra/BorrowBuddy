<?php
   
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
      echo "connect\n";
   }
   // Retrieve data from Query String
   
   $name =$_POST['name'];
   $email =$_POST["Email"];
   $pass =$_POST["password"];
   $confrm_pass =$_POST["confrm_password"];
   $address =$_POST["address"];

   /*
   echo "$email\n";
   echo "$pass\n";
   echo "$confrm_pass\n";
   echo "$address\n";
   */

   //query
   $query = "insert into main values('$name','$email','$pass','$address',0,'');";

   echo "$query";
   if(mysql_query($query))
   {
      echo "successfully entered";
   }
   else
   {
      echo "sorry something wrong please try again";
   }


?>   