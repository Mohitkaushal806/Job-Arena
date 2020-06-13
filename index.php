<?php
session_start();
require_once 'dbcon.php';
require ("vendor/autoload.php");
//Step 1: Enter you google account credentials
$g_client = new Google_Client();
 $SCOPES = array(
      // Google_Service_Gmail::MAIL_GOOGLE_COM,
      'email',
      'profile'
  );
$g_client->setClientId("Your client id");
$g_client->setClientSecret("your client secret");
$g_client->setRedirectUri("http://localhost/websites/index.php");
$g_client->setScopes($SCOPES);
//Step 2 : Create the url
$auth_url = $g_client->createAuthUrl();
//Step 3 : Get the authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;
//Step 4: Get access token
if(isset($code)) {
    try {
        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);
    }catch (Exception $e){
        
    }
    try {
        $pay_load = $g_client->verifyIdToken();
        
    }catch (Exception $e) {

    }
} else{
    $pay_load = null;
}
if(isset($pay_load)){
    $_SESSION['email'] = $pay_load['email'];
    $query = "SELECT * from user where username= '".$_SESSION['email']."' ";
    $result = mysqli_query($con , $query);
    $row = mysqli_num_rows($result);
    if($row > 0){
    echo "<script>window.location.href='admin.php'</script>";
  }else{
  echo " <script>window.alert('Sorry ! You are not an HR . So, not allowed HERE')</script>";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Job Arena</title>
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
    .slides{
      z-index: -1;
      height: 700px;
      width: 100%;
    }
    .Contact_us{
      margin-top: 5%;
    }
    .footer{
      background-color: #212121;
      color: white;
      text-align: center;
      font-weight: 800;
      position: relative;
      bottom: 0;
      padding: 3%;
      margin-top: 5%;
      font-size: 30px;
    }
    .contact_btn{
      border:none;
      width: 30%;
      height: 40px;
      margin-top: 9%;
    }
    .slide_1 , .slide_2 , .slide_3{
      position: absolute;
      height: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      width: 100%;
      text-align: center;
      padding-top: 10%;
      color: white;
    }
    .head{
      font-size: 50px;
      font-weight: 700;
      text-shadow: 2px 3px 5px black;
    }
    .sub{
      font-weight: 500;
      font-size: 30px;
      text-shadow: 2px 3px 5px black;
    }
    .job_head{
      font-size: 40px;
      font-weight: 600;
    }
    .sub_job{
      margin-top: 4%;
      margin-left: 3%;
      font-size: 30px;
    }
    .req{
      margin-left: 3%;
      font-size: 30px;
      margin-bottom: 5%;
    }
    .slide_1{
      background-image: url('img/slide1.jpg');
    }
    .slide_2{
      background-image: url('img/slide3.jpg');
    }
    .slide_3{
      background-image: url('img/slide4.jpg');
    }
    .job_1 , .job_2 , .job_3 , .job_4 , .job_5{
      width: 95%;
      height: 300px;
      margin-bottom: 5%;
      text-align: left;
    }
    .job_1{
      background-image: url(img/admin_parallax.jpg);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .job_2{
      background-image: url(img/about_parallax.jpg);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .job_3{
      background-image: url(img/rings.jpg);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .job_4{
      background-image: url(img/certificate_issued.jpg);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .job_btn{
      border: none;
      height: 40px;
      width: 20%;
      margin-top: 5%;
    }
    .job_btn:hover , .contact_btn:hover{
      background-color: red;
    }
    .job_5{
      background-image: url(img/payment.jpg);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .heading_job{
      text-align: center;
      font-size: 60px;
      color: white;
      font-weight: 500;
      text-shadow: 3px 3px 5px black;
    }
    .head_div{
      margin-top: 5%;
      padding: 3%;
    }
    .heading{
      text-align: center;
      font-size: 60px;
      font-weight: 700;
    }
    .sub_head{
      font-size: 30px;
    }
  </style>
</head>
<body>

  <!-- Start your project here--> 



<nav class="mb-1 navbar navbar-expand-lg navbar-dark elegant-color-dark" style="box-shadow: 0px 5px 0px #212121;">
  <a class="navbar-brand" href="#">Job-Arena</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#jobs">Apply for Job</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Contact_us.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="opportunity.html">Opportunites</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $auth_url;?>">HR Login</a>
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

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
  <div class="carousel-inner slides">
    <div class="carousel-item active slide_1" >
      <p class="head">Welcome to Job Arena</p>
      <p class="sub">Start Your Career with us . Join Us according to your capabilites .</p>
    </div>
    <div class="carousel-item slide_2">
      <p class="head">Apply For Job</p>
      <p class="sub">You can easily apply by filling application form according to your skills and qualifications .</p>
    </div>
    <div class="carousel-item slide_3">
      <p class="head">Oppotunities</p>
      <p class="sub class="sub"">Here ,  we have alots of opportunities for you , according to your post in our company .</p>
    </div>
  </div>
</div> 
  <div class="head_div">
    <h3 class="heading">Job-Arena</h3>
    <p class="sub_head">We are offering you an online plattform to apply in our reputative company for Job , we have certain Vaccancies in felids that mentioned below . You have to Just fill the application form and submit it , then our members check your application and if you are elligible then we contact with you for further process .</p>
  </div>
<div id="jobs">
  <hr style="border: 1px solid black ; background-color: black;">
  <h3 style="text-align: center;" class="job_head">Manager</h3>
  <p class="sub_job">Requirements for this post is :</p>
  <ul class="req">
    <li>Bachelor's Degree in Business, Management, or related field.</li>
    <li>More education or experience may be preferred or required.</li>
    <li>Strong understanding of business management, financial, and leadership principles.</li>
    <li>Excellent communication, interpersonal, leadership, coaching, and conflict resolution skills.</li>
  </ul>
  <center>
  <div class="job_1">
  <p class="heading_job">Manager Post</p>
  <center><a href="application.php?post=Manager"><button class="job_btn" >Apply Now</button></a></center>
  </div>
</center>

<h3 style="text-align: center;" class="job_head">Security Expert</h3>
  <p class="sub_job">Requirements for this post is :</p>
  <ul class="req">
    <li>Proven experience as a Computer Security Specialist.</li>
    <li>Programming skills are preferred (e.g. knowledge of C++, PHP languages).</li>
    <li>Familiarity with security frameworks (e.g. NIST Cybersecurity framework) and risk management methodologies.</li>
    <li>Knowledge of patch management, firewalls and intrusion detection/prevention systems (e.g. TippingPoint).</li>

  </ul>
<center>
<div class="job_2">
  <p class="heading_job">Security Expert</p>  
  <center><a href="application.php?post=Security Expert"><button class="job_btn" >Apply Now</button></a></center>
</div>
</center>



<h3 style="text-align: center;" class="job_head">Developer</h3>
  <p class="sub_job">Requirements for this post is :</p>
  <ul class="req">
    <li>Bachelor's degree in computer science or related degree.</li>
    <li>Knowledge of the software development life-cycle.</li>
    <li>The desire to work in fast-paced environment.</li>
    <li>Ability to develop unit testing of code components or complete applications.</li>
    <li>Creativity is always a plus.</li>
  </ul>
<center>
<div class="job_3">
  <p class="heading_job">Developer</p>
  <center><a href="application.php?post=Developer"><button class="job_btn">Apply Now</button></a></center>
</div>
</center>


<h3 style="text-align: center;" class="job_head">Accountant</h3>
  <p class="sub_job">Requirements for this post is :</p>
  <ul class="req">
    <li>Prior experience in the areas of accounts / cost accounts.</li>
    <li>Expertise on work on accounting software computer.</li>
  </ul>
<center>
  <div class="job_4">
  <p class="heading_job">Accountant</p>
  <center><a href="application.php?post=Accountant"><button class="job_btn">Apply Now</button></a></center>
</div>
</center>


<h3 style="text-align: center;" class="job_head">Secreatary</h3>
  <p class="sub_job">Requirements for this post is :</p>
  <ul class="req">
    <li>Good communication, customer service and relationship-building skills.</li>
    <li>Teamworking skills.</li>
    <li>Organisation and time management skills.</li>
    <li>Attention to detail.</li>
    <li>Negotiation skills.</li>
    <li>Assertiveness.</li>
    <li>Flexibility.</li>
    <li>Tact, discretion and diplomacy.</li>
    <li>The ability to be proactive and use your initiative: to see what needs doing and to do it.</li>
    <li>The ability to use standard software packages (eg Microsoft Office) and to learn bespoke packages if required.</li>
  </ul>
<center>
<div class="job_5">
  <p class="heading_job">Secretary</p>
  <center><a href="application.php?post=Secretary"><button class="job_btn">Apply Now</button></a></center>
</div>
</center>

</div>

<hr style="border: 2px solid black; background-color: black;">

<div class="Contact_us row container-fluid" id="Contact">
  <div class="col-lg-6">
    <h3 class="job_head" style="text-align: center;">Contact Us :</h3>
    <p class="sub_job">We are always available for you .kindly mail us and call us , find details by just one click .</p>
  </div>
  <div class="col-lg-6">
    <center><a href="Contact_us.php"><button class="contact_btn">Click Here</button></a></center>
  </div>
</div>

<div class="footer">
  <p class="footer-head">@ Job-Arena 2020</p>
</div>

<!--/.Navbar -->
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
  <script type="text/javascript" src="twitter.js"></script>

</body>
</html>
