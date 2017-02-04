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
        #pay{
            background: blue;
            padding: 30px;
            margin: 50px;
            text-align: center;
        }

        #payButton{
            background: white;
            text-align: center;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-brand">
            <a href="welcom2.php">BorrowBuddy</a>
        </div>
    </div>    
</nav>

<div class="container-fluid" id="pay">
   sfsdfs
</div>

<div id='payButton'>
    <form action="" method="GET">
        <input type="text" name="amount" style="background: white;">
        <input type="submit" style="background: white;">        
    </form>
</div>


<script>
    function info(loanNo,amount)
    {
        document.getElementById('pay').innerHTML=loanNo+"<br>"+amount;
    }
</script>


<?php

    session_start();
    
    //connect to database
    require "database_connect.php";
    
        $email=$_SESSION["email"];

        $loanNo=$_GET["id"];

        $tempId=$data["id"];

        $query="select * from loan_info where loan_no=$loanNo;";
        echo $query;
        $qry=mysql_query($query) or die(mysql_error());     
        $data=mysql_fetch_assoc($qry);

        $amount =$data['amount'];
        
        echo "-------------".$loanNo;

    echo "<script>info('$loanNo','$amount');</script>---##".$_GET['amount']."---amount";

        
?>


</body>
</html>