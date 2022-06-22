 <?php
 
 include('connect.php');
   
 
 
$usernamerc=$_GET["cusername"];


$cemailr=$_POST["cemail"];
$cphoner=$_POST["cphone"];
$caddressr=$_POST["caddress"];







include("connect.php");


$query1= "update  tbcustomer set cemail='$cemailr',cphone='$cphoner',caddress='$caddressr' where cusername='$usernamerc';";
mysqli_query($con,$query1);

 	echo '<script type="text/javascript">'; 
echo 'alert(" Successful Update Your Profile.. ");'; 

$URL="Customerupdateprofile.php";

echo "location.href='$URL'";
echo '</script>';

?>
