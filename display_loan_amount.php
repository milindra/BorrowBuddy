<?php
      session_start();

	require "database_connect.php";
	
	$email=$_SESSION["email"];
        $queryForName="select * from main where email='$email';";
	$qry_name=mysql_query($queryForName) or die(mysql_error());
	$data_name=mysql_fetch_assoc($qry_name);
	echo "".$data_name['name']."<br>";	
	echo "id:".$data_name['id']."<br>";
	$id=$data_name['id'];
	//$value=$data_name['value'];
       $queryForName="select * from loan_info where id='$id';";
       $qry_name=mysql_query($queryForName) or die(mysql_error()); 
       $date=mysql_fetch_assoc($qry_name);
     //echo "jjfjfd";
       echo "requested loan amount:".$date['amount'];
       
       echo " "."date:".$date['date'];
        

?>
