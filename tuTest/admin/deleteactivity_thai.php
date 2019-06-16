<?php
	require'./dbConnect.php';
	$idSelect= $_GET['id'];
	$sql ="delete from activitythai where id=$idSelect";
	$result=mysqli_query($con,$sql);
	
	if($result){
		header("location:activity.php");
	}
	else{
		echo "Error";
	}
	
?>