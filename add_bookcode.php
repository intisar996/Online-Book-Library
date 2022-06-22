<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

	<?php
	session_start();
	$username= $_SESSION['txtuser'];
	include ("connect.php");
	$qryname = "select * from  tbadmin where username='$username' ";
	$result1 = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result1)) 
	{ $aid=$rows['aid'];
	

		
	     
include('connect.php');
$book_name  =$_POST['book_name'];
$book_price =$_POST['book_price'];
$book_type  =$_POST['book_type'];
$img=$_FILES['pic']['name'];
$datepp=$_POST['datepp'];
$quantity=$_POST['quantity'];
$book_desc=$_POST['book_desc'];
$book_writer=$_POST['book_writer'];
$language=$_POST['language'];





$xquery = "INSERT INTO  tblbbook  (book_name,book_price,book_type,image,date_post,quantity,book_desc,book_writer,language,aid) VALUES ('$book_name','$book_price','$book_type','$img','$datepp','$quantity','$book_desc','$book_writer','$language','$aid')";

$result = mysqli_query($con,$xquery);

move_uploaded_file($_FILES["pic"]["tmp_name"],"image/".$_FILES["pic"]["name"]);

}

echo'One record successfuly save!!!';
	echo '<script type="text/javascript">'; 
echo 'alert("The Book Successful Add.. ");'; 


$URL="addbook.php";
echo "location.href='$URL'";
echo '</script>';







?>








</body>

</html>
