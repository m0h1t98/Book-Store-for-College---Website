<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>

<DOCTYPE HTML!>
<html>
<head>
<title>Online Book Store</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>	
	<section class="section1">
		
	<div class="container">
		<div class="sec1-left">
			<img src="images/logo3.png" alt="logo">
		</div>
		<div class="sec1-right">
			<h1>Govt. Engineering College Bharatpur</h1>
			<h2>Online Book Store</h2>		
		</div>
	</div>
		<div class="menu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="1st_year.html">1st Year</a></li>
				<li><a href="2nd_year.html">2nd Year</a></li>
				<li><a href="3rd_year.html">3rd Year</a></li>
				<li><a href="4th_year.html">4th Year</a></li>
				<li><a href="index.html">Register</a></li>
				<li><a href="index.html">Login</a></li>
			</ul>
		</div>
	</section>
</header>
</body>	
</html>
