<?php
$con = new mysqli("localhost","root","","db_system");

	
	if(isset($_POST['submit'])){
	$lastName=$_POST['lname'];
	$firstName=$_POST['fname'];
	$middleName=$_POST['mname'];
	$gender=$_POST['gender'];
	$birthday=$_POST['bday'];
	$aGe=$_POST['age'];
	$contactNo=$_POST['contact'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$uname=$_POST['user'];
	$brgy=$_POST['brgy'];
	$pass2=$_POST['password2'];
	$city=$_POST['city'];
	$country=$_POST['country'];
	$Postal=$_POST['postal'];

	
	
$sql_u = "SELECT * FROM tbl_customers WHERE Username='$uname'";
$sql_e = "SELECT * FROM tbl_customers WHERE Email='$email'";
$res_u = mysqli_query($con, $sql_u) or die(mysqli_error($con));
$res_e = mysqli_query($con, $sql_e) or die(mysqli_error($con));
$sql ="insert into tbl_customers(CUSTOMER_ID,Lastname, Firstname, Middlename,gender, Birthdate,Age, Contact_Number, Email, Password, Username,Address,City,Country,Postal,about) values('','$lastName','$firstName','$middleName','$gender','$birthday','$aGe','$contactNo','$email','$pass','$uname','$brgy','$city','$country','$Postal','')"; 	
	
	if($pass=$_POST['password'] != $pass2=$_POST['password2']){
		$error_pass="Password not match";
	}
	elseif(mysqli_num_rows($res_u)>0)
	{
		$name_error="Your username is already taken";
		
	}	elseif(mysqli_num_rows($res_e)>0){
		$email_error="Your Email is already taken";
		
	}else{
		$result = mysqli_query($con,$sql) or die (mysqli_error($con));
				echo '<script>alert("Successfully Registered")</script>';
					echo '<script>window.location="CustomerLoginRevised.php"</script>';
	exit();
	}}
?>