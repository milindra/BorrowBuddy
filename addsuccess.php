 <?php
	
	session_start();

	require "database_connect.php";
	
	$email=$_SESSION["email"];
     //$email="ramansudhanshu150@gmail.com"

	$queryForName="select * from main where email='$email';";
	$qry_name=mysql_query($queryForName) or die(mysql_error());
	$data_name=mysql_fetch_assoc($qry_name);
	//echo "".$data_name['name']."<br>";	
	//echo "".$data_name['id'];
	$id=$data_name['id'];
	$id2=$_GET['id2'];
	//echo
	$value=$data_name['value'];

	$amount=$_GET["amount"];
   	
   	//echo "  ".$value."    ".$amount;

       $curr_date=date("Y-m-d");
     // echo $curr_date;
        
	$queryForTaken="insert into loan_info_extended values ($id2,$amount,$id,'0');";
	//echo $queryForTaken;
	if(mysql_query($queryForTaken))
 	{
 		echo "Success fully add intersted ";
 		
 	}
 	else
 	{
 		echo "sorry enable to process please try again";
 		die(mysql_error());
 	}

 	echo '<a href="welcom2.php">go to main page</a>';

 ?>

