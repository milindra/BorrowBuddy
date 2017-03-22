<?php
   session_start();

	require "database_connect.php";
	
	$email=$_SESSION["email"];
        $queryForName="select * from main where email='$email';";
	$qry_name=mysql_query($queryForName) or die(mysql_error());
	$data_name=mysql_fetch_assoc($qry_name);
	//echo "".$data_name['name']."<br>";	
	//echo "id:".$data_name['id']."<br>";
	$id=$data_name['id'];
        $paid_date=$data_name['date'];
        $paid=$data_name['paid'];
        //$paid=$data_name['id'];
	//$value=$data_name['value'];
       if($paid==0)
      {
       $curr_date=date("Y-m-d");
       $queryForName="UPDATE loan_info SET `paid`=1 WHERE id=$id;";
       $qry_name=mysql_query($queryForName) or die(mysql_error()); 
       $date=mysql_fetch_assoc($qry_name);
       
        //echo "jjfjfd";
        //echo "requested loan amount:".$date['amount'];
       echo "sucessfully paid"."<br>";
       //echo " "."date:".$date['date'];
      }
    else
    {
    echo "you allredy paid this amount";
     }  
?>
