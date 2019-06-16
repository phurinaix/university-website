<?php
	require'./dbConnect.php';
	$idSelect = $_GET['id'];
	$sql = "select * from staff where id=$idSelect";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Staff</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="edit_staff.css">
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
						<input type="hidden" name="id_select" value='<?php echo $row['id']?>'>
							<div>
								<input type="file" name="image" value='<?php echo $row['image']?>'required>
							</div>
							<div>
								<h3>ชื่อภาษาอังกฤษ</h3>
								<input type="text" name="neng"  value='<?php echo $row['neng']?>' required autofocus>
							</div>
							<div>
								<h3>ชื่อภาษาไทย</h3>
								<input type="text" name="nthai" value='<?php echo $row['nthai']?>'required autofocus>
							</div>
							<div>
								<h3>ตำแหน่ง(ภาษาอังกฤษ)</h3>
								<input type="text" name="peng" value='<?php echo $row['peng']?>'required autofocus>
							</div>
							<div>
								<h3>ตำแหน่ง(ภาษาไทย)</h3>
								<input type="text" name="pthai" value='<?php echo $row['pthai']?>'required autofocus>
							</div>
							<div>
								<h3>แผนก</h3>
								<input type="radio" name="d" value="1" value='<?php echo $row['section']?>' required>ผู้บริหาร
								<input type="radio" name="d" value="2" value='<?php echo $row['section']?>' required>หน่วยบริหารและธุรการ/หน่วยพัสดุ
								<input type="radio" name="d" value="3" value='<?php echo $row['section']?>' required>หน่วยเทคโนโลยีสารสนเทศ
								<br><br>
								<input type="radio" name="d" value="4" value='<?php echo $row['section']?>' required>หน่วยทะเบียนและวิชาการ
								<input type="radio" name="d" value="5" value='<?php echo $row['section']?>' required>หน่วยกิจการนักศึกษา
								<input type="radio" name="d" value="6" value='<?php echo $row['section']?>' required>หน่วยห้องปฏิบัติการและซ่อมบำรุง
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