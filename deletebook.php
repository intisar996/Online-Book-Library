<?php
	
	

	$book_id = $_GET["book_id"];
	
	include("connect.php");
	
	$query = "delete from  tblbbook where book_id='$book_id'";
	mysqli_query($con,$query)or die(mysqli_error());
	
	echo '<script type = "text/javascript">';
	echo 'alert("BOOK DELETED");';
	echo 'window.location="viewbook.php"</script>';
	
		
          
?>


