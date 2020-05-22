<DOCTYPE HTML!>
<html>
<head>
<title>Online Book Store</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--  header Begin   -->	
<?php include 'header.php';?>
<!--  header end   -->

<section class="register">
<h3>Enter Book & Student Details</h3>  

<form action="1st_year_cse.php" method="POST" ><br>

  <br><h4>Name of Book :</h4><br>
	<input type="text" name="bname" placeholder="Enter Book Name"><br>
  <br><h4>Year of Book :</h4><br>
	<input type="text" name="byear" placeholder="Enter Publiced Year of Book"><br>
  <br><h4>Semester of Book :</h4><br>
	<input type="text" name="bsem" placeholder="Enter Semester of Book"><br>
  <br><h4>Price of Book :</h4><br>
	<input type="text" name="pbook" placeholder="Enter Price of Book"><br>
		
  <br><h4>Student Name :</h4><br>
	<input type="text" name="name" placeholder="Enter Your Name"><br>
  <h4>Contact No. :</h4> <br>
    <input type="email" name="contact" placeholder="Contact No." required></td><br>
  
<td><input class="button" type="submit" name="submit" value="Register"></td><br>

</form>
</section>

	<!--  footer Begin   -->	
<?php include 'footer.php';?>
<!--  footer end   -->
</body>
</html>
