<?php

include ("connect.php");

//input data 



$username = ($_POST['txtuser']);
 
$usernamerc = ($_POST['txtuser']);






//serching for details 


$query ="Select * FROM  tbadmin where username='$username' ";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);



$query1 ="Select * FROM  tbcustomer where cusername='$usernamerc'";
$result1 = mysqli_query($con,$query1);
$count1 = mysqli_num_rows($result1);



 while($row = mysqli_fetch_assoc($result)) {
 }


if ($count>0)
{
session_start();
$adddname =$row["username"];
$_SESSION['username'] = $adddname;
header ("location:forgetpasw.php?username=$username");
} elseif ($count1>0)
{
session_start();
$adddname =$row["usernamerc"];
$_SESSION['cusername'] = $adddname;
header ("location:forgetpasw1.php?cusername=$usernamerc");}


else{

	
		echo '<script type="text/javascript">'; 
echo 'alert("Invalied ID .. Try Again");'; 


$URL="forget.php";
echo "location.href='$URL'";
echo '</script>';
}

?>