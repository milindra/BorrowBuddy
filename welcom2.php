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
table {
    border-collapse: collapse;
    width: 100%;
	
	margin-top: 0px;
}

th{
font-family: "Comic Sans MS";
background-color: #666666;
margin-top: 50px;
 font-style: bold;

border-radius: 100px;
font-size: 27px;

}

 td {
 font-family: "Consolas";
    padding: 10px;	
    text-align: center;
    border-bottom: 4px solid #ddd;
}

tr:hover{background-color:#f5f5f5}

.e a:link, a:visited {
    background-color: #999999;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius: 15px;
	margin-left:50px;
	margin-top:20px;
}


.e a:hover, a:active {
    background-color: #666666;
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

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Borrow Buddy
                    </a>
                </li>
                <li>

                    <a href="profile.php" style"padding:15">
		
			<img src="get.php" class="img-circle img-responsive" width=200 height=200>'
                    <?php
                        session_start();
                         
                        $email=$_SESSION["email"];

                        echo $email;
                    ?>
                   </a>
                </li>
                <li>
                    <a href="loan.php">Want money then click here</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
      
        <div id="page-content-wrapper">
            <div class="container-fluid" id="loan_info">
              <!--      <tr class="row">
			    <td class="col-lg-12">Lois</td>
			    <td>12</td>
			    <td><p class= "e"><a href ="www.google.com">More</a><a href= " ">Add
			      
			      </a><a href= "k">Profile</a></p></td>
			  </tr>
                -->   
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
         
		
		document.getElementById('loan_info').innerHTML+='<tr><td>name: '+name+'</td><td>&nbsp;&nbsp;&nbsp;&nbsp;amount: '+amount+'</td><td>&nbsp;&nbsp;&nbsp;&nbsp;loan Id: '+id+' <p class= "e"><a href ="more.php?id='+id+'">More</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href= "add.php?id='+loanNo+'" >Add&nbsp;&nbsp;&nbsp;&nbsp;</a></td></tr>';
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
