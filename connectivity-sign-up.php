<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'register');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password =  $_POST['password'];
	$query = "INSERT INTO login (name,username,password) VALUES ('$name','$username','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "THANKS ...!!!  YOUR REGISTRATION IS COMPLETED...YOU CAN USE USERNAME AND PASSWORD FOR LOGIN....";
	}
}

function SignUp()
{
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM login WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>

<DOCTYPE! html>
  <html>
    <body>
  <a href="/index.html">BACK TO HOME</a>
      <br/><hr/><br/>
      <a href="/login.html">CLICK HERE TO LOGIN</a>
    </body>
  </html>
