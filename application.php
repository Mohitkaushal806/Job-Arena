<?php
  session_start();
  $_SESSION['post'] = $_GET['post'];
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
  <style type="text/css">
    .head_div{
      text-align: center;
      font-size: 50px;
      font-weight: 700;
    }
    .form_class{
      width: 90%;
      border: 1px solid #ccc;
      padding :5%;
    }
  </style>

</head>
<body>

  <!-- Start your project here-->  
  <div class="head_div">
  <p>Fill Application for <?php echo $_SESSION['post']; ?> post</p>
</div>
<center>
  <div class="form_class">
    <form class="needs-validation" novalidate action="submit_app.php" method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="text" class="form-control" name="first_name" id="validationTooltip01" placeholder="First name" 
        required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Last name</label>
      <input type="text" class="form-control" id="validationTooltip02" name="last_name" placeholder="Last name"
        required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" name="email" id="validationTooltipUsername" placeholder="Username"
          aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">City</label>
      <input type="text" class="form-control" name="city" id="validationTooltip03" placeholder="City" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">State</label>
      <input type="text" class="form-control" name="state" id="validationTooltip04" placeholder="State" required>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Zip</label>
      <input type="text" class="form-control" name="zip" id="validationTooltip05" placeholder="Zip" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Address</label>
      <input type="text" class="form-control" name="address" id="validationTooltip03" placeholder="Address" required>
      <div class="invalid-tooltip">
        Please provide a valid Address.
      </div>
    </div>
      <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Country</label>
      <input type="text" class="form-control" name="country" id="validationTooltip04" placeholder="Country" required>
      <div class="invalid-tooltip">
        Please provide a valid Country.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Mobile No.</label>
      <input type="text" class="form-control" name="mobile" id="validationTooltip05" placeholder="Mobile No." required>
      <div class="invalid-tooltip">
        Please provide a valid Mobile No.
      </div>
    </div>
  </div>
  <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5">Objective</label>
  <textarea class="form-control" name="objective" id="exampleFormControlTextarea5" rows="3"></textarea>
</div>
  <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5">Experience in this field</label>
  <textarea class="form-control" name="experience" id="exampleFormControlTextarea5" rows="3"></textarea>
</div>


<select class="browser-default custom-select" name="qualification">
  <option selected>Qualification</option>
  <option value="Graduated">Graduate</option>
  <option value="12th pass">12th pass</option>
  <option value="10th pass">10th pass</option>
</select>

 <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5">Skills</label>
  <textarea class="form-control" id="exampleFormControlTextarea5" name="skills"  rows="3"></textarea>
</div>
  <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5">Hobbies</label>
  <textarea class="form-control" id="exampleFormControlTextarea5"  name="hobbies" rows="3"></textarea>
</div>

 <div class="form-group green-border-focus">
  <label for="exampleFormControlTextarea5">Why You Want to Join us</label>
  <textarea class="form-control" id="exampleFormControlTextarea5" name="purpose"  rows="3"></textarea>
</div>
 <div class="form-group">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="invalidCheck12" required>
      <label class="custom-control-label" for="invalidCheck12">You Have the Specified Requirements</label>
    </div>
  </div>
  <button class="btn btn-dark btn-sm" name="submit" type="submit" style="height: 40px;">Submit form</button>
</form>
  </div>
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
