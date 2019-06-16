<!DOCTYPE hmtl>
<html>
	<head>
		<title>View Staff</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="viewstaff2.css">
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
				<a href="viewstaff.php"><div class="menubar-inner current"><i class="fa fa-child" style="font-size:24px"></i></i>View Staff</div></a>
				
				<a href="addnews.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add news</div></a>
				<a href="addactivity.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add Activity</div></a>
				<a href="addstaff.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add Staff</div></a>
				
				<a href="logout.php" onclick="return confirm('Are you sure to logout?');"><div class="menubar-inner"><i class="fa fa-sign-out" style="font-size:24px"></i>Log out</div></a>
			</div>
			<div id="content">
				<div id="inside-1">
					<h3>คณะผู้บริหาร</h3>
					<?php
						require'./dbConnect.php';
						$sql = "SELECT *FROM staff";
						$result = mysqli_query($con, $sql);
						
						while($row = mysqli_fetch_array($result)){
							if($row['section'] == '1'){
								echo "<div id='news-each'>";
									echo "<div id='img'>";
										echo "<img src = 'staff/".$row['image']."' width='100px' height='120px'>";
									echo "</div>";
									echo "<div id='paragraph'>";
										echo "<div id='inner-paragraph'>";
											echo "<p>".$row['neng']."</p>";
											echo "<p>".$row['peng']."</p>";
											echo "<a href='edit_staff.php?id=$row[0]'>แก้ไข</a><br>";
											echo "<a href='delete_staff.php?id=$row[0]'>ลบ</a>";
											echo "<br><br>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
							}
						}
					?>
					<h3>หน่วยบริหารและธุรการ/หน่วยพัสดุ</h3>
					<?php
						require'./dbConnect.php';
						$sql = "SELECT *FROM staff";
						$result = mysqli_query($con, $sql);
						
						while($row = mysqli_fetch_array($result)){
							if($row['section'] == '2'){
								echo "<div id='news-each'>";
									echo "<div id='img'>";
										echo "<img src = 'staff/".$row['image']."' width='100px'>";
									echo "</div>";
									echo "<div id='paragraph'>";
										echo "<div id='inner-paragraph'>";
											echo "<p>".$row['neng']."</p>";
											echo "<p>".$row['peng']."</p>";
											echo "<a href='edit_staff.php?id=$row[0]'>แก้ไข</a><br>";
											echo "<a href='delete_staff.php?id=$row[0]'>ลบ</a>";
											echo "<br><br>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
							}
						}
					?>
					<h3>หน่วยเทคโนโลยีสารสนเทศ</h3>
					<?php
						require'./dbConnect.php';
						$sql = "SELECT *FROM staff";
						$result = mysqli_query($con, $sql);
						
						while($row = mysqli_fetch_array($result)){
							if($row['section'] == '3'){
								echo "<div id='news-each'>";
									echo "<div id='img'>";
										echo "<img src = 'staff/".$row['image']."' width='100px'>";
									echo "</div>";
									echo "<div id='paragraph'>";
										echo "<div id='inner-paragraph'>";
											echo "<p>".$row['neng']."</p>";
											echo "<p>".$row['peng']."</p>";
											echo "<a href='edit_staff.php?id=$row[0]'>แก้ไข</a><br>";
											echo "<a href='delete_staff.php?id=$row[0]'>ลบ</a>";
											echo "<br><br>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
							}
						}
					?>
					<h3>หน่วยทะเบียนและวิชาการ</h3>
					<?php
						require'./dbConnect.php';
						$sql = "SELECT *FROM staff";
						$result = mysqli_query($con, $sql);
						
						while($row = mysqli_fetch_array($result)){
							if($row['section'] == '4'){
								echo "<div id='news-each'>";
									echo "<div id='img'>";
										echo "<img src = 'staff/".$row['image']."' width='100px'>";
									echo "</div>";
									echo "<div id='paragraph'>";
										echo "<div id='inner-paragraph'>";
											echo "<p>".$row['neng']."</p>";
											echo "<p>".$row['peng']."</p>";
											echo "<a href='edit_staff.php?id=$row[0]'>แก้ไข</a><br>";
											echo "<a href='delete_staff.php?id=$row[0]'>ลบ</a>";
											echo "<br><br>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
							}
						}
					?>
					<h3>หน่วยกิจการนักศึกษา</h3>
					<?php
						require'./dbConnect.php';
						$sql = "SELECT *FROM staff";
						$result = mysqli_query($con, $sql);
						
						while($row = mysqli_fetch_array($result)){
							if($row['section'] == '5'){
								echo "<div id='news-each'>";
									echo "<div id='img'>";
										echo "<img src = 'staff/".$row['image']."' width='100px'>";
									echo "</div>";
									echo "<div id='paragraph'>";
										echo "<div id='inner-paragraph'>";
											echo "<p>".$row['neng']."</p>";
											echo "<p>".$row['peng']."</p>";
											echo "<a href='edit_staff.php?id=$row[0]'>แก้ไข</a><br>";
											echo "<a href='delete_staff.php?id=$row[0]'>ลบ</a>";
											echo "<br><br>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
							}
						}
					?>
					<h3>หน่วยห้องปฏิบัติการและซ่อมบำรุง</h3>
					<?php
						require'./dbConnect.php';
						$sql = "SELECT *FROM staff";
						$result = mysqli_query($con, $sql);
						
						while($row = mysqli_fetch_array($result)){
							if($row['section'] == '6'){
								echo "<div id='news-each'>";
									echo "<div id='img'>";
										echo "<img src = 'staff/".$row['image']."' width='100px'>";
									echo "</div>";
									echo "<div id='paragraph'>";
										echo "<div id='inner-paragraph'>";
											echo "<p>".$row['neng']."</p>";
											echo "<p>".$row['peng']."</p>";
											echo "<a href='edit_staff.php?id=$row[0]'>แก้ไข</a><br>";
											echo "<a href='delete_staff.php?id=$row[0]'>ลบ</a>";
											echo "<br>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
							}
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>