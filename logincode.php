<?php
//session start()
session_start();

//connection
include('connect.php');
$_SESSION['status']="Active";

//input
$username = mysqli_real_escape_string($con,$_POST['txtuser']);
 $pw = mysqli_real_escape_string($con,$_POST['txtpword1']); 
 
$usernamerc = mysqli_real_escape_string($con,$_POST['txtuser']);
$passw= mysqli_real_escape_string($con,$_POST['txtpword1']);


 



//Query
$query ="Select * FROM  tbadmin where username='$username'   AND password='$pw'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);



$query1 ="Select * FROM  tbcustomer where cusername='$usernamerc'   AND cpassword='$passw'";
$result1 = mysqli_query($con,$query1);
$num1 = mysqli_num_rows($result1);





//correct
	if ($num>0){
			//session variables
			$_SESSION['txtuser']=$username;
			$_SESSION['txtpword1']=$pw;
	   header('location:AdminHomepage.php');
	   
}else if($num1 > 0) {
	session_start();
		$_SESSION['txtuser']=$usernamerc;
		$_SESSION['txtpword1']=$passw;
		header("location:customerhomepage.php");
		
}else

  echo '<script type="text/javascript">'; 
echo 'alert("YOUR  ID  OR PASSWORD WRONG .. ");'; 

$URL="login.php";
echo "location.href='$URL'";
echo '</script>';

?>
