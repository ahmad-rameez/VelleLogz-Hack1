<?php
$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
		echo 'Not Connected to database';
		
	if(!mysqli_select_db($con,'vellelogzdb')){
		echo 'Database not selected';	
	}

$from = $_POST['from'];
$to = $_POST['to'];


$sql = "SELECT * FROM `air_info` WHERE a_src='$from' AND a_dest='$to'";
$some = mysqli_query($con, $sql);

if(!mysqli_query($con, $sql)){
		echo 'Not Inserted';	
	}
	
	else {
	   while($result = mysqli_fetch_assoc($some)){}
    }

?>