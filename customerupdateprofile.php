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
h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 60px;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #747d89;
	min-height: 325px;
	text-align: center;
	overflow: hidden;
}
.carousel .thumb-wrapper {
	padding: 25px 15px;
	background: #fff;
	border-radius: 6px;
	text-align: center;
	position: relative;
	box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.carousel .item .img-box {
	height: 120px;
	margin-bottom: 20px;
	width: 100%;
	position: relative;
}
.carousel .item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
	color: #fff;
	background: #7ac400;
	box-shadow: none;
}
.carousel .thumb-content .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	opacity: 0.7;
	margin-right: 5px;
}
.carousel-indicators li {	
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {	
	background: rgba(0, 0, 0, 0.6);
}

.card {
    border: 0;
    margin-bottom: 10px;
    margin-top: 100px;
    border-radius: 6px !important;
    color: rgba(0,0,0,.87);
    background: #fff;
    width: 200px;
    height:300px;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
}

.card .card-body{
    padding: .9375rem 1.875rem;
    text-align:center;
}

.card-description{
    color: #999;
}

.card.card-profile{
    text-align: center;
}

.auto-style1 {
	background-color: #EAD1D3;
}

.auto-style3 {
	border-color: #000000;
	border-width: 2px;
}
.auto-style4 {
	border: 1px solid #000000;
}
.circular {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  position: relative;
  overflow: hidden;
}
.circular img {
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.auto-style5 {
	border-style: solid;
	border-width: 1px;
	font-family: "Bookman Old Style";
	font-size: x-large;
	text-align: center;
}

.auto-style6 {
	border: 1px solid #000000;
	color: #FFFFFF;
	font-family: "Segoe Marker";
	text-align: center;
	font-size: x-large;
	background-color: #A52834;
}
.auto-style7 {
	border-style: solid;
	border-width: 1px;
	background-color: #A52834;
}
.auto-style8 {
	font-size: large;
	font-weight: bold;
}

</style>
 <script language="javascript" type="text/javascript">
 
function validate()
{


 if (document.getElementById("cemail").value=="")
  {
	  alert("Please input a Your email.");
	  return false;
  }

  var x = document.getElementById("cemail").value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("This is not a valid e-mail address.");
  return false;
  }

    var number= /^[9|7|2][0-9]{7}$/;  
if (!(document.getElementById("cphone").value.match(number)))  
{  
   alert(' phone number start with 9 or 7  or 2, length only 8"');  
   return false;  
}

 if (document.getElementById("caddress").value=="")
  {
	  alert("Please input a Your Address.");
	  return false;
  }

	 
 return true;
   
}






</script>

<body>

  <nav class="navbar navbar-expand-lg navbar-black bg-black py-3 shadow-sm bg-transparent-black fixed-top"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none"></a>
  
    <div id="navbarContent" class="collapse navbar-collapse">
		<span class="white_font">BOOKS STORE</span> 
        <ul class="navbar-nav mx-auto">
            <div class="text-start">
          </div>
          <li class="nav-item dropdown megamenu">
			<a id="megamneu" href="customerhomepage.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  font-weight-bold text-uppercase"> BACK</a>
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
                  <img class="d-block w-100" src="image/download.jpg" alt="slider_img" height="543">
                  <div class="ovarlay_slide_cont" style="left: 0; top: 135px; height: 300px; width: 61%">
                     <h2>SHOPPING BOOKS</h2>
                     <h4>WELCOME TO  BOOKS SHOP</h4>
                     <p>Today a reader, tomorrow a leader</p>
                  </div>
               </div>
                </div>
                <br/>
                <hr>
  <br>

  
 
 
 </div>
  </div>
   <br /><br />

  
    <?php

include("connect.php");

$query = "select * from tbcustomer where cusername='$usernamerc'";
$result= mysqli_query($con,$query);
$num = mysqli_num_rows($result);
 while($row = mysqli_fetch_assoc($result)) {

$cemailr=$row["cemail"];
$cphoner=$row["cphone"];
$caddressr=$row["caddress"];
}

?>
  
  
  
  
  
  
 
    <form id="form2" name="form2" method="post" action="<?php echo"customer_updateprofilecode.php?cusername=$usernamerc" ;?>" onsubmit="return validate(this);">

 <table align="center" cellpadding="2" style="width:524px; height: 100px;">
			<tr class="auto-style11">
				<td class="auto-style6" style="height: 38px; " colspan="2">
				UPDATE PROFILE</td>
			</tr>
			<tr class="auto-style11">
				<td class="auto-style4" style="height: 38px; width: 27px;">
				Customer Name:</td>
				<td class="auto-style4" style="height: 38px; ">
				<?php echo "$namee"; ?></td>
			</tr>
			<tr class="auto-style11">
				<td class="auto-style4" style="height: 38px; width: 27px;">
				UserName:</td>
				<td class="auto-style4" style="height: 38px; ">
				<?php echo "$usernamerc"; ?></td>
			</tr>
			<tr>
				<td class="auto-style4" style="height: 38px; width: 27px;">
				Email:</td>
				<td class="auto-style4" style="height: 38px; ">
             <span>
        <span class="text-white-50">
				<input id="cemail" name="cemail"  placeholder="Enter Your Email" style="width: 99%; height: 33px; font-family: 'Times New Roman', Times, serif;" class="form-control mb-1" value="<?php echo "$cemailr"; ?>" /></td>
			</tr>
			<tr>
				<td class="auto-style4" style="height: 10px; width: 27px;">
				Phone Number:</td>
				<td class="auto-style4" style="height: 10px; ">
             <span>
        <span class="text-white-50">
				<input id="cphone" name="cphone" placeholder="Enter Your Phone Number" style="width: 99%; height: 33px; font-family: 'Times New Roman', Times, serif;" class="form-control mb-1" value="<?php echo "$cphoner"; ?>" /></td>
			</tr>
			<tr class="auto-style11">
			<td class="auto-style4" style="width: 27px; height: 30px;" >
		
Address:</td>
				<td class="auto-style4" style="height: 30px;">
				
		
             <span>
        <span class="text-white-50">
				<input id="caddress" name="caddress" placeholder="Enter Your Phone Number" style="width: 99%; height: 33px; font-family: 'Times New Roman', Times, serif;" class="form-control mb-1" value="<?php echo "$caddressr"; ?>" /></td>
			</tr>
				
			<tr>
				<td class="auto-style5" colspan="2" style="height: 9px">
				<input name="submit" id="submit" style="width: 101px; font-weight: bold; font-size: large;" type="submit" value="Update" class="input btn-outline-danger" /><span class="auto-style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</span>
				<input name="Cancel" style="width: 90px; font-weight: bold; font-size: large;" type="reset" value="Cancel"  class="input btn-outline-danger"/></td>
			</tr>
							<tr>
				<td class="auto-style7" colspan="2">
				&nbsp;</td>
			</tr>
		</table>
</form>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 <br />
 <br />

  </div>
 <br /><br />
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
          <p>The electronic library "Read" is your way to facilitating the process of delivering books to your door
            
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
