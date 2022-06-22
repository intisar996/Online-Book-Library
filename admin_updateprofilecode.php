 <?php
 
 include('connect.php');
   
 
 
$username=$_GET["username"];


$emailr=$_POST["email"];
$phoner=$_POST["phone"];
$addressr=$_POST["address"];



include("connect.php");


$query1= "update  tbadmin set email='$emailr',phone='$phoner',address='$addressr' where username='$username';";
mysqli_query($con,$query1);

 	echo '<script type="text/javascript">'; 
echo 'alert(" Successful Update Your Profile.. ");'; 

$URL="adminprofile.php";

echo "location.href='$URL'";
echo '</script>';

?>
