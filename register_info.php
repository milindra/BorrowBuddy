<?php
   
  
   // Retrieve data from Query String
   
 

   /*
   echo "$email\n";
   echo "$pass\n";
   echo "$confrm_pass\n";
   echo "$address\n";
   */
  /* $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "nith";
   $dbname = "borrowbuddy";
   
   //Connect to MySQL Server
   if(mysql_connect($dbhost, $dbuser, $dbpass) and mysql_select_db($dbname))
   {
      echo "connected <br>";
   }
   */
   //Select Database
   
   //query
   require "database_connect.php";

        $name =$_POST['name'];
   $email =$_POST["Email"];
   $pass =$_POST["password"];
   $confrm_pass =$_POST["confrm_password"];
   $address =$_POST["address"];
   
   if(isset($_POST['login']) and !empty($name))
   {

    if(!empty($email) and !empty($pass))
    {
      //echo "fhdfk";
      if(($pass == $confrm_pass) and !empty($address))
      {
        // echo "hjgvsjd";
     $query = "insert into main values('$name','$email','$pass','$address',0,'')";
     echo "$query";
   if(mysql_query($query))
   {
      echo "successfully entered";
   }
}
else
{
   echo "password not match <br>";
}
  
}
 

}
else
   {
      echo "sorry something wrong please try again";
   }

?>   
