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
}

.modal-login .avatar img {
	width: 100%;
}
 
.auto-style12 {
	color: #FFFFFF;
	font-family: "Segoe Marker";
	font-size: x-large;
	text-align: center;
	border-style: solid;
	border-width: 1px;
	background-color: #A52834;
}
.auto-style13 {
	border-style: solid;
	border-width: 1px;
}
.auto-style14 {
	text-align: center;
	border-style: solid;
	border-width: 1px;
}
 
</style>
     <script type="text/javascript">
 
function validate()
{
  
if (document.getElementById("ans").value=="")
  {
	  alert("Please input a your Answer.");
	  return false;
  }  
  


  return true;
   
}

</script>

<body>

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
                  <img class="d-block w-100" src="image/download.jpg" alt="slider_img" height="557">
                  <div class="ovarlay_slide_cont" style="left: -1px; top: 135px; height: 286px">
                     <h2>SHOPPING BOOKS</h2>
                     <h4>WELCOME TO  BOOKS SHOP</h4>
                     <p>Today a reader, tomorrow a leader</p>
                  </div>
               </div>
                </div>
                <br/>
                <hr></hr>
                <hr style="height: -12px"></hr>
                
                          <?php
include('connect.php');
$username=$_GET['username'];



$q="select * from  tbadmin where username='$username'";
$result = mysqli_query($con,$q);
while($row = mysqli_fetch_assoc($result)) {


$sq=$row["seq"];

}






?>





  <form   method="post"  action="<?php echo "checkadminanswer.php?username=$username";?>" id="form2"   name="form2"  onsubmit="return validate(this);"  enctype="multipart/form-data"  >
		<br />
		<table align="center" cellpadding="2" style="width: 40%; height: 241px">
			<tr>
				<td  colspan="2" style="height: 30px" class="auto-style12">
				<strong>SECURITY QUESTION
				</strong>
				</td>
			</tr>
			<tr class="auto-style16">
				<td class="auto-style13" style="height: 38px; width: 106px">
				sequrity question:&nbsp; </td>
				<td class="auto-style13" style="height: 38px; width: 323px">
				&nbsp;<span class="auto-style18"><?php echo $sq ?></span></td>
			</tr>
			<tr>
				<td class="auto-style13" style="width: 106px; height: 30px;">
				<strong>answer:</strong></td>
				<td class="auto-style13" style="width: 323px; height: 30px;">
				<input name="ans" type="text" class="auto-style18" style="width: 98%; height: 36px" id="ans" /></td>
			</tr>
			<tr>
				<td class="auto-style14" colspan="2" style="height: 35px">
				<input name="Submit1" style="width: 79px; font-size: large; font-family: 'Times New Roman', Times, serif;" type="submit" value="SUBMIT" class="input btn-outline-danger" /><span class="auto-style18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</span>
				<input name="Cancel" style="width: 79px; font-size: large; font-family: 'Times New Roman', Times, serif;" type="reset" value="CANCEL" class="input btn-outline-danger" /></td>
			</tr>
			<tr>
				<td class="auto-style11" colspan="2" style="height: 35px">
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
