<?php

$servername="localhost";
$username="root";
$password="";
$dbname="product";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn) 
	{	
		echo "connected";
	}
	else{
		die("connection is failed because".mysqli_connect_error());
	}

?>