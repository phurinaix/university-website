<!DOCTYPE html>
<html>
	<head>
		<title>History</title>
		<meta charset="utf-8">
		<?php echo '<link rel="stylesheet" type="text/css" href="staff-thai.css">'; ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	</head>
	<body>
		<img src="https://goo.gl/EMCghL" class="black-ribbon stick-top stick-right"/>
		<header>
			<div id="wrapper">
				<div id = "header-inner">
					<a href = "home-thai.php" id = "logo"></a>
					<nav>
						
						<ul>
							<li><a href = "home-thai.php">หน้าหลัก</a></li>
							<li class="dropdown"><a href = "#" class="droptn">ข่าวและกิจกรรม</a>
								<div class="dropdown-content">
								  <a href="news-thai.php">ข่าว</a>
								  <a href="activity-thai.php">กิจกรรม</a>
								</div>
							</li>
							<li class="dropdown"><a href = "#" class="droptn current">เกี่ยวกับ</a>
								<div class="dropdown-content">
								  <a href="staff-thai.php">บุคลากร</a>
								  <a href="map-thai.php">แผนที่</a>
								  <a href="vision-thai.php">วิสัยทัศน์</a>
								  <a href="history-thai.php">ประวัติความเป็นมา</a>
								</div>
							</li>
							<li class="dropdown"><a href = "program-thai.php" class="droptn">หลักสูตร</a>
								<div class="dropdown-content">
								  <a href="soft-thai.php">วิศวกรรมซอฟต์แวร์</a>
								  <a href="auto-thai.php">วิศวกรรมยานยนตร์</a>
								</div>
							</li>
							<li><a href = "life-thai.php">ชีวิตนักศึกษา</a></li>
							<a href="staff-eng.php"><img src="img/uk.jpg" alt="thai" width="40px" height="20px" class="flag"></a>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- End Header-->
		
		<!--Start Administrator-->
		<h2>บุคลากร</h2>
		<div id="admin">
			<?php
					require'./admin/dbConnect.php';
					$sql = "SELECT *FROM staff";
					$result = mysqli_query($con, $sql);
						
					while($row = mysqli_fetch_array($result)){
						if($row['section'] == '1'){
							echo "<article class='paragraph'>";
								echo "<section class='admin-pic'>";
									echo "<img src = 'admin/staff/".$row['image']."' width='100%' height='100%' class='admin-img'>";
								echo "</section>";
								echo "<section class='admin-content'>";
									echo "<div class='headline'>";
										echo "<h4>".$row['nthai']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['pthai']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
		</div>
		
		
		<h2>งานบริหารทั่วไปและสารสนเทศ</h2>
		<div class="unit"><h3>หน่วยงานบริหารและธุรการ/พัสดุ</h3></div>
		<div class="manage">
			<?php
					require'./admin/dbConnect.php';
					$sql = "SELECT *FROM staff";
					$result = mysqli_query($con, $sql);
						
					while($row = mysqli_fetch_array($result)){
						if($row['section'] == '2'){
							echo "<article class='paragraph'>";
								echo "<section class='admin-pic'>";
									echo "<img src = 'admin/staff/".$row['image']."' width='100%' height='100%' class='admin-img'>";
								echo "</section>";
								echo "<section class='admin-content'>";
									echo "<div class='headline'>";
										echo "<h4>".$row['nthai']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['pthai']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
		</div>
		
		<div class="unit"><h3>หน่วยเทคโนโลยีสารสนเทศ</h3></div>
		<div class="manage">
			<?php
					require'./admin/dbConnect.php';
					$sql = "SELECT *FROM staff";
					$result = mysqli_query($con, $sql);
						
					while($row = mysqli_fetch_array($result)){
						if($row['section'] == '3'){
							echo "<article class='paragraph'>";
								echo "<section class='admin-pic'>";
									echo "<img src = 'admin/staff/".$row['image']."' width='100%' height='100%' class='admin-img'>";
								echo "</section>";
								echo "<section class='admin-content'>";
									echo "<div class='headline'>";
										echo "<h4>".$row['nthai']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['pthai']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
		</div>
		
		
		<h2>งานบริการนักศึกษาและกิจการนักศึกษา</h2>
		<div class="unit"><h3>หน่วยทะเบียนและวิชาการ</h3></div>
		<div class="manage">
			<?php
					require'./admin/dbConnect.php';
					$sql = "SELECT *FROM staff";
					$result = mysqli_query($con, $sql);
						
					while($row = mysqli_fetch_array($result)){
						if($row['section'] == '4'){
							echo "<article class='paragraph'>";
								echo "<section class='admin-pic'>";
									echo "<img src = 'admin/staff/".$row['image']."' width='100%' height='100%' class='admin-img'>";
								echo "</section>";
								echo "<section class='admin-content'>";
									echo "<div class='headline'>";
										echo "<h4>".$row['nthai']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['pthai']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
		</div>
		
		<div class="unit"><h3>หน่วยกิจการนักศึกษา</h3></div>
		<div class="manage">
			<?php
					require'./admin/dbConnect.php';
					$sql = "SELECT *FROM staff";
					$result = mysqli_query($con, $sql);
						
					while($row = mysqli_fetch_array($result)){
						if($row['section'] == '5'){
							echo "<article class='paragraph'>";
								echo "<section class='admin-pic'>";
									echo "<img src = 'admin/staff/".$row['image']."' width='100%' height='100%' class='admin-img'>";
								echo "</section>";
								echo "<section class='admin-content'>";
									echo "<div class='headline'>";
										echo "<h4>".$row['nthai']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['pthai']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
		</div>
		
		<div class="unit"><h3>หน่วยห้องปฏิบัติการและซ่อมบำรุง</h3></div>
		<div class="manage">
			<?php
					require'./admin/dbConnect.php';
					$sql = "SELECT *FROM staff";
					$result = mysqli_query($con, $sql);
						
					while($row = mysqli_fetch_array($result)){
						if($row['section'] == '6'){
							echo "<article class='paragraph'>";
								echo "<section class='admin-pic'>";
									echo "<img src = 'admin/staff/".$row['image']."' width='100%' height='100%' class='admin-img'>";
								echo "</section>";
								echo "<section class='admin-content'>";
									echo "<div class='headline'>";
										echo "<h4>".$row['nthai']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['pthai']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
		</div>
		<!--End Administrator-->
		<br><br>
		
		<!--Start Footer-->
		<footer>
			<ul class = "social">
				<li>Faculty of Engineering, Thammasat University. © 2013 All Rights Reserved</li>
				<li><a href = "https://www.facebook.com/ENGR.THAMMASAT" target = "_blank"><i class = "fa fa-facebook"></i></a></li>
				<li><a href = "https://twitter.com/engr_tu" target = "_blank"><i class = "fa fa-twitter"></i></a></li>
				<li><a href = "http://www.engr.tu.ac.th/en/rss" target = "_blank"><i class = "fa fa-rss-square"></i></a></li>
			</ul>
		</footer>
		<!-- End Footer-->
	</body>
</html>