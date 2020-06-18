<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";
	
	$con=new mysqli($servername, $username, $password, $dbname);
	if($con->connect_error)
	{
		die("Connection Failed : ".$con->connect_error);
	}
	
	$usertype=$_POST['usertype'];
	$user=$_POST['username'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	
	
	
	$q="INSERT INTO idpwd VALUES('$usertype','$email','$user', '$pass')";
	
	$result = $con->query($q);
	
	if($result)
	{
		$msg = "Inserted Successfully";
		echo "<script type='text/javascript'>alert(\"$msg\");window.location='./login.html';</script>";
	}
	else
	{
		$msg = "Insertion Failed";
		echo "<script type='text/javascript'>alert(\"$msg\");window.location='./signup.html';</script>";
	}
	
	$con->close();
?>