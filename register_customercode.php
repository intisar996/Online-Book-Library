<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>
	<?php
	session_start();
?>

<body>
<strong>
<?php
	

	     
include('connect.php');
   

$cnamee  =$_POST['cname'];
$usernamerc  =$_POST['cusername'];
$cemaile  =$_POST['cemail'];
$cphonee  =$_POST['cphone'];
$cgendere  =$_POST['cgender'];
$caddresse  =$_POST['caddress'];
$cseqe  =$_POST['cseq'];
$canse  =$_POST['cans'];
$cpassworde  =$_POST['cpassword'];
$repassworde  =$_POST['repassword'];
$brithdatee  =$_POST['brithdate'];





if (isset($_POST['submit'])) {
  	$cusernamerc = $_POST['cusername'];
  	
  	$sql_u = "SELECT * FROM tbadmin WHERE username='$usernamerc'";
  	$sql_e = "SELECT * FROM tbcustomer WHERE cusername='$cusernamerc'";


  	$res_u = mysqli_query($con, $sql_u);
  	 $res_e = mysqli_query($con, $sql_e);


  	

  	if (mysqli_num_rows($res_u) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="registercustomer.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}
  	 	elseif (mysqli_num_rows($res_e) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="registercustomer.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}
  	
 
  	
  	
  	else{



  	
  	
  	
  	$servername = "localhost";
$dbname = "dbsbook";

// Create connection
$con = new mysqli($servername,"root","", $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
  	



 $sqlx="insert into tbcustomer  (cname,cusername,cemail,cphone,cgender,caddress,cseq,cans,cpassword,repassword,brithdate) values('$cnamee','$usernamerc','$cemaile','$cphonee','$cgendere','$caddresse','$cseqe','$canse','$cpassworde','$repassworde','$brithdatee')";

                                                     
if ($con->query($sqlx) === TRUE) {
 echo '<script type="text/javascript">'; 
echo 'alert(" successful register..");'; 
$URL="registercustomer.php";

echo "location.href='$URL'";
echo '</script>';
} else {
  echo "Error: " . $sqlx . "<br>" . $con->error;
}
$con->close();

}}







?>


</strong>


</body>

</html>
