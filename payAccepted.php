 <?php
	
	session_start();

	require "database_connect.php";
	
	$email=$_SESSION["email"];
     //$email="ramansudhanshu150@gmail.com"
	$pay_id=$_REQUEST['idpay'];
	$loan_no=$_REQUEST['loan_no'];
	$queryForName="update loan_info set paid=1,paid_by=$pay_id where loan_no=$loan_no;";
	$query="UPDATE `loan_info_extended` SET `state` =1 WHERE `loan_id` =$loan_no";
	//echo $query;
	if($qry_name=mysql_query($queryForName) && $qry_name=mysql_query($query))
	{
		echo "succesfully accepted";
	}
	else
	{
		echo "there is some problem please try again";
	}

	echo "<a href='welcom2.php'>go to main page</a>";	
	


 ?>

