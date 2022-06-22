<?php
	session_start();
	$usernamerc=$_GET["cusername"];
	$npwd = $_POST['npwd'];
	$rnpwd = $_POST['rnpwd'];
	$_SESSION['txtuser'] = $usernamerc;

	
	include ("connect.php");	
	$query1 = "update tbcustomer set cpassword='$npwd',repassword='$rnpwd'  where cusername ='$usernamerc'";
	mysqli_query($con,$query1);
	

		  echo '<script type="text/javascript">'; 
echo 'alert("YOUR PASSWORD SUCCESSFULLY CHANGED .. ");'; 

$URL="login.php";
echo "location.href='$URL'";
echo '</script>';

	
		
?>
    