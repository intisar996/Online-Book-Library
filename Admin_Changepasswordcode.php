<?php
	session_start();
	$username = $_SESSION['txtuser'];
	
	include ("connect.php");
	$opwd = $_POST['opwd'];
	$npwd = $_POST['npwd'];
	$nrpwd = $_POST['nrpwd'];
	
	$query1 = "select * from   tbadmin where username= '$username'";
	$result1 = mysqli_query($con,$query1);
	 while($row = mysqli_fetch_assoc($result1)) {
	$password=$row["password"];
	}
			
	if($password == $opwd){
			
		
		$query1 = "update tbadmin set  password='$npwd',repassword='$nrpwd'   where  username='$username'";
		mysqli_query($con,$query1);
		
				
		
		 echo '<script type="text/javascript">'; 
echo 'alert("YOUR PASSWORD successfully changed.. ");'; 

$URL="logout.php";
echo "location.href='$URL'";
echo '</script>';
	
		
	}
			
	else
				 echo '<script type="text/javascript">'; 
echo 'alert("YOUR PASSWORD Not changed .. Try again ");'; 

$URL="adminChangepassword.php";
echo "location.href='$URL'";
echo '</script>';
	
	
			
	
		
?>
