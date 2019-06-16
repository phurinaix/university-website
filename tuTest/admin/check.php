<?php
	require'./dbConnect.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$md5password = md5($password);	

	$sql = "select *from flogin";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_row($result);
	

	if($username == $row[1] && $md5password == $row[2]){
		$_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
		header("location:admin_page.php");
	}
	else{
		echo "<script> window.alert('Username or Password incorrect');</script>";
		echo "<script> window.location.assign('login.php');</script>";
	}
?>