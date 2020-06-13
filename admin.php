<?php
	session_start();
	if (!isset($_SESSION['email'])) {
		echo "<script>window.location.href='index.php'</script>";
	}

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
  		position: absolute;
  		width: 100%;
  		top: 0;
  		left: 0;
  		height: 50px;
  		font-size: 30px;
  		font-weight: bold;
  		text-align: center;
  		color: white;
  	}
  	.bodyDiv{
  		width: 60%;
  		margin-top: 5%;
      margin-bottom: 5%;
  		padding: 2%;
  		border : 1px solid #ccc;
  	}
  	.div_head{
  		font-weight: 600;
  		font-size: 40px;
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
  </style>
</head>
<body>

  <!-- Start your project here-->  
 <div class="Nav elegant-color-dark">
 	<p >Welcome HR !</p>
 </div>
<center>
 <div class="bodyDiv">
 	<p class="div_head">Check the applications for job for following Posts.</p>
 	<div class="row" style="border: 1px solid #eee; padding: 3%;">
 		<div class="col-lg-6 post_label">Manager</div>
 		<div class="col-lg-6"><a href="showdetails.php?post=Manager"><button class="post_btn">Check</button></a></div>
 	</div>
 	 <div class="row" style="border: 1px solid #eee; padding: 3%;">
 		<div class="col-lg-6 post_label">Security Expert</div>
 		<div class="col-lg-6"><a href="showdetails.php?post=Security Expert"><button class="post_btn">Check</button></a></div>
 	</div>
 	 <div class="row" style="border: 1px solid #eee; padding: 3%;">
 		<div class="col-lg-6 post_label">Developer</div>
 		<div class="col-lg-6"><a href="showdetails.php?post=Developer"><button class="post_btn">Check</button></a></div>
 	</div>
 	 <div class="row" style="border: 1px solid #eee; padding: 3%;">
 		<div class="col-lg-6 post_label">Accountant</div>
 		<div class="col-lg-6"><a href="showdetails.php?post=Accountant"><button class="post_btn">Check</button></a></div>
 	</div>
 	 <div class="row" style="border: 1px solid #eee; padding: 3%;">
 		<div class="col-lg-6 post_label">Secretary</div>
 		<div class="col-lg-6"><a href="showdetails.php?post=Secretary"><button class="post_btn">Check</button></a></div>
 	</div>
 </div>

 <a href="logout.php"><button class="post_btn" style="margin-bottom: 5%;">Logout</button></a>
</center>
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
