<?php
include('logon.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
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
				<li><a href="index.html">1st Year</a></li>
				<li><a href="index.html">2nd Year</a></li>
				<li><a href="index.html">3rd Year</a></li>
				<li><a href="index.html">4th Year</a></li>
				<li><a href="index.html">Register</a></li>
				<li><a href="index.html">Login</a></li>
			</ul>
		</div>
	</section>
</header>

<section class="register">
<h3>Register</h3>  
  <form class="login_l" action="" method="post">
   <br><label>Email :</label><br>
   <input id="name" name="username" placeholder="Email" type="email"><br>
   <label>Password :</label><br>
   <input class="password" name="password" placeholder="**********" type="password">
   <input class="button" name="submit" type="submit" value=" Login ">
   <span><?php echo $error; ?></span>
  </form>
  </section>
  
</body>	
</html>
