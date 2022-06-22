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
}
.auto-style4 {
	color: #FFFFFF;
	font-family: "Segoe Marker";
	font-size: x-large;
	background-color: #A52834;
}
.auto-style5 {
	border-style: solid;
	border-width: 1px;
	background-color: #A52834;
}
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-black bg-black py-3 shadow-sm bg-transparent-black fixed-top"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none"></a>
  
    <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <h4 class="logo" style="color: #FFFFFF">BOOKS STORE</h4>
          
            <li class="nav-item dropdown megamenu">
		<a id="megamneu" href="AdminHomepage.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  font-weight-bold text-uppercase ">BACK</a></li>  
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
                <br/>
                <br/>
                <hr>
 <div class="text_align_center">
	 <br>
	    	 <br /><br><br>
    <!-- Page Content -->
  <div class="container">
<?php
	//if(isset($_SESSION['cid'])){
		$bid = $_GET["book_id"];
		include ("connect.php");
	
		$query = "select * from  tblbbook where book_id='$bid'";
	    $resultuser = mysqli_query($con,$query);
	     while($row = mysqli_fetch_assoc($resultuser)) {
 
		$bid=$row["book_id"];
		$bname = $row["book_name"];
		$price = $row["book_price"];
	    $stock_a = $row["quantity"];
			}
?>
<?php
		$bid = $_GET['book_id'];
		$rno = $_GET['order_id'];
		$query3 = "select * from  orders where order_id= '$rno' ";
	    $result3 = mysqli_query($con,$query3);
		$qty =$row["qty"];	
		
	
		
		?>

    <form   method="post" id="form2"   name="form2"  onsubmit="return validate(this);"  enctype="multipart/form-data"  action="<?php echo "updateCart.php?order_id=$rno&&book_id=$bid"; ?>">
		<br />
				<table border="0" align="center" cellpadding="5" cellspacing="1" style="width: 481px; height: 225px;">
    <tr>
      <td colspan="7" class="auto-style5"><div align="center">
        <p class="auto-style4"><strong>EDIT SHOPPING CART! </strong> </p>
        </div></td>
    </tr>
    <tr>
      <td width="180" class="auto-style3"><div align="center" class="style4" style="width: 97px">Book ID</div></td>
      <td width="180" class="auto-style3"><div align="center" class="style4">Order ID</div></td>
      <td width="180" class="auto-style3"><div align="center" class="style4">Name</div></td>
      <td width="79" class="auto-style3"><div align="center" class="style4">Price</div></td>
      <td width="52" class="auto-style3"><div align="center" class="style4">Qty</div></td>
      <td style="width: 112px" class="auto-style3"><span class="style4">Amount</span></td>
      <td width="61" class="auto-style3"><div align="center" class="style4">Action</div></td>
    </tr>
    <tr>
      <td class="auto-style3"><label>
       		<div align="center" style="width: 75px"><?php echo $bid;?>	          </div>
      </label></td><td class="auto-style3"><label>
       		<div align="center"><?php echo $rno;?>	          </div>
      </label></td>

      <td class="auto-style3"><div align="center"><?php echo $bname;?></div>
      <div align="center"></div></td>
      <td class="auto-style3">
      <div align="center"><?php echo $price;?></div>
      <div align="center"></div></td>
      <td class="auto-style3"><label>
        <div align="center">
		<?php
		$bid = $_GET['book_id'];
		$rno = $_GET['order_id'];
		$query3 = "select * from orders where order_id= '$rno' ";
	    $result3 = mysqli_query($con,$query3);
	    while($row = mysqli_fetch_assoc($result3)) {
		$qty =$row["qty"];	
		}
	

		?>
          <input name="qty" type="text" id="qty" value="<?php echo $qty; ?>" size="5" class="auto-style3" /><span class="auto-style3">
		  
        </div>
      </span>
      </label><span class="auto-style3"></td>
      <td style="width: 112px" class="auto-style3">
	    <div align="center">
	      <?php
	//if(isset($_SESSION['cid'])){
		$bid = $_GET["book_id"];
		$rno = $_GET['order_id'];
		include ("connect.php");
	
		$query = "select * from  orders where order_id= '$rno'";
	    $result3 = mysqli_query($con,$query);
	   while($row = mysqli_fetch_assoc($result3)) {

		$subtotal=$row["subtotal"];
		echo $subtotal;
			}
?>
	      
	      
	     	      
	      
        	</span>
	      	     	      
        </div></td>
      <td class="auto-style3"><div align="center"><span class="style3"><label>
        <div align="center">
          <input type="submit" name="Submit" value="SAVE" class="input btn-outline-danger" style="width: 74px; font-family: 'Times New Roman', Times, serif" /><span class="auto-style3">
			</span>
        </div>
      </label></td>
    </tr>
    <tr>
      <td colspan="7" class="auto-style5">&nbsp;</td>

    </tr>
  </table>
    
  <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><strong>Click 
  </strong> <a href="yourcart.php"><strong>here</strong></a><strong> to go back to Shopping Cart! 
  </strong> </font></p>
</form>
</div>
					
       <div class="text-center">
	  <br>
       </div>

    <div class="row mt-2 g-4">
 
 <div class="container"> 
 <br />

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
