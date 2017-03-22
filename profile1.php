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
        .row-pad{
            margin: 20px;
            text-align: center;
            color: lightblue;
        }
        body{
            background: lightblue;
        }
        .col-extra{
            border-radius: 40px;
            height: 400px;
            text-align: center;
            overflow: scroll;

        }
        .row-inner{
            background: grey;
            border-color: black;
            border-width: 2px;
            margin: 10px;
            border-radius: 2px;
            color:white;
        }
    </style>

</head>

<body>

 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="welcom2.php">BorrowBuddy</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
   <div class="jumbotron" style="background: black;">
       
       <div class="row">
            <div class="col-sm-3">
                <img src="get.php" id="image" class="img-circle img-responsive" width="160" height="160" align="middle">
            </div>
            <div class="col-sm-9">
                  <div class="row row-pad">
                      <div class="col-sm-6" id="name">
                          Name:Milindra
                      </div>
                      <div class="col-sm-6" id="dob">
                          DOB:22/06/1996
                      </div>
                  </div>

                  <div class="row row-pad">
                      <div class="col-sm-6" id="gender">
                          Name:Milindra
                      </div>
                      <div class="col-sm-6" id="value">
                          DOB:22/06/1996
                      </div>
                  </div>
            </div>
        </div>
   </div>

</div>

<div class="container-fluid" style="padding:10px;"">
    <div class="row" style="margin:10px;">
        <div class="col-sm-4 col-extra" style="background: red;">
            <div class="row row-extra">
                <h3>LOAN REQUEST</h3>
            </div>
            <div class="row row-inner">
                <a href="#">A</a>
            </div>
            <div class="row row-inner">
                <a href="#">B</a>
            </div>
            <div class="row row-inner">
                <a href="#">C</a>
            </div>
            <div class="row row-inner">
                <a href="#">A</a>
            </div>
            <div class="row row-inner">
                <a href="#">B</a>
            </div>
            <div class="row row-inner">
                <a href="#">C</a>
            </div>
            <div class="row row-inner">
                <a href="#">A</a>
            </div>
            <div class="row row-inner">
                <a href="#">B</a>
            </div>
            <div class="row row-inner">
                <a href="#">C</a>
            </div>
            <div class="row row-inner">
                <a href="#">A</a>
            </div>
            <div class="row row-inner">
                <a href="#">B</a>
            </div>
            <div class="row row-inner">
                <a href="#">C</a>
            </div>
            <div class="row row-inner">
                <a href="#">A</a>
            </div>
            <div class="row row-inner">
                <a href="#">B</a>
            </div>
            <div class="row row-inner">
                <a href="#">C</a>
            </div>
        </div>
        <div class="col-sm-4 col-extra" style="background: blue;">
            <div class="row">
                <h3>REQUEST ACCEPTED</h3>
            </div>
            <div class="row row-inner">
                <a href="#">A</a>
            </div>
            <div class="row row-inner">
                <a href="#">B</a>
            </div>
            <div class="row row-inner">
                <a href="#">C</a>
            </div>
        </div>
        <div class="col-sm-4 col-extra" style="background: green;">
            <div class="row">
                <h3>PAYMENT GIVEN BY YOU</h3>
            </div>
            <div class="row row-inner">
                <a href="#">A</a>
            </div>
            <div class="row row-inner">
                <a href="#">B</a>
            </div>
            <div class="row row-inner">
                <a href="#"><CENTER></CENTER></a>
            </div>
        </div>
    </div>
</div>
<script>

  function extractInfo(image,name,dob,gender,value)
  {
  //document.getElementById('image').src="abc.gif";
  document.getElementById('image').src=""+image;
  document.getElementById('name').innerHTML="Name:"+name;
  document.getElementById('dob').innerHTML="DOB:"+dob;
  document.getElementById('gender').innerHTML="Gender:"+gender;
  document.getElementById('value').innerHTML="Value:"+value;
  }
  extractInfo('get.php','milindra','22/06/1996','male','3');
</script>
<?php
    session_start();
    
    //connect to database
    require "database_connect.php";
    
    $email=$_SESSION["email"];
    //echo "".$email;
    $query="select * from main where email='$email';";
    $qry=mysql_query($query) or die(mysql_error());
    

    if($data=mysql_fetch_assoc($qry))
    {
       // echo "<script>addInfo('$name',$amount,$id,$loanNo);</script>";
    //  echo "<script>extractInfo('".."','".milindra."','22/06/1996','male','".3."');</script>";
    }


?>


?>
</body>
</html>
