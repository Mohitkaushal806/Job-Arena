<?php

  require_once'dbcon.php';
  session_start();
  if(!isset($_SESSION['email']) && !isset($_GET['post'])){
  echo "<script>window.location.href='index.php';</script>";
  }
  $query = "SELECT * from application where post = '".$_GET['post']."'";
  $result = mysqli_query($con , $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <style>
    .Nav{
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      height: 50px;
      font-size: 30px;
      font-weight: bold;
      text-align: center;
      color: white;
    }
    .post_label{
      font-size: 30px;
      font-weight: 500;
    }
    .post_btn{
      border: none;
      height: 40px;
      width: 30%;
      background-color: #212121;
      color: white;
    }
    .post_btn:hover{
      background-color: red;
    }
    .bodyDiv{
      width: 60%;
      margin-top: 5%;
      padding: 2%;
      border : 1px solid #ccc;
    }
    .div_head{
      font-weight: 600;
      font-size: 40px;
    }
    .application{
      text-align: justify;
      padding: 4%;
      font-weight: 400;
      font-size: 25px;
    }
    .group_btn{
      margin-top: 8%;
      padding: 3%;
    }
    .group_btn button{
      border:none;
      margin:3%;
      color: white;
      background-color: #212121;
      height: 40px;
      width: 30%;
    }
    .group_btn button:hover{
      background-color: red;
    }
  </style>
</head>
<body>

  <!-- Start your project here-->  
<div class="Nav elegant-color-dark">
  <p >Welcome HR !</p>
 </div>
<center>
  <div class="bodyDiv">
    <p class="div_head">Applications for <?php echo $_GET['post']; ?></p>
    <?php
      if(isset($_GET['post']) && !isset($_GET['email'])){
      while($row=mysqli_fetch_array($result)){
      echo "
        <div class='row' style='border: 1px solid #eee; padding: 3%;'>
          <div class='col-lg-6 post_label'>".$row['F_name']." ".$row['L_name']."</div>
          <div class='col-lg-6'><a href='showdetails.php?post={$_GET['post']}&email={$row['email']}'><button class='post_btn'>Check</button></a></div>
        </div>

      ";
    }
  }else{
    $q2 = "SELECT * from application where email = '".$_GET['email']."'";
    $res2 = mysqli_query($con , $q2);
    $row = mysqli_fetch_array($res2);
    echo"
      <div class='application'>
         <p>Name : ".$row['F_name']." ".$row['L_name']."</p>
         <p>Email : ".$row['email']." </p>
         <p>City : ".$row['city']."</p>
         <p>State : ".$row['state']."</p>
         <p>ZIP : ".$row['ZIP']."</p>
         <p>Address : ".$row['address']."</p>
         <p>Country : ".$row['country']."</p>
         <p>Mobile No. : ".$row['mobile_no']."</p>
         <p>Objective : ".$row['objective']."</p>
         <p>Experience : ".$row['experience']."</p>
         <p>Qualification : ".$row['qualification']."</p>
         <p>Skills : ".$row['skills']."</p>
         <p>Hobbies : ".$row['hobbies']."</p>
         <p>Purpose : ".$row['purpose']."</p>
         <div class='group_btn'>
          <center>
              <button>Approved</button>
              <button>Rejected</button>
          </center>
         </div>
  </div>
    ";
  }


    ?>
  </div>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
