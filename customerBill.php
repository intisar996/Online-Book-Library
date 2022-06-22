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
 
.auto-style1 {
	background-color: #A52834;
}
.auto-style2 {
	text-align: center;
	color: #FFFFFF;
	font-family: "Segoe Marker";
	font-size: x-large;
	border-style: solid;
	border-width: 1px;
	background-color: #A52834;
}
.auto-style3 {
	border-style: solid;
	border-width: 1px;
}
.auto-style4 {
	border-style: solid;
	border-width: 1px;
	background-color: #A52834;
}
 
.auto-style5 {
	border-style: solid;
	border-width: 1px;
	text-align: center;
	font-family: "Berlin Sans FB Demi";
	color: #FFFFFF;
	background-color: #A52834;
}
 
.auto-style6 {
	background-color: #E1C3C6;
}
 
.auto-style7 {
	border-style: solid;
	border-width: 1px;
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
}
.auto-style8 {
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
}
 
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-black bg-black py-3 shadow-sm bg-transparent-black fixed-top"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none"></a>
  
    <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <h4 class="logo" style="color: #FFFFFF">BOOKS STORE</h4>
          
            <li class="nav-item dropdown megamenu">
		<a id="megamneu" href="customerHomepage.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  font-weight-bold text-uppercase ">BACK</a></li>  
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
	 <?php
	
	if(!isset($_SESSION['txtuser']))
		header("Location: login.php");
	
	$rno=$_GET["orid"];
	$usernamerc = $_SESSION['txtuser'];
	include("connect.php");
	
		include ("connect.php");
	$qryname = "select * from  tbcustomer where cusername='$usernamerc'  ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{$cname=$rows['cname'];
	$cemail=$rows['cemail'];
	$cphone=$rows['cphone'];
	$caddress=$rows['caddress'];


	
}

	
	
	
	$query1 = "select * from placeorder where orid = '$rno'";
      $result = mysqli_query($con,$query1);
      while($row = mysqli_fetch_assoc($result)) {
	$resno=$row["orid"];
	$rdate= $row["orderdate"];
	$status= $row["orderstatus"];
	$gtotal= $row["gTotal"];
	}
?>








      <table align="center" bgcolor="FFFFFF" style="height: 425px; width: 584px;">
        <tr>
          <td colspan="4" scope="row" class="auto-style2">
           <strong>BILL DETAILS </strong> </td>
        </tr>
        <tr>
          <th colspan="4" scope="row" class="auto-style3"> BOOK SHOP<br>
		  Oman,<span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 13.12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><strong>Musanaah</strong></span><br>P.N:+968 94035984<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		  Email:bookshop.om@email.com</th>
        </tr>
        <tr>
          <td bgcolor="FFFFFF" scope="row" class="auto-style7" style="width: 175px">
             <strong>Bill ID 
          
          </strong> 
          
          </td>
          <td bgcolor="FFFFFF" style="width: 203px" class="auto-style7">
            <strong>ORDER DATE</strong></td>
          <td bgcolor="FFFFFF"  style="width: 156px" class="auto-style8">
             <strong>Bill
            Total</strong></td>
          <td bgcolor="FFFFFF" class="auto-style7">
            <strong>STATUTS</strong></td>
        </tr>
        <tr>
          <td bgcolor="FFFFFF" scope="row" class="auto-style3" style="width: 175px"><?php 
			echo "<font face='Arial, Helvetica, sans-serif' size='3'>".$resno;
		 ?></td>
          <td bgcolor="FFFFFF" scope="row" class="auto-style3">  <?php 
			echo $rdate; 
		?>
             </td>
          <td bgcolor="FFFFFF" style="width: 156px" class="auto-style3">   <?php 
			echo $gtotal; 
		?>
         </td>
          <td bgcolor="FFFFFF" class="auto-style3">     <?php 
			echo $status; 
		?>
          </td>
        </tr>
        
        </tr>
        <tr>
          <td scope="row" class="auto-style5" colspan="4"><strong>CUSTOMER 
		  INFORMATION</strong></td>
        </tr>
        
        <tr>
          <td bgcolor="FFFFFF" scope="row" class="auto-style7" style="width: 175px">
		  <strong>Customer Name:</strong></td>
          <td bgcolor="FFFFFF" scope="row" class="auto-style7">  <strong>Phone Number:</strong></td>
          <td bgcolor="FFFFFF" style="width: 156px" class="auto-style7">   
		  <strong>Email:</strong></td>
          <td bgcolor="FFFFFF" class="auto-style7">     <strong>Address</strong></td>
        </tr>
        
        <tr>
          <td bgcolor="FFFFFF" scope="row" class="auto-style3" style="width: 175px">
		  <?php 
			echo "<font face='Arial, Helvetica, sans-serif' size='3'>".$cname;
		 ?>&nbsp;</td>
          <td bgcolor="FFFFFF" scope="row" class="auto-style3">  <?php 
			echo "<font face='Arial, Helvetica, sans-serif' size='3'>".$cphone;
		 ?>&nbsp;</td>
          <td bgcolor="FFFFFF" style="width: 156px" class="auto-style3">   <?php 
			echo "<font face='Arial, Helvetica, sans-serif' size='3'>".$cemail;
		 ?>&nbsp;</td>
          <td bgcolor="FFFFFF" class="auto-style3">     <?php 
			echo "<font face='Arial, Helvetica, sans-serif' size='3'>".$caddress;
		 ?>&nbsp;</td>
        </tr>
        
        <tr>
          <td colspan="4" bgcolor="#FFFFFF" scope="row" style="height: 127px" class="auto-style3">&nbsp;
          <?php
	include('connect.php');
	
	$query3 ="select * from savebookorder  where  orid='$rno'";
      $result = mysqli_query($con,$query3);
      while($row = mysqli_fetch_assoc($result)) {
		    $rno =$row["orid"];

		}
     



	
	
	$query="select * from  tblbbook a,  placeorder b,tbcustomer d,savebookorder c  where  a.book_id=c.book_id  and b.orid=c.orid and b.cusername=d.cusername   and c.orid='$rno' and  d.cusername='$usernamerc'"; 
    $result = mysqli_query($con,$query);
	$num=mysqli_num_rows($result);
	
	
	
	echo "<table border='2' align='center'><tr>";
	echo"<th>ORDER ID </th>";
	echo"<th>Book ID </th>";
	echo "<th>Book  NAME</th>";
	echo "<th>Book  PRICE</th>";
	echo "<th>Quantity</th>";
	echo "<th>total price</th>";
		echo "<th>Book  PICTUER</th>";
		
	
	
	
	while($row = mysqli_fetch_assoc($result)) {
	
	       $vorderID =$row["save_id"];
	       $frid =$row["book_id"];
	       $frname=$row["book_name"];
	      $fpric =$row["book_price"];
	      $qty =$row["qty"];
	       $stotal =$row["subtotal"];
	      $vimage =$row["image"];
	
		    			

		
		echo"<tr align=center background='images/0.jpg' >";
		echo "<td> $vorderID</td>";
		echo "<td> $frid</td>";
		echo "<td>$frname</td>";
		echo "<td>$fpric</td>";
		echo "<td>$qty</td>";
		echo "<td>$stotal</td>";
		
		
	

	    echo "<td align=center><img src='image/$vimage' height=114 width=105>";
		

		
		
		
		echo"</tr>";

	
		
	}
	echo "</table>";
	

?>          </td>
        </tr>
        <tr>
          <th colspan="4" bgcolor="#FFFFFF" scope="row" class="auto-style3">
		  <br class="button2"><span class="button2">Thank You For Choose</span><br class="button2">
             <span class="button2">
          BOOK SHOP</span></th>
        </tr>
        <tr>
          <th colspan="4" scope="row" class="auto-style4">&nbsp;</th>
        </tr>
        </table>
      <p align="left" class="style5">          &nbsp;</span><p align="left" class="style5">&nbsp;</p>
      <p class="style5"></p>
      <p align="left" class="style5">&nbsp;</p>
    <p align="left" class="style5"> </p></td>
  </tr>
</table>
<br /><br />


   

    <div class="auto-style6">
 
 <div class="container"> 
 <br />

<footer class="auto-style6">
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
		  <span class="auto-style6">process</span> of delivering books to your door
            
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
