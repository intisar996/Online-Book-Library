<?php
	session_start();
	$username=$_GET["username"];
	$npwd = $_POST['npwd'];
	$rnpwd = $_POST['rnpwd'];
	$_SESSION['txtuser'] = $username;

	
	include ("connect.php");	
	$query1 = "update tbadmin set password='$npwd',repassword='$rnpwd'  where username ='$username'";
	mysqli_query($con,$query1);
	

		  echo '<script type="text/javascript">'; 
echo 'alert("YOUR PASSWORD SUCCESSFULLY CHANGED .. ");'; 

$URL="login.php";
echo "location.href='$URL'";
echo '</script>';

	
		
?>
    