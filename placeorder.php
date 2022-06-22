<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:login.php");
}

?>



<?php
	
	

	$usernamerc  = $_SESSION['txtuser'];
      $total=$_SESSION['gtotal'];
	$trno = $_SESSION['resno'];
	$cardname=$_POST['cardname'];
$cardnum=$_POST['cardnum'];
$dateexp=$_POST['dateexp'];
$sequritycode=$_POST['sequritycode'];

	
	

	
	
	

	$timestamp = "Asia/Muscat";
	date_default_timezone_set($timestamp);
	$rdate= date('d-m-Y', time() );
	$xD   = explode("-", $rdate);
	$xDd  = $xD[0];
	$xDm  = $xD[1];
	$xDY  = $xD[2];
	$nrdate = $xDY.'-'.$xDm.'-'.$xDd;
	
	$_SESSION["rdate"]=$nrdate;
	include ("connect.php");
	
	$qryuser = "select cid from tbcustomer where cusername = '$usernamerc'";
	$resultuser = mysqli_query($con,$qryuser);


$date_now = date("Y-m-d");

if ($date_now  > $dateexp) {
   echo '<script type="text/javascript">'; 
echo 'alert("Your Credit Card Expired....Try Again  .. ");'; 

$URL="yourcart.php";
echo "location.href='$URL'";
echo '</script>';

}else{

		
				
		$status="for processing";
		$Payment = "Yes";
	
		$query2 ="insert into placeorder (cusername,orderdate,gTotal,orderstatus,Payment) values ('$usernamerc','$nrdate','$total','$status','$Payment')";
		mysqli_query($con,$query2);
		
		$query3 ="select * from placeorder order by orid desc limit 1";
	     $result1 = mysqli_query($con,$query3);
	     while($row = mysqli_fetch_assoc($result1)) {

	     $rno =$row["orid"];


$xquery = "insert into tblbill (cardname,cardnum,dateexp,sequritycode,cusername,orderid,totalamount) values('$cardname','$cardnum','$dateexp','$sequritycode','$usernamerc','$rno','$total')";
mysqli_query($con,$xquery);


	    
		
		$query4 = "select * from  orders  where cusername='$usernamerc' ";
          $result2 = mysqli_query($con,$query4);
	      $num = mysqli_num_rows( $result2);
		$i=0;
		 while($row = mysqli_fetch_assoc($result2)) {
			$trno =$row["order_id"];
			$bid =$row["book_id"];
			$qty =$row["qty"];
			$stotal =$row["subtotal"];
			$query5 ="insert into  savebookorder  values ('$trno','$bid','$rno','$qty','$stotal')";
	  		mysqli_query($con,$query5);
			$i++;
		} 
	}
		$query = "delete from   orders where cusername='$usernamerc' ";
	  		mysqli_query($con,$query);
	 
		echo"<br><br><br><br><br>";
		echo"<center>Your order has been placed!<br></center>";
				unset($_SESSION["cart"]);
		unset($_SESSION["resno"]);
		unset($_SESSION["gtotal"]);
		
	
		echo '<script type="text/javascript">'; 
echo 'alert("Payment has been made and your order has been confirmed .. ");'; 

$URL="yourcart,.php";
echo "location.href='$URL'";
echo '</script>';
}
		
?>

