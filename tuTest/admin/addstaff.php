<?php
	require'./dbConnect.php';
	session_start();
	if($_SESSION['username']==''){
		header('location:login.php');
		exit();
	}
	//if upload button is pressed
	if(isset($_POST['upload'])){
		
		$target = "staff/".basename($_FILES['image']['name']);
		//connect to the database
		$db = mysqli_connect("localhost","root","","tu_pattaya");
		
		$image = $_FILES['image']['name'];
		$neng = $_POST['neng'];
		$nthai = $_POST['nthai'];
		$peng = $_POST['peng'];
		$pthai = $_POST['pthai'];
		$section = $_POST['d'];
		
		$sql = "INSERT INTO staff (image, neng, nthai, peng, pthai, section) VALUES ('$image', '$neng', '$nthai', '$peng', '$pthai', '$section')";
		mysqli_query($con, $sql); //stores the submit data into the database table: images
		
		//Now let's move the upload image into the folder: images
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There was a problem uploading image";
		}

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Staff</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="addstaff1.css">
		<link href="https://fonts.googleapis.com/css?family=Londrina+Sketch" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<section id="tu-text"><h4>Faculty of Engineering</h4></section>
			<aside id="tu-logout"><a href="home.php"><p><i class="fa fa-tv" style="font-size:24px"></i>Admin site</p></a></aside>
		</header>
		
		<div id="big-content">
			<div id="menubar">
				
				<a href="admin_page.php"><div class="menubar-inner"><i class="fa fa-bar-chart" style="font-size:24px"></i>View news</div>
				<a href="activity.php"><div class="menubar-inner"><i class="fa fa-bar-chart" style="font-size:24px"></i>View activity</div></a>
				<a href="viewstaff.php"><div class="menubar-inner"><i class="fa fa-child" style="font-size:24px"></i></i>View Staff</div></a>
				
				<a href="addnews.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add news</div></a>
				<a href="addactivity.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add Activity</div></a>
				<a href="addstaff.php"><div class="menubar-inner current"><i class="fa fa-plus-square" style="font-size:24px"></i>Add Staff</div></a>
				
				<a href="logout.php" onclick="return confirm('Are you sure to logout?');"><div class="menubar-inner"><i class="fa fa-sign-out" style="font-size:24px"></i>Log out</div></a>
			</div>
			<div id="content">
				<div id="content-input">
					<form method="post" action="addstaff.php" enctype="multipart/form-data">
							<div>
								<input type="file" name="image" required>
							</div>
							<div>
								<h3>ชื่อภาษาอังกฤษ</h3>
								<input type="text" name="neng" required autofocus>
							</div>
							<div>
								<h3>ชื่อภาษาไทย</h3>
								<input type="text" name="nthai" required autofocus>
							</div>
							<div>
								<h3>ตำแหน่ง(ภาษาอังกฤษ)</h3>
								<input type="text" name="peng" required autofocus>
							</div>
							<div>
								<h3>ตำแหน่ง(ภาษาไทย)</h3>
								<input type="text" name="pthai" required autofocus>
							</div>
							<div>
								<h3>แผนก</h3>
								<input type="radio" name="d" value="1" required>ผู้บริหาร
								<input type="radio" name="d" value="2" required>หน่วยบริหารและธุรการ/หน่วยพัสดุ
								<input type="radio" name="d" value="3" required>หน่วยเทคโนโลยีสารสนเทศ
								<br><br>
								<input type="radio" name="d" value="4" required>หน่วยทะเบียนและวิชาการ
								<input type="radio" name="d" value="5" required>หน่วยกิจการนักศึกษา
								<input type="radio" name="d" value="6" required>หน่วยห้องปฏิบัติการและซ่อมบำรุง
							<br><br>
							<div>
								<input type="submit" name="upload" value="Save">
							</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>