<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:login.php");
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
<meta content="" name="author">
<title>ONLINE SHOPPING BOOK</title>

<link href="style.css" rel="stylesheet" type="text/css">
<link href="bootstrap-5.1.0-dist/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="bootstrap-5.1.0-dist/glightbox/css/glightbox.min.css" rel="stylesheet">


<link href="bootstrap-5.1.0-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="bootstrap-5.1.0-dist/js/bootstrap.js" type="text/javascript"></script>
<script src="bootstrap-5.1.0-dist/js/bootstrap.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style> 

.hedding {
    font-size: 20px;
    color: #ab8181`;
}

.main-section {
    position: absolute;
    left: 50%;
    right: 50%;
    transform: translate(-50%, 5%);
}

.left-side-product-box img {
    width: 100%;
}

.left-side-product-box .sub-img img {
    margin-top: 5px;
    width: 83px;
    height: 100px;
}

.right-side-pro-detail span {
    font-size: 15px;
}

.right-side-pro-detail p {
    font-size: 25px;
    color: #a1a1a1;
}

.right-side-pro-detail .price-pro {
    color: #E45641;
}

.right-side-pro-detail .tag-section {
    font-size: 18px;
    color: #5D4C46;
}

.pro-box-section .pro-box img {
    width: 100%;
    height: 200px;
}

@media (min-width:360px) and (max-width:640px) {
    .pro-box-section .pro-box img {
        height: auto;
    }
}
.auto-style1 {
	background-color: #EAD1D3;
}
.auto-style3 {
	border-style: solid;
	border-width: 1px;
	padding: 1px 4px;
}
.auto-style4 {
	background-color: #ECECEC;
	text-align: center;
}
.auto-style5 {
	border-style: solid;
	border-width: 1px;
	padding: 1px 4px;
	background-color: #F8F5F6;
}
</style>
 <script type="text/javascript">
 
function validate()
{
  
    if (document.getElementById("cardname").value=="")
  {
	  alert("Please input a  Card Name.");
	  return false;
  }
     var number= /^[0-9]{14}$/;  
if (!(document.getElementById("cardnum").value.match(number)))  
{  
   alert(' Input Card Number  length only 14 and accept only number"');  
   return false;  
}
     var number= /^[0-9]{4}$/;  
if (!(document.getElementById("sequritycode").value.match(number)))  
{  
   alert(' Input Securitycode  length only 4 and accept only number"');  
   return false;  
}

      if (document.getElementById("dateexp").value=="")
  {
	  alert("Please input a  Card Expiry Date.");
	  return false;
  }

  return true;
   
}

</script>

<body style="background-color: #FFFFFF">

<nav class="navbar navbar-expand-lg navbar-black bg-black py-3 shadow-sm bg-transparent-black fixed-top"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none"></a>
  
    <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <h4 class="logo" style="color: #FFFFFF">BOOKS STORE</h4>
          
            <li class="nav-item dropdown megamenu">
		<a id="megamneu" href="myorder.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  font-weight-bold text-uppercase ">MY ORDERS</a></li> 
		<li class="nav-item"><a href="customerhomepage.php" class="nav-link font-weight-bold text-uppercase">BACK</a></li>
 
		<li class="nav-item"><a href="logout.php" class="nav-link font-weight-bold text-uppercase">LOGOUT</a></li>
           
         </ul>
      <div><img src="image/profile-user.png" height="25px" width="30px"><span class="auto-style3"><span class="text-white">Welcome:<?php
			$usernamerc= $_SESSION['txtuser'];
	include ("connect.php");
	$qryname = "select * from  tbcustomer where cusername='$usernamerc'  ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['cname'];
	
}
	echo $namee. "!";
	?> 
	</span><span class="auto-style1"></img></span></span></div>
</nav>

                <div class="carousel-inner" style="left: 0px; top: 0px; height: 519px">
               <div class="carousel-item active">
                <input type="number" class="form-control text-center w-100" value="1" onkeypress="CheckNumeric(event);"/>

                  <img class="d-block w-100" src="image/download.jpg" alt="slider_img" height="543" onclick=" return empty(event);"/>
                  <div class="ovarlay_slide_cont" style="left: 0; top: 135px; height: 300px; width: 61%">
                     <h2>SHOPPING BOOKS</h2>
                     <h4>WELCOME TO  BOOKS SHOP</h4>
                     <p>Today a reader, tomorrow a leader</p>
                  </div>
               </div>
                </div>
	  
	  
	  
	  <br /><br /><br /><br /><br />
	  <form method="post" action="placeorder.php" onsubmit="return validate(this);">
<div class="container mt-5 p-3 rounded cart" style="height: 670px; width: 194%; margin-top: 0px; align: center; background-color: #FFFFFF;">
    <div class="text_align_center" style="width: 1188px">
        <div class="col-md-8">
            <div class="product-details mr-2">
                <div class="d-flex flex-row align-items-center"><a href="customerhomepage.php"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></a></div>
                &nbsp;<hr>
   		<table style="width: 66%; height: 490px;" align="center">
			<td style="width: 407px"><?php
		
	$usernamerc = $_SESSION['txtuser'];
	include ("connect.php");
	$qryname = "select * from  tbcustomer where cusername='$usernamerc'";
     $resultqry=mysqli_query($con,$qryname);
     while($row = mysqli_fetch_assoc($resultqry)) {
		    $cid =$row["cid"];

	}
	

	

	
	include ("connect.php");

	
	$query1 = "select * from orders where cusername='$usernamerc' ";
    $result1=mysqli_query($con,$query1);
	$num = mysqli_num_rows( $result1);
	
	    

	
	if ($num > 0){
	$i = 0;
	$total = 0;
	echo "<br>";
	
	            echo "<table align='center' class='table table-striped'  border='1' width='50px' hight='50px'>";
                echo "<thead>";
                    echo "<tr>";
                
	
	echo "<tr>";
	echo "<th width=200  >Order ID";
	echo "<th width=200  >Book NAME";
	echo "<th width=100  >QUANTITY";
	echo "<th width=100 >PRICE";
	echo "<th width=125 >TOTAL";
    echo "<th width=125  > USERNAME";
     echo "<th width=125 >Book PICTUER";

	echo "<th width=100 colspan = 2 >OPTIONS";



     while($row = mysqli_fetch_assoc($result1)) {
		    $bid =$row["book_id"];
		    $rno =$row["order_id"];
			
			$query2 = "select * from   tblbbook where book_id ='$bid' ";
			    $result2=mysqli_query($con,$query2);

			  while($rows = mysqli_fetch_assoc($result2)) {
			$image =$rows["image"];
			$book_name =$rows["book_name"];
		    $bid =$rows["book_id"];

			$qty =$row["qty"];
			$price =$row["price"];
			$stotal =$row["subtotal"];
			
						
			echo "<tr>";

			echo "<td>$rno";
		    echo "<td align=center>$book_name";
			echo "<td align=center>$qty";
			echo "<td align=center>$price";
			echo"<td align=center>$stotal.RO";
			echo"<td align=center>$usernamerc";
echo"<td valign='top' class='media-object' align='center' width ='125'><img src ='image/$image' height =125 width =125>";


			echo "<td align=center><a href='shoppingcartEditForm.php?order_id=$rno&&book_id=$bid'><i class='fa fa-refresh' aria-hidden='true'></i></a><br>";
			echo "<td align=center><a href='deleteCart.php?order_id=$rno&&book_id=$bid&&qty=$qty'><i class='fa fa-trash' aria-hidden='true'></i></a><br>";
			
			$total = $total + $stotal;
			echo"<tr></tr>";
			
			
			
			      
			
			
			$i++;
		}}
		
		
echo"<tr>";
echo"<td colspan = 10 align=center class='table-danger'><b>Final Total =",$total.'RO';
echo"<tr>";
$_SESSION['gtotal']=$total;
$total=$_SESSION['gtotal'];
$_SESSION['resno']=$rno;
$rno=$_SESSION['resno'];



echo  "</table>";
echo  "</div>";
echo  "</div>";
echo  "</div>";
}
else{
echo "<table align='center' class='table table-striped'  style='width: 100%'>";

 echo "<thead>";
                    echo "<tr colspan='10'>";
          
            
	echo "<td width='200'  align='center' ><center>The shopping cart is empty! <br></center><br />";


	//echo "<meta http-equiv=Refresh content=2;url=mainUser.php>";
			unset($_SESSION["cart"]);
			unset($_SESSION["gtotal"]);
echo  "</table>";


}

?> </td>
			<td class="text_align_center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
			<td><div class="auto-style5" style="width: 432px; height: 382px">
                <div class="auto-style4">
                	CREDIT CARD&nbsp;
					<img alt="" height="18" src="image/card.png" width="29"></div>

                
                <div>
                <label class="credit-card-label" style="height: 33px">Name on ca</label>
					<input id="cardname" name="cardname" type="text" class="form-control credit-inputs">
				</div>
                <div><label class="credit-card-label">Card number</label><input type="text" class="form-control credit-inputs" placeholder="00000000000000" id="cardnum" name="cardnum"></div>
                <div class="row">
                    <div class="col-md-6"><label class="credit-card-label">Date</label><input type="date" class="form-control credit-inputs" placeholder="12/24" id="dateexp" name="dateexp"></div>
                    <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="3421" id="sequritycode" name="sequritycode"></div>
                </div>
                <hr class="line">
                <div class="d-flex justify-content-between information"></div>
                <div class="d-flex justify-content-between information"></div>
                <div class="d-flex justify-content-between information"></div>
				<button class="btn btn-primary btn-block d-flex justify-content-between mt-3"  type="submit"><span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span></button>
            </div>
         </div>
   </div>
   </div>
   </div>
   </div>
   </div>
  		   </table>
  		   </form>
    
</div></div></div>


<br /><br /><br /><br /><br />
</div></div></div>

</div></div></div>


<br /><br /><br /><br /><br />

    <div class="row mt-2 g-4">
 
 <div class="container"> 
 
<footer class="auto-style1">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom bg-" 
       >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
     <a href="https://ar-ar.facebook.com"><i class="fa fa-facebook"></i></a>
       <a href="https://twitter.com/"> <i class="fa fa-twitter"></i></a>
       <a href="https://google.com/"> <i class="fa fa-google"></i></a>
       <a href="https://instagram.com/"> <i class="fa fa-instagram"></i></a>
       <a href="https://linkedin.com/"> <i class="fa fa-linkedin"></i></a>
       <a href="https://github.com/"> <i class="fa fa-github"></i></a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>SHOP BOOKS
          </h6>
          <p>The electronic library "Read" is your way to facilitating the 
		  <span class="auto-style1">process</span> of delivering books to your door
            
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           SERVICE 
          </h6>
          <p>
            <a href="#!" class="text-reset">Free Delivery</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Online Payment</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Support</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Feedback</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
             <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fa fa-home me-3"></i> OMAN, Almusnah, ST 12</p>
          <p>
            <i class="fa fa-envelope me-3"></i>
            Bookshop@email.com
          </p>
          <p><i class="fa fa-phone me-3"></i> + 968 25987456</p>
          <p><i class="fa fa-print me-3"></i> + 6587412222</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
   Copyright<i class="fa fa-copyright" ></i>:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Book Shop</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 
 
 

           
     </body>



</html>
