<?php
 
 include('connect.php');
    
 	session_start();

 		$username= $_SESSION['txtuser'];
	include ("connect.php");
	$qryname = "select * from  tbadmin where username='$username' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ 
	$aid=$rows['aid'];
	


 
 $book_id=$_GET['book_id'];


$book_namer=$_POST["book_name"];
$book_pricer=$_POST["book_price"];
$book_typer=$_POST["book_type"];
$img=$_POST["pic"];
$datepp=$_POST['datepp'];
$quantityr=$_POST["quantity"];
$book_descr=$_POST["book_desc"];
$book_writerr=$_POST["book_writer"];
$languager=$_POST["language"];




include("connect.php");

if($img != "")
{
$query= "update  tblbbook set book_name='$book_namer',book_price='$book_pricer',book_type='$book_typer',image='$img',date_post='$datepp',quantity='$quantityr',book_desc='$book_descr',book_writer='$book_writerr',language='$languager' where book_id='$book_id'";
mysqli_query($con,$query);
} else {

$query2= "update  tblbbook set book_name='$book_namer',book_price='$book_pricer',book_type='$book_typer',date_post='$datepp',quantity='$quantityr',book_desc='$book_descr',book_writer='$book_writerr',language='$languager' where book_id='$book_id'";mysqli_query($con,$query2);

}}




 	echo '<script type="text/javascript">'; 
echo 'alert(" Successful Update Book.. ");'; 

$URL="bookdetailes2.php?book_id=$book_id";

echo "location.href='$URL'";
echo '</script>';


?>
