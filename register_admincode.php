
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
	
		$username= $_SESSION['txtuser'];
	include ("connect.php");
	$qryname = "select * from  tbadmin where username='$username' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['aname'];
	
}

	     
include('connect.php');
   

$anamee  =$_POST['aname'];
$username  =$_POST['username'];
$phonee  =$_POST['phone'];
$emaile  =$_POST['email'];
$gendere  =$_POST['gender'];
$addresse  =$_POST['address'];
$seqe  =$_POST['seq'];
$answere  =$_POST['answer'];
$passworde  =$_POST['password'];
$repassworde  =$_POST['repassword'];





if (isset($_POST['submit'])) {
  	$cusername = $_POST['username'];
  	
  	$sql_u = "SELECT * FROM tbadmin WHERE username='$username'";
  	$sql_e = "SELECT * FROM tbcustomer WHERE cusername='$cusername'";


  	$res_u = mysqli_query($con, $sql_u);
  	 $res_e = mysqli_query($con, $sql_e);


  	

  	if (mysqli_num_rows($res_u) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="registeradmin.php";

echo "location.href='$URL'";
echo '</script>';
	
  	 	
  	}
  	 	elseif (mysqli_num_rows($res_e) > 0) {
  	 echo '<script type="text/javascript">'; 
echo 'alert(" User Name Is  already taken....");'; 
$URL="registeradmin.php";

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
  	



 $sqlx="insert into tbadmin (aname,username,phone,email,gender,address,seq,answer,password,repassword) values('$anamee','$username','$phonee','$emaile','$gendere','$addresse','$seqe','$answere','$passworde','$repassworde')  ";

                                                     
if ($con->query($sqlx) === TRUE) {
 echo '<script type="text/javascript">'; 
echo 'alert(" successful register..");'; 
$URL="registeradmin.php";

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
