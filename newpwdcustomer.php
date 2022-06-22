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


 
.auto-style7 {
	background-color: #E1B8BC;
}


 
.auto-style11 {
	text-align: center;
	border-style: solid;
	border-width: 1px;
	background-color: #A52834;
	color: #FFFFFF;
	font-family: "Segoe Marker";
	font-size: x-large;
}

.modal-login .avatar img {
	width: 100%;
}
 
.auto-style12 {
	border-style: solid;
	border-width: 1px;
	background-color: #A52834;
}
.auto-style13 {
	border-style: solid;
	border-width: 1px;
	text-align: center;
}
.auto-style14 {
	border-style: solid;
	border-width: 1px;
}
 
</style>
     <script type="text/javascript">

function validate()
{


if (document.getElementById("npwd").value.length<8)  
{  
   alert('Please enter a new password, length only 8 and accept number and letters"');  
   return false;  
}

if (document.getElementById("rnpwd").value.length<8)  
{  
   alert('Please re-type your password, length only 8 and accept number and letters"');  
   return false;  
}


var npwd = document.getElementById("npwd").value;
var rnpwd = document.getElementById("rnpwd").value;
if (npwd!=rnpwd)
  {
	  alert("The passwords you have entered do not match!");
	  return false;
  }   


   return true;
   
}


</script>


 </head>

<body>

               
                
          <?php
include('connect.php');
$usernamerc=$_GET['cusername'];








?>

 <nav class="navbar navbar-expand-lg navbar-black bg-black py-3 shadow-sm bg-transparent-black fixed-top"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none"></a>
  
    <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <h4 class="logo" style="color: #FFFFFF">BOOKS STORE</h4>
          
            <li class="nav-item dropdown megamenu"><a  href="index.php" class="nav-link  font-weight-bold text-uppercase ">HOME</a></li> 
  
        </ul>
    </div>
</nav>

                <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="image/download.jpg" alt="slider_img" height="534">
                  <div class="ovarlay_slide_cont" style="left: -1px; top: 135px; height: 267px">
                     <h2>SHOPPING BOOKS</h2>
                     <h4>WELCOME TO  BOOKS SHOP</h4>
                     <p>Today a reader, tomorrow a leader</p>
                  </div>
               </div>
                </div>
                <br/>
                <hr></hr>





  		<form   method="post" action="<?php echo "updatepwdcustomer.php?cusername=$usernamerc";?>" id="form2"   name="form2"  onsubmit="return validate(this);"  enctype="multipart/form-data" >
		<table align="center" cellpadding="2" style="width: 38%; height: 211px">
			<tr>
				<td  colspan="2" style="height: 30px" class="auto-style11">
				<strong>Reset password
				</strong>
				</td>
			</tr>
			<tr>
				<td class="auto-style14" style="height: 38px; width: 192px">
				new password: </td>
				<td class="auto-style14" style="height: 38px; width: 278px">
				<input name="npwd" type="password" class="form-control" style="width: 97%; height: 43px" id="npwd" /></td>
			</tr>
			<tr>
				<td class="auto-style14" style="width: 192px">repate password :</td>
				<td class="auto-style14" style="width: 278px">
				<input name="rnpwd" type="password" class="form-control" style="width: 97%; height: 43px" id="rnpwd" /></td>
			</tr>
			<tr>
				<td class="auto-style13" colspan="2">
				<input name="change" style="width: 78px; font-family: 'Times New Roman', Times, serif; font-size: x-large; height: 34px;" type="submit" value="submit" class="input btn-outline-danger"/>&nbsp;&nbsp;&nbsp;
				<input name="Cancel" style="width: 78px; font-family: 'Times New Roman', Times, serif; font-size: x-large; height: 34px;" type="reset" value="Cancel" class="input btn-outline-danger" /></td>
			</tr>
			<tr>
				<td class="auto-style12" colspan="2">
				&nbsp;</td>
			</tr>
		</table>
   </form>
 <br />
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
    آ© 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Book Shop</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 
 
 

           
     </body>



</html>
