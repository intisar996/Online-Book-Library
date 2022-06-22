<?php
	session_start();
?>
<?php
  $rno=$_GET["order_id"];
	$bid=$_GET["book_id"];
	$qty =$_POST['qty'];
	
	include ("connect.php");
	$query1 = "select * from tblbbook where book_id = '$bid'";
	$result1 = mysqli_query($con,$query1);
	while($row = mysqli_fetch_assoc($result1)) {

	$price = $row["book_price"];	
	$stock_a = $row["quantity"];	
	}
	$stotal = $qty * $price;
	$astock = $stock_a - $qty;
	
	
	if($qty <=$stock_a){
	
		$query2 = "update orders set qty='$qty',subtotal='$stotal'  where order_id='$rno';";
	    mysqli_query($con,$query2);
		header('location:yourcart.php ');
		
		$queryx = "update  tblbbook set quantity=$astock where book_id='$bid';";
	    mysqli_query($con,$queryx);
	}
	
	
	elseif ($qty<=0){
			echo '<script type="text/javascript">'; 
                echo 'alert("Quantity requested should be greater than 0! ");'; 
                $URL="shoppingcartEditForm?book_id=$bid&&order_id=$rno";
                 echo "location.href='$URL'";
                  echo '</script>';

		echo "Click <a href='shoppingcartEditForm?book_id=$bid'>HERE</a> to go back! ";
	}
	
	else if ($qty >$stock_a){
		echo '<script type="text/javascript">'; 
           echo 'alert("Quantity Requested is greater than the Stock on Hand... ! ");'; 
            $URL="shoppingcartEditForm?book_id=$bid&&	order_id=$rno";
           echo "location.href='$URL'";
            echo '</script>';

		
		
	}		


?>
