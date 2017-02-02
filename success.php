 <?php
	
	session_start();

	require "database_connect.php";
	
	$email=$_SESSION["email"];

	$queryForName="select * from main where email='$email';";
	$qry_name=mysql_query($queryForName) or die(mysql_error());
	$data_name=mysql_fetch_assoc($qry_name);
	echo "".$data_name['name']."<br>";	
	echo "".$data_name['id'];
	$id=$data_name['id'];
	$value=$data_name['value'];

	$amount=$_POST["amount"];
   	
   	echo "  ".$value."    ".$amount;
	$queryForTaken="insert into loan_info values($amount,$value,$id);";

	if(mysql_query($queryForTaken))
 	{
 		echo "Success fully posted ";
 		
 	}
 	else
 	{
 		echo "sorry enable to process please try again";
 		die(mysql_error());
 	}

 ?>

