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

 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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


 
.modal-login .avatar img {
	width: 100%;
}
 
.auto-style8 {
	font-family: "Segoe Marker";
	color: #FFFFFF;
	text-align: center;
	background-color: #A52834;
}
.auto-style9 {
	border-style: solid;
	border-width: 1px;
	background-color: #A52834;
}
 
.auto-style10 {
	border-style: solid;
	border-width: 1px;
	text-align: right;
}
.auto-style11 {
	border-style: solid;
	border-width: 1px;
	text-align: center;
}
.auto-style12 {
	border-style: solid;
	border-width: 1px;
}
 
</style>
 <script language="javascript" type="text/javascript">
 
function validate()
{

	if (document.getElementById("cname").value=="")
  {
	  alert("Please input a  Your  Name .");
	  return false;
  }
    var letters = /^[A-Za-z\s]+$/;  
if (!(document.getElementById("cname").value.match(letters)))  
{  
   alert('Input letters only in the First Name');  
   return false;  
}

 
	if (document.getElementById("cusername").value=="")
  {
	  alert("Please input a  Your User Name .");
	  return false;
  }



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

	 if(form2.cgender[0].checked==false && form2.cgender[1].checked==false)
{
	alert('Please select  Gender.');  
	return false;
}
	if (document.getElementById("caddress").value=="")
  {
	  alert("Please input a  Your Address .");
	  return false;
  }


 if ( document.getElementsByName('cseq')[0].value == 'Select Security Question' ){
    alert('Please Select Security Question !');
	
	return false;	
		
	}
	if (document.getElementById("cans").value=="")
  {
	  alert("Please input a  Your Answer .");
	  return false;
  }


	

if (document.getElementById("cpassword").value.length<8)  
{  
   alert('Please enter  password, length only 8 and accept  number and letters"');  
   return false;  
}

if (document.getElementById("repassword").value.length<8)  
{  
   alert('Please re-type your password, length only 8 and accept  number and letters "');  
   return false;  
}


var npwd = document.getElementById("cpassword").value;
var rnpwd = document.getElementById("repassword").value;
if (npwd!=rnpwd)
  {
	  alert("The passwords you have entered do not match!");
	  return false;
  }   

	if (document.getElementById("brithdate").value=="")
  {
	  alert("Please input a  Your Brithdate .");
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
                  <img class="d-block w-100" src="image/download.jpg" alt="slider_img" height="560">
                  <div class="ovarlay_slide_cont" style="left: -3px; top: 135px; height: 280px; bottom: 25px">
                     <h2>SHOPPING BOOKS</h2>
                     <h4>WELCOME TO  BOOKS SHOP</h4>
                     <p>Today a reader, tomorrow a leader</p>
                  </div>
               </div>
                </div>
                <br/>
                <hr></hr>
                <hr style="height: -12px">
 <div class="text_align_center">
	 </hr>
                
                
          &nbsp;&nbsp;<span class="auto-style28" style="box-sizing: border-box; font-family: &quot;Britannic Bold&quot;; color: rgb(33, 37, 41); font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 198, 203); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"><span class="auto-style29" style="box-sizing: border-box; font-size: x-large;">You&nbsp; 
 Already have an account?<span>&nbsp;</span></span><a href="login.php" style="box-sizing: border-box; color: rgb(0, 86, 179); text-decoration: underline; background-color: transparent;"><span class="auto-style29" style="box-sizing: border-box; font-size: x-large;">Login 
 here</span></a></span><br style="box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(245, 198, 203); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
 <br />





    </div>





    <form   method="post" id="form2"   name="form2"  onsubmit="return validate(this);"  enctype="multipart/form-data"  action="register_customercode.php">


 <table align="center" cellpadding="2" style="width:594px; height: 19px">
			<tr>
				<td class="auto-style9" colspan="2" style="height: 10px">
				<h3 class="auto-style8"><strong>Register</strong></h3>
				</td>
			</tr>
			<tr>
				<td class="auto-style12" style="height: 38px; width: 297px;">
				<input name="cname" type="text" id="cname"  placeholder="Enter Your First Name" class="form-control mb-1" style="width: 99%; height: 33px" /></td>
				<td class="auto-style12" style="height: 38px; ">
				<input name="caddress" type="text" id="caddress"  placeholder="Enter Your Address" class="form-control mb-1" style="width: 99%; height: 33px" /></td>
			</tr>
			<tr>
				<td class="auto-style12" style="height: 14px; width: 297px;">

<input type="text" name="cusername" class="form-control mb-1" autocomplete="off" placeholder="Enter Username"  id="cusername" style="width: 99%; height: 32px;" />
<div id="result" style="width: 103px"></div>				
				
				
				
				
             		</td>
				<td class="auto-style12" style="height: 14px; ">
		
				<select name="cseq" style="width: 99%; height: 33px;" id="cseq" class="form-control mb-1">
				<option value="Select Security Question">Select Security Question</option>
				<option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?
				</option>
				<option value="In what city or town was your first job?">In what city or town was your first job?
				</option>
				<option value="In what year was your mother born?">In what year was your mother born?
				</option>
				</select></td>
			</tr>
			<tr>
				<td class="auto-style12" style="height: 38px; width: 297px;">
				<input id="cemail" name="cemail"  placeholder="Enter Your Email" style="width: 99%; height: 33px" type="text" class="form-control mb-1" /></td>
				<td class="auto-style12" style="height: 38px; ">
				<input name="cans" type="text" id="cans" class="form-control mb-1"  placeholder="Enter Your Answer" style="width: 99%; height: 33px" /></td>
			</tr>
			<tr>
				<td class="auto-style12" style="height: 10px; width: 297px;">
				<input id="cphone" name="cphone" placeholder="Enter Your Phone Number" style="width: 99%; height: 33px" type="text" class="form-control mb-1" /></td>
				<td class="auto-style12" style="height: 10px; ">
				<input name="cpassword" type="password" id="cpassword" placeholder="Enter Your Password" class="form-control mb-1" style="height: 33px; width: 99%" /></td>
			</tr>
			<tr>
			<td class="auto-style12" style="width: 297px; height: 24px;" >
				<input name="cgender" type="radio" value="Male" id="cgender">Male&nbsp;&nbsp;&nbsp;
				<input name="cgender" type="radio" value="Female" id="cgender0">Female</td>
				<td class="auto-style12" style="height: 24px;">
				<input id="repassword" name="repassword" type="password"  placeholder="Enter Your Repet Password" class="form-control mb-1" style="height: 33px; width: 99%" /></td>
			</tr>
			<tr>
				<td class="auto-style10" style="height: 38px; width: 297px">

				Brithdate:</td>
				<td class="auto-style12" style="height: 38px; ">

				<input id="brithdate" name="brithdate"  style="width: 99%; height: 33px" type="date" max="2008-02-20" class="form-control mb-1" /></td>
			</tr>
			
			<tr>
				<td class="auto-style11" colspan="2" style="height: 9px">
				<input name="submit" id="submit" style="width: 101px; font-weight: bold;" type="submit" value="REGISTER" class="input btn-outline-danger" /><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</b>
				<input name="Cancel" style="width: 74px; font-weight: bold;" type="reset" value="Cancel"  class="input btn-outline-danger"/><b><br />
				</b></td>
			</tr>
							<tr>
				<td class="auto-style9" colspan="2">
				&nbsp;</td>
			</tr>
		</table>
  <br><br><br><br><br> <br /><br /> <br />

      </form>
      
      
    <script>
  $(document).ready(function () {
    $('#cusername').on('blur', function () {
      var user_name = $(this).val().trim();
      if (user_name != '') {
        $.ajax({
          url: 'checkusername.php',
          type: 'post',
          data: { user_name: user_name },
          success: function (cnt) {
            $('#result').html(cnt);
 

          }
        });
      }     });
  });
</script>
   
      
      
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
     Copyright<i class="fa fa-copyright"></i>:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Book Shop</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
 
 
 

           
     </body>



</html>
