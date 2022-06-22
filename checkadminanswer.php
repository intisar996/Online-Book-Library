<?php
	
	$mans=$_POST["ans"];
	$username=$_GET["username"];
	
	include ("connect.php");
	$query = "select * from  tbadmin where username='$username'";
	$result = mysqli_query($con,$query);
	 while($row = mysqli_fetch_assoc($result)) {

	$anss=$row["answer"];
	$sq=$row["seq"];
	}
	
	if ($mans==$anss)
		header("Location: newpwdadmin.php?username=$username");
		
		else{

	
		echo '<script type="text/javascript">'; 
echo 'alert("Invalied Answer .. Try Again");'; 


$URL="forget.php";
echo "location.href='$URL'";
echo '</script>';

}



?>