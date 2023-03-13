<?php
$servername="localhost";
$username="ispkapj1_ecom";
$password="Ecom@123";
$dbname="ispkapj1_ispkart";

$con=mysqli_connect($servername,$username,$password,$dbname);
if ($con) 
	{	
		echo "";
	}
	else{
		die("connection is failed because".mysqli_connect_error());
	}

?>