<?php
	session_start();
	require_once 'dbcon.php';
	if(isset($_POST['submit'])){
		$F_name = $_POST['first_name'];
		$L_name = $_POST['last_name'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$address = $_POST['address'];
		$country = $_POST['country'];
		$mobile = $_POST['mobile'];
		$objective = $_POST['objective'];
		$experience = $_POST['experience'];
		$qualification = $_POST['qualification'];
		$skill = $_POST['skills'];
		$hobbies = $_POST['hobbies'];
		$purpose = $_POST['purpose'];
		$post = $_SESSION['post'];
	
		$query = "INSERT INTO application VALUES('','".$F_name."' , '".$L_name."' , '".$email."' , '".$city."' , '".$state."' , '".$zip."' , '".$address."' , '".$country."' , '".$mobile."' , '".$objective."' , '".$experience."' , '".$qualification."' , '".$skill."' ,'".$hobbies."' , '".$purpose."' , '".$post."') ";
		$result = mysqli_query($con, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($con), E_USER_ERROR);
		if(!$result){
			echo "query Failed";
		}
		echo "<script>window.alert('Application is Submitted'); 
				window.location.href='index.php';
		</script>";
	}
?>