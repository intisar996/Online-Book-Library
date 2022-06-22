<?php
	session_start();
	$usernamerc = $_SESSION['txtuser'];
	
	include ("connect.php");
	$opwd = $_POST['opwd'];
	$npwd = $_POST['npwd'];
	$nrpwd = $_POST['nrpwd'];
	
	$query1 = "select * from   tbcustomer where cusername= '$usernamerc'";
	$result1 = mysqli_query($con,$query1);
	 while($row = mysqli_fetch_assoc($result1)) {
	$password=$row["cpassword"];
	}
			
	if($password == $opwd){
			
		
		$query1 = "update tbcustomer set  cpassword='$npwd',repassword='$nrpwd'   where  cusername='$usernamerc'";
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

$URL="customerChangepassword.php";
echo "location.href='$URL'";
echo '</script>';
	
	
			
	
		
?>
