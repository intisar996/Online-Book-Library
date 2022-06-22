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
<meta content="" name="description">
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
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-black bg-black py-3 shadow-sm bg-transparent-black fixed-top"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none"></a>
  
    <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <h4 class="logo" style="color: #FFFFFF">BOOKS STORE</h4>
          
            <li class="nav-item dropdown megamenu">
		<a id="megamneu" href="customerhomepage.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  font-weight-bold text-uppercase ">BACK</a></li>  
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
	   		<table style="width: 36%; height: 150px;" align="center">
			<td style="width: 407px" class="text_align_center"><?php
		
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
	
	            echo "<table align='center' class='container bootdey'  border='1' width='50px' hight='50px'>";
                echo "<thead>";
                    echo "<tr>";
                
	
	echo "<tr>";
	echo "<th width=200 class='table-warning' >Order ID";
    echo "<th width=200 class='table-warning' >Book ID";
	echo "<th width=200 class='table-warning' >Book NAME";
	echo "<th width=100  class='table-warning'>QUANTITY";
	echo "<th width=100  class='table-warning'>PRICE";
	echo "<th width=125  class='table-warning'>SUB TOTAL";
    echo "<th width=125  class='table-warning'>CUSTOMER USER NAME";
     echo "<th width=125 class='table-warning' >Book PICTUER";

	echo "<th width=100 colspan = 2 class='table-warning'>OPTIONS";



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
		     echo "<td align=center>$bid";
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
echo"<td colspan = 10 align=center class='table-warning'><b>Final Total =",$total.'RO';
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
	echo "<center>The shopping cart is empty! <br></center>";
	//echo "<meta http-equiv=Refresh content=2;url=mainUser.php>";
			unset($_SESSION["cart"]);
			unset($_SESSION["gtotal"]);


}

?> </td>

 <div class="text-center">
	  <br>
       <button type="button" class="about-btn scrollto"  onclick="window.location.href ='customerHomepage.php';"><i class="fa fa-arrow-circle-left"></i> Continue Shopping</button>
       <button type="button" class="about-btn scrollto" onclick="window.location.href = 'Myorder.php';">My Orders <i class="fa fa-arrow-circle-right"></i></button>
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
   Copyrightط¢آ©:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Book Shop</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 
 
 

           
     </body>



</html>
