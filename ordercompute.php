<?php
	session_start();
	$usernamerc = $_SESSION['txtuser'];
	include ("connect.php");
	$qryname = "select * from  tbcustomer where cusername='$usernamerc'";
	$resultqry = mysqli_query($con,$qryname);
				
		$username = $_SESSION['txtuser'];
		if(!isset($_SESSION['resno']))
			$_SESSION['resno'] = str_pad($usernamerc,10,"0",STR_PAD_LEFT);
			
		$book_id    = $_GET['book_id'];
		$qty     = $_POST['qty'];
		$quantity = $_GET['quantity'];
		$price   = $_GET['book_price'];
		$resno   = $_SESSION['resno'];
		
	

			
		$ssubtotal = $qty * $price;
		$astock = $quantity - $qty;
	
	if($qty <=$quantity){

		$xquery = "insert into  orders (book_id,cusername,qty,price,subtotal) values ('$book_id','$usernamerc','$qty','$price','$ssubtotal')";
		mysqli_query($con,$xquery);
		$_SESSION['cart']++;
		
				header('location:yourcart.php');
				
	
$query1 = "update tblbbook set quantity = $astock where book_id = $book_id";
	mysqli_query($con,$query1);
	}
		if ($qty > $quantity){
	    echo "<br><br><br><br><br><br><br>";

echo '<script type="text/javascript">'; 
echo 'alert("Quantity Requested is greater than the Stock on Hand... ");'; 

$URL="bookdetailes1.php?book_id=$book_id";
echo "location.href='$URL'";
echo '</script>';

		echo "<br><br><br><br><br><br><br>";
	

	}
	else

	{
	
		header("");
	}
	

		
		
?>
	