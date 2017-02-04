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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .back{
            background: #0000ff;
            margin-top:5px;
            border-radius: 5px;

        }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                     <img src="abc.gif" class="img-circle img-responsive">
                    <?php
                        session_start();
                         
                        $email=$_SESSION["email"];

                        echo $email;
                    ?>
                   </a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
      
        <div id="page-content-wrapper">
            <div class="container-fluid" id="loan_info">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <button onclick="addInfo('milindra',123)">Try it</button>
                    </div>
                </div>
                <div class="row back">
                    <div class="col-lg-12">
                    sdfsdf
                    </div>
                </div>
                <div class="row back">
                    <div class="col-lg-12">
                    sdfsdf
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
  
     <script>
            function addInfo(name,amount,id,loanNo) {
                document.getElementById('loan_info').innerHTML+='<div class="row" onclick="pay('+loanNo+')"><div class="col-lg-12 back"><a href="#">'+name+'</a>   '+amount+'</div></div>';
            }
            function pay(loanNo)
            {
                window.location = "pay.php?id="+loanNo;
            }

    </script>



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

    $query="select * from loan_info where paid=0 order by value desc;";
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
        //echo "<tr>";
        //echo "<td><a href=''>".$data_name["name"]."</a></td><td>".$data["amount"]."</td>";
        //echo "</tr>";
        $name=$data_name["name"];
        $amount=$data["amount"];
        $id=$data_name["id"];
        $loanNo=$data["loan_no"];

        echo "<script>addInfo('$name',$amount,$id,$loanNo);</script>";
    }


?>

</body>

</html>