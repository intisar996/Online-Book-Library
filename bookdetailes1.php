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
                <br/>
                <br/>
                <hr>
 <div class="text_align_center">
	 <br>
	 
	  <?php
	//if(isset($_SESSION['p_name'])){
		$book_id = $_GET['book_id'];
		include ("connect.php");
   		
	
		$query  = "select * from    tblbbook where 	book_id ='$book_id'";
        $result=mysqli_query($con,$query);
         while($row = mysqli_fetch_assoc($result)) {
			  $book_id = $row['book_id'];
                 $book_name = $row['book_name'];
                 $book_price = $row['book_price'];
                 $book_desc = $row['book_desc'];
                 $image = $row['image'];
                  $book_writer = $row['book_writer'];
                 $language = $row['language'];
                  $quantity = $row['quantity'];

  
	
		}
		?>

	 
	 
	 
    	<form id="form1" name="form1" method="post" action="<?php echo "ordercompute.php?book_id=$book_id&&book_price=$book_price&&quantity=$quantity"; ?>" onsubmit="">
    <div class="text-start">
        <div class="row hedding m-0 pl-3 pt-0 pb-3">
           <?php echo "<font face ='Felix Titling' size ='6' color='#94313B'>".$book_name ."</font>";?>
        </div>
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
             <?php echo"<img src ='image/$image'  class='border p-3' >";?>

              </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <span><strong>Writer:<?php echo "<font face ='Felix Titling' size ='3'>".$book_writer ."</font>";?></strong></span>
                            <p class="m-0 p-0"><span><strong><?php echo "<font face ='Felix Titling' size ='3'>".$book_name ."</font>";?></strong></span>
</p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro"><?php echo "<font face ='Imprint MT Shadow' size ='4'>".$book_price ." -OMR</font>";?></p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Book Describtion:</h5>
                            <span><?php echo "<font face ='Imprint MT Shadow' size ='3' color='#94313B'>".$book_desc ."</font>";?> <hr class="m-0 pt-2 mt-2">
                        </div>
                        <div class="col-lg-12">
                            <p class="tag-section"><strong>language : </strong><?php echo "<font face ='Imprint MT Shadow' size ='4'>".$language ."</font>";?></p>
                        </div>
                        <div class="col-lg-12">
                            <h6>Quantity :<?php echo "<font face ='Imprint MT Shadow' size ='4'>".$quantity ."</font>";?> </h6>
                        </div>
                    <div class="text-center"><span class="style19">Quantity:<span class="style22">
        <input name="qty" type="number" id="qty"   size="5"   min="1" value="1" onkeypress="CheckNumeric(event);" style="width: 23%"/><input type="submit" name="Submit" value="ADD TO CART" onclick=" return empty(event);" class="about-btn scrollto" />
        
        </span></span></div>

      </div>
      </div>

                            </div>
                        </div>
                    </div>
                </div>
     </div>
                    </div>
                </div>
 </div>
 <br /><br />
 <script type ="text/javascript">
	function CheckNumeric(e)
	{
	   // Get ASCII value of key that user pressed
	   var evt = e ||window.event;
	   var key = evt.which || evt.keyCode;
	   // Was key that was pressed a numeric character (0-9)?
	   if ((key > 47 && key < 58) || key==8 )
		  return; // if so, do nothing
	   else
		  evt.preventDefault(); // discard character
	}
	
	
	
</script>


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
   Copyright<i class="fa fa-copyright"></i>:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Book Shop</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 
 
 

           
     </body>



</html>
