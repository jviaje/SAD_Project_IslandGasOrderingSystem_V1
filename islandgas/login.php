<?php 
 
session_start();
$con = new mysqli("localhost","root","","db_system");
if(isset ($_POST['submit'])){
  $emailid = $_POST["username"];
  $password = $_POST["password"];
  
  $sql = "select * from tbl_customers where Username = '".$emailid."' AND Password = '".$password."' ";
  $result = $con->query($sql);
  
  if($result->num_rows > 0 ){ 
    $_SESSION['username'] = $emailid ;
    header("location:UserHomeRevised.php");
    die;
  }else{ 
	  $error= '<script type="text/javascript"> alert("invalid username or password")</script>';
  }
}




/*
 $user=$_POST['username'];
 $password= $_POST['password'];

//database connection
	$con = new mysqli("localhost","root","","db_system");
	//
		$stmt=$con->prepare("select * from tbl_customers where Username =?");
		$stmt->bind_param("s",$user); //finding username
		$stmt->execute();
		$stmt_result =$stmt->get_result();
		if($stmt_result->num_rows > 0){ //checking result of username
			$data=$stmt_result->fetch_assoc();
			if($data['Password']===$password){//checking password if mathch
			header("Location:UserHome.php");
			
			die;
			}
else{ header("Location:CustomerLogin.php");
	echo "<script type='text/javascript'>alert('Invalid Usrename or
    Password!');
document.location='CustomerLogin.php'</script>";
		
			}
		}
else{header("Location:CustomerLogin.php");
			echo "<script type='text/javascript'>alert('Invalid Usrename or
    Password!');
document.location='CustomerLogin.php'</script>";

		}


*/
 
?>