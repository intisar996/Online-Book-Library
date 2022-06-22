<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php 

include ("connect.php");

$typ_name=$_POST['typ_name'];
$imgs=$_FILES['pic']['name'];





$xquery = "INSERT INTO   tbbooktype(typ_name,imge)   values  ('$typ_name','$imgs') ";
$result = mysqli_query($con,$xquery);
move_uploaded_file($_FILES["pic"]["tmp_name"],"image/".$_FILES["pic"]["name"]);




	echo'One record successfuly save!!!';
	echo '<script type="text/javascript">'; 
echo 'alert(" successful Add Type  .....");'; 


$URL="AdminHomepage.php";
echo "location.href='$URL'";
echo '</script>';
	

?>

</body>

</html>
