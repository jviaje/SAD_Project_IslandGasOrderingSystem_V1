<?php
session_start();
unset($_SESSION['username']);
header ("location:LandingPage.html"); 
/*<?php 
session_start();
if($_SESSION[]'email'){
echo "Welcome user" .$_SESSION["email"];
}else{
	header("location:CustomerLogin.html");
}
?>

for page
*/
?>