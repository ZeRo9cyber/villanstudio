<?php
	$host= 'localhost';
	$user= 'root';
	$pass= '';
	$db= 'vilandb';
	
	$con=mysqli_connect($host,$user,$pass,$db);
	if($con)
	    echo 'connected successfully to vilandb database';
		
	$sql="insert into login (email,password) value ('pranshuverman@gmail.com','pranshu1')";
	$query=mysqli_query($con,$sql);
	if($query)
		echo 'data inserted Successfully';
	
?>