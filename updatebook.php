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
    height:350px;
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

.auto-style4 {
	border-style: solid;
	border-width: 1px;
	text-align: center;
	background-color: #A52834;
}
.auto-style5 {
	color: #fff;
	font-size: x-large;
	font-family: "Segoe Marker";
}

.auto-style6 {
	border-style: solid;
	border-width: 1px;
}
.auto-style7 {
	text-align: center;
	border-style: solid;
	border-width: 1px;
}
.auto-style8 {
	border-style: solid;
	border-width: 1px;
	background-color: #A52834;
}

.auto-style9 {
	border-style: solid;
	border-width: 1px;
	text-align: left;
}

</style>
 <script type="text/javascript">
 
function validate()
{
  
if (document.getElementById("book_name").value=="")
  {
	  alert("Please input a Book Name.");
	  return false;
  }  
  
       var number=  /^[0-9]/;  
if (!(document.getElementById("book_price").value.match(number)))  
{  
   alert(' Please input Book Price.. Acept only Number"');  
   return false;  
}
  
  if ( document.getElementsByName('book_type')[0].value == 'Select Book Type' ){
    alert('Please Select Book Type !');
	
	return false;	
		
	}
  
 
      var number=  /^[0-9]/;  
if (!(document.getElementById("quantity").value.match(number)))  
{  
   alert(' Please input Quantity Of Book.. Acept only Number"');  
   return false;  
}
 
if (document.getElementById("book_desc").value=="")
  {
	  alert("Please input a Book  Description.");
	  return false;
  } 
  if (document.getElementById("book_writer").value=="")
  {
	  alert("Please input a Book  Writer.");
	  return false;
  } 

 if ( document.getElementsByName('language')[0].value == 'Select Language' ){
    alert('Please Select Book language !');
	
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
          
            <li class="nav-item dropdown megamenu">
			<a id="megamneu" href="viewbook.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  font-weight-bold text-uppercase">BACK</a></li> 
            <li class="nav-item"><a href="logout.php" class="nav-link font-weight-bold text-uppercase">LOGOUT</a></li>

        </ul>
      <div><img src="image/profile-user.png" height="25px" width="30px"><span class="auto-style3"><span class="text-white">Welcome:<?php
			$username= $_SESSION['txtuser'];
	include ("connect.php");
	$qryname = "select * from  tbadmin where username='$username' ";
	$result = mysqli_query($con,$qryname);
	while($rows = mysqli_fetch_assoc($result)) 
	{ $namee=$rows['aname'];
	$aid=$rows['aid'];
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
                <br/>
                <hr>
  <br>
  
<?php
include("connect.php");

$book_id=$_GET['book_id'];


$query = "select * from  tblbbook  where book_id='$book_id'";
$result= mysqli_query($con,$query);
$num = mysqli_num_rows($result);
 while($row = mysqli_fetch_assoc($result)) {

$book_namer=$row["book_name"];
$book_pricer=$row["book_price"];
$book_typer=$row["book_type"];
$img=$row["image"];
$quantityr=$row["quantity"];
$book_descr=$row["book_desc"];
$book_writerr=$row["book_writer"];
$languager=$row["language"];




}

?>



<?php

$adate=date('Y/m/d');
?>


    <form id="form2" name="form2" method="post" action="<?php echo"updatebook_code.php?book_id=$book_id" ;?>" onsubmit="return validate(this);">


 <table align="center" cellpadding="2" style="width: 424px; height: 134px">
			<tr>
				<td class="auto-style4" style="height: 38px; " colspan="2">
				&nbsp;<span class="auto-style5"><strong>BOOK</strong></span></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 38px; width: 396px">
				<span class="auto-style21">Book Name</span>:&nbsp; </td>
				<td class="auto-style6" style="height: 38px; width: 190px">
				<input id="book_name" class="form-control" name="book_name" style="width: 223px; height: 38px" type="text" value="<?php echo "$book_namer"; ?>"></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 38px; width: 396px">
				Book Price:</td>
				<td class="auto-style6" style="height: 38px; width: 190px">
				<input id="book_price" class="form-control" name="book_price" style="width: 221px; height: 38px" type="text" value="<?php echo "$book_pricer"; ?>"></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 38px; width: 396px">
				Book Type:</td>
				<td class="auto-style6" style="height: 38px; width: 190px">

				<select id="book_type" class="form-control mb-1" name="book_type" style="width: 221px; height: 38px;">
				 <option value="<?php echo "$book_typer"; ?>"><?php echo "$book_typer"; ?>
				 </option>
				 <?php
				  include("connect.php");
				  $query = "select*from  tbbooktype";
				  $result= mysqli_query($con,$query);
				  $num   = mysqli_num_rows($result);
				  
				  while($row = mysqli_fetch_assoc($result)) {
				  $typ_id =$row["typ_id"];
				  $typ_name =$row["typ_name"];
				 
				  echo "<option value='$typ_id'>$typ_name</option>";
				  }
				  				  
		 ?>

				</select></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 38px; width: 396px">
				Image:</td>
				<td class="auto-style6" style="height: 38px; width: 190px">
				<input id="pic" class="form-control" name="pic" type="file"><?php echo "$img"; ?></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 38px; width: 396px">
				Update Date:</td>
				<td class="auto-style6" style="height: 38px; width: 190px">
				<input id="DATE_OR" class="form-control" name="datepp" type="text" value="<?php echo $adate;?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 38px; width: 396px">
				Quantity:</td>
				<td class="auto-style6" style="height: 38px; width: 190px">
				<input id="quantity" class="form-control" name="quantity" style="width: 223px; height: 38px" type="text" value="<?php echo "$quantityr"; ?>"></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 38px; width: 396px">
				Description:</td>
				<td class="auto-style6" style="height: 38px; width: 190px">
				<textarea id="book_desc" class="form-control" name="book_desc" style="width: 221px; height: 160px" cols="20" rows="1"><?php echo "$book_descr"; ?></textarea></td>
			</tr>
			<tr>
				<td class="auto-style6" style="height: 38px; width: 396px">
				Book Writer:</td>
				<td class="auto-style6" style="height: 38px; width: 190px">
				<input id="book_writer" class="form-control" name="book_writer" style="width: 223px; height: 38px" type="text" value="<?php echo "$book_writerr"; ?>"></td>
			</tr>
			<tr>
				<td class="auto-style9" style="height: 38px; width: 396px">
				Language&nbsp;:</td>
				<td class="auto-style6" style="height: 38px; width: 190px">
				<select id="language" class="form-control" name="language" style="width: 223px; height: 38px">
				<option value="<?php echo "$languager"; ?>"><?php echo "$languager"; ?></option>
				<option value="Arabic">Arabic</option>
				<option value="English">English</option>
				<option value="Spanish">Spanish</option>
				<option value="French">French</option>
				<option value="Chinese">Chinese</option>
				<option value="Turkish">Turkish</option>
				</select></td>
			</tr>
			<tr>
				<td class="auto-style9" style="height: 38px; width: 396px">
				Admin ID</td>
				<td class="auto-style6" style="height: 38px; width: 190px">
				<?php echo $aid;?> &nbsp;</td>
			</tr>
			<tr>
				<td class="auto-style7" colspan="2" style="height: 48px">
				<input name="Submit1" style="width: 86px; font-weight: bold; font-size: medium; height: 35px;" type="submit" value="UPDATE" class="input btn-outline-danger" />&nbsp;&nbsp;&nbsp;
				<input name="Cancel" style="width: 86px; font-weight: bold; font-size: medium; height: 35px;" type="reset" value="Cancel"  class="input btn-outline-danger"/></td>
			</tr>
			<tr>
				<td class="auto-style8" colspan="2">
				&nbsp;</td>
			</tr>
		</table>
  	  <br /> <br />

      </form>
      
      
      
      
      
 <br /><br />
    <div class="row mt-2 g-4">
 
 <div class="container"> 
 <br />

  
 </div>

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
    Copyrightط¢آ©:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Book Shop</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 
 
 

           
     </body>



</html>
