<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
	
				  			      <?php 
             include ("connect.php");
              $rno=$_GET['orid'];
              
                   $orderstatus="for Delivery";
              
              $xquery = "update  placeorder  set orderstatus='$orderstatus' where orid='$rno' ";

                $result = mysqli_query($con,$xquery);
                 echo '<script type="text/javascript">'; 
            echo 'alert("This order was successfully added to the  delivery order. ");'; 

                      $URL="adminvieworder.php";
               echo "location.href='$URL'";
                     echo '</script>';


              ?>

</body>

</html>
