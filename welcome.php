<!DOCTYPE html>
<html>
<head>
	<title>Borrow Buddy</title>
</head>
<body>
<div>

<a href="loan.php">want to take loan</a>
<?php
	session_start();
	
	//connect to database
	require "database_connect.php";
	
	$email=$_SESSION["email"];
	//echo "".$email;
	$queryForName="select * from main where email='$email';";
	$qry_name=mysql_query($queryForName) or die(mysql_error());
	$data_name=mysql_fetch_assoc($qry_name);
	echo "".$data_name['name'];	
	// Escape User Input to help prevent SQL Injection
   	$email = mysql_real_escape_string($email);

	$query="select * from loan_info order by value desc;";
	//echo $query;
	$qry_result = mysql_query($query) or die(mysql_error());

	echo "<table border='4' type='solid'>";
	while($data=mysql_fetch_assoc($qry_result))
	{
		echo "<br>";
		
		//fetch name from main table
		$tempId=$data["id"];		
		$queryForName="select * from main where id='$tempId';";
		$qry_name=mysql_query($queryForName) or die(mysql_error());		
		$data_name=mysql_fetch_assoc($qry_name);
		
		//display name id amount
		echo "<tr>";
		echo "<td><a href=''>".$data_name["name"]."</a></td><td>".$data["amount"]."</td>";
		echo "</tr>";
	}


?>
	
</div>

</body>
</html>