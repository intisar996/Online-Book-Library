<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:login.php");
}

?>
        
		<?php
		
		
			$bid = $_GET["book_id"]; 

		include ("connect.php");
	$qryname = "select * from  tblbbook where book_id='$bid' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $quantity=$rows['quantity'];
	
}


	$bid = $_GET["book_id"]; 
	$rno= $_GET["order_id"];
    $qty=$_GET['qty'];
    
	include ("connect.php");
  
  
	$query = "delete from  orders where order_id = $rno and book_id ='$bid'";
	$result1 = mysqli_query($con,$query);
	
	$stock=$qty + $quantity;
	
	$query1 = "update  tblbbook set quantity='$stock'  where  book_id ='$bid'";
	$result2= mysqli_query($con,$query1);

	
	
		$_SESSION['cart']--;
          
 echo '<script type="text/javascript">'; 
echo 'alert("One Order has been deleted.");'; 

$URL="yourcart,.php";
echo "location.href='$URL'";
echo '</script>';

	
	
	
	
?>


		
		
		
		
		
