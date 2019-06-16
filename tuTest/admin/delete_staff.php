<?php
	require'./dbConnect.php';
	$idSelect= $_GET['id'];
	$sql ="delete from staff where id=$idSelect";
	$result=mysqli_query($con,$sql);
	
	if($result){
		header("location:viewstaff.php");
	}
	else{
		echo "Error";
	}
	
?>