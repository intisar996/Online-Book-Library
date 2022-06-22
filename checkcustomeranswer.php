<?php
	
	$mans=$_POST["ans"];
	$usernamerc=$_GET["cusername"];
	
	include ("connect.php");
	$query = "select * from  tbcustomer where cusername='$usernamerc'";
	$result = mysqli_query($con,$query);
	 while($row = mysqli_fetch_assoc($result)) {

	$anss=$row["cans"];
	$sq=$row["cseq"];
	}
	
	if ($mans==$anss)
		header("Location: newpwdcustomer.php?cusername=$usernamerc");
		
		else{

	
		echo '<script type="text/javascript">'; 
echo 'alert("Invalied Answer .. Try Again");'; 


$URL="forget.php";
echo "location.href='$URL'";
echo '</script>';

}



?>