
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
  	.row{
  		margin-top: 10%;
  	}
  	.row .div1{
  	  	text-align: center;
  	}
  	.row .div1 .head{
  		font-weight: 700;
  		font-size: 60px;
  	}
  	.row .div1 .sub{
  		font-weight: 500;
  		font-size: 40px;
  	}
  	.row .div2{
  		text-align: justify;
  	}
  	.row .div2 .head{
  		font-size: 50px;
  		font-weight: 600;
  	}
  	.row .div2 .sub{
  		font-size: 30px;
  		font-weight: 400;
  	}
  	.header_map{
  		font-weight: 400;
  		font-size: 40px;
  		padding: 3%;
  		float: left;
  		text-align: center;
  		margin-bottom: 10%;
  	}
  	.header_map:hover{
  		color: red;
  	}
  	.map{
  		margin-bottom: 5%;
  		padding: 1%;
  		display: none;
  	}
  	.map iframe{
  		height: 400px;
  		width: 0px;
  		animation-name: map;
  		animation-duration: 1s;
  		animation-timing-function: ease-out;
  		animation-fill-mode: forwards;
  	}
  	@keyframes map{
  		from{width: 0;}
  		to{width: 50%;}
  	}
  </style>
</head>
<body>

  <!-- Start your project here-->  
  	<nav class="mb-1 navbar navbar-expand-lg navbar-dark elegant-color-dark" style="box-shadow: 0px 5px 0px #212121;">
  <a class="navbar-brand" href="index.php">Job-Arena</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#jobs">Apply for Job</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Contact_us.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="opportunity.html">Opportunites</a>
      </li>
    
         </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter twitter" ></i>
        </a>
      </li>
    </ul>
  </div>
</nav>
<div class="row container-fluid">
	<div class="col-lg-6 div1">
		<p class="head">Job-Arena</p>
		<p class="sub">We always ready for your creating your best future , by providing you the way into our company</p>
	</div>
	<div class="col-lg-6 div2">
		<p class="head">Contact Detials :</p>
		<ul style="list-style-type: none;" class="sub">
			<li>Mobile Number : 7014**7289</li>
			<li>E-mail : test@test.gmail</li>
			<li>Address : Pratap Nagar,Chittorgarh Rajasthan(Raj.)</li>
		</ul>
	</div>
</div>
	<div class="header_map" onclick="openmap()">
		You can also Find us on google map.
		<p>Click Here!</p>
	</div>
  	<div class="map">
		<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1zHdUscXe0b7ul5f4JNQkBspG8zzfY0ZW" width="640" height="480"></iframe>
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

  <script type="text/javascript" src="twitter.js"></script>
  <!-- Your custom scripts (optional) -->
  <script>
  	function openmap() {
  		document.querySelector('.map').style.display="block";
  	}
  </script>

</body>
</html>
