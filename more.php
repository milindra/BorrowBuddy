<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <style type="text/css">
    	.design-main{
    		background: red;
    		padding: 10px;
    		margin:10px;
    	}
    	.design{
    		background: grey;
    		padding: 10px;
    		margin:10px;
    	}
    	
    </style>

</head>

<body>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="welcom2.php">BorrowBuddy</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid" id="tab">
	<div class="row">
		<div class="col-sm-3 design-main">
			Loan_id
		</div>
		<div class="col-sm-3 design-main" >
			Interste Rate
		</div>
		<div class="col-sm-3 design-main">
			Pay ID
		</div>
	</div>
</div>


<script type="text/javascript">
	function addDiv(loan_id,interest_rate,pay_id)
	{
		document.getElementById('tab').innerHTML=document.getElementById('tab').innerHTML+
		"<div class='row'><div class='col-sm-3 design'>"+loan_id+"</div><div class='col-sm-3 design'>"+interest_rate+"</div><div class='col-sm-3 design'>"+pay_id+"<div></div>";
	}
	//addDiv(3,2,4);

</script>
<?php

require "database_connect.php";

$id=$_REQUEST['id'];
//echo "string".$id;
	$queryForName="select * from loan_info_extended where loan_id=$id;";
    $qry_name=mysql_query($queryForName) or die(mysql_error());

    while($data=mysql_fetch_assoc($qry_name))
    {
    	//echo "".$data['loan_id']."   ".$data['interest_rate']."   ".$data['pay_id']."<br>";
    	echo "<script>addDiv(".$data['loan_id'].",".$data['interest_rate'].",".$data['pay_id'].");</script>";
    }


?>

