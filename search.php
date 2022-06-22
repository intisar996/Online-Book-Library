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
#rcorners1 {
  border-radius: 15px 50px 30px 5px;
  background: #E3B2B2;
  padding: 20px; 
  width: 600px;
  height: 400px; 
}


 
.auto-style1 {
	background-color: #EAAE9D;
}


 
.auto-style7 {
	background-color: #E1B8BC;
}


 
.auto-style9 {
	border-style: solid;
	border-width: 1px;
	text-align: center;
}
.auto-style10 {
	font-family: "Segoe Marker";
}


 
.auto-style13 {
	border-style: solid;
	border-width: 1px;
	text-align: center;
	color: #FFFFFF;
	background-color: #A52834;
}
.auto-style14 {
	border-style: solid;
	border-width: 1px;
	text-align: center;
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
			$username= $_SESSION['txtuser'];
	include ("connect.php");
	$qryname = "select * from  tbadmin where username='$username' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['aname'];
	
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
                <hr><br>



 <?php

$adate=date('Y/m/d');
?>


    <form   method="post" id="form2"   name="form2"  onsubmit="return validate(this);"  enctype="multipart/form-data"  action="searchcode.php">

 <table align="center" cellpadding="2" style="width: 424px; height: 134px">
			<tr>
				<td class="auto-style13" colspan="2" style="height: 10px">
				<h2 class="auto-style10">SEARCH <strong>BOOK </strong></h2>
				</td>
			</tr>
			<tr>
				<td class="auto-style9" style="height: 38px; width: 396px">
				<span class="auto-style21">Book Name</span>:&nbsp; </td>
				<td class="auto-style9" style="height: 38px; width: 190px">
				<input id="book_name" class="form-control" name="book_name" style="width: 223px; height: 38px" type="text"></td>
			</tr>
			<tr>
				<td class="auto-style9" style="height: 38px; width: 396px">
				Book Type:</td>
				<td class="auto-style9" style="height: 38px; width: 190px">

				<select id="book_type" class="form-control mb-1" name="book_type" style="width: 221px; height: 38px;">
				 <option value="Select Book Type">Select Book Type
				 </option>
				 <?php
				  include("connect.php");
				  $query = "select*from  tbbooktype";
				  $result= mysqli_query($con,$query);
				  $num   = mysqli_num_rows($result);
				  
				  while($row = mysqli_fetch_assoc($result)) {
				  $typ_id =$row["typ_id"];
				  $typ_name =$row["typ_name"];
				 
				  echo "<option value='$typ_name'>$typ_name</option>";
				  }
				  				  
		 ?>

				</select></td>
			</tr>
			<tr>
				<td class="auto-style9" style="height: 38px; width: 396px">
				Quantity:</td>
				<td class="auto-style9" style="height: 38px; width: 190px">
				<input id="quantity" class="form-control" name="quantity" style="width: 223px; height: 38px" type="text"></td>
			</tr>
			<tr>
				<td class="auto-style9" colspan="2" style="height: 48px">
				<input name="Submit" style="width: 86px; font-weight: bold; font-size: medium; height: 35px;" type="submit" value="Search" class="input btn-outline-danger" />&nbsp;&nbsp;&nbsp;
				<input name="Cancel" style="width: 86px; font-weight: bold; font-size: medium; height: 35px;" type="reset" value="Cancel"  class="input btn-outline-danger"/></td>
			</tr>
			<tr>
				<td class="auto-style14" colspan="2">
				&nbsp;</td>
			</tr>
		</table>
</form>
  <br><br><br><br><br><!-- End Services Section -->
 <br />
 <br />
 <br />
 
 
 
 <!-- Footer -->
<footer class="auto-style7">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom bg-" 
       >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span></span>
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
      Copyright<i class="fa fa-copyright"></i>:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Book Shop</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 
 
 

           
     </body>



</html>
