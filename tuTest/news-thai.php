<!DOCTYPE html>
<html>
	<head>
		<title>History</title>
		<meta charset="utf-8">
		<?php echo '<link rel="stylesheet" type="text/css" href="news-thai.css">'; ?>
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
							<li class="dropdown"><a href = "#" class="droptn current">ข่าวและกิจกรรม</a>
								<div class="dropdown-content">
								  <a href="news-thai.php">ข่าว</a>
								  <a href="activity-thai.php">กิจกรรม</a>
								</div>
							</li>
							<li class="dropdown"><a href = "#" class="droptn">เกี่ยวกับ</a>
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
							<a href="news-eng.php"><img src="img/uk.jpg" alt="thai" width="40px" height="20px" class="flag"></a>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- End Header-->
		
		<!-- Start News-->
		<div id="news">
			<?php
				require'./admin/dbConnect.php';
				$sql = "SELECT *FROM newsth";
				$result = mysqli_query($con, $sql);
				while($row = mysqli_fetch_array($result)){
					echo "<div id='news-each'>";
						echo "<div id='img'>";
							echo "<img src = 'admin/news/".$row['image']."' width='350px'>";
						echo "</div>";
						echo "<div id='paragraph'>";
							echo "<div id='inner-paragraph'>";
								echo "<h3>".$row['topic']."</h3>";
								echo "<p>".$row['text']."</p>";
								echo "<a href='currentnews.php?id=".$row['id']."'>อ่านต่อ</a>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				}
			?>
		</div>
		
		<!--Start Footer-->
		<footer>
			<ul class = "social">
				<li><span>Faculty of Engineering, Thammasat University. ? 2013 All Rights Reserved</span></li>
				<li><a href = "https://www.facebook.com/ENGR.THAMMASAT" target = "_blank"><i class = "fa fa-facebook"></i></a></li>
				<li><a href = "https://twitter.com/engr_tu" target = "_blank"><i class = "fa fa-twitter"></i></a></li>
				<li><a href = "http://www.engr.tu.ac.th/en/rss" target = "_blank"><i class = "fa fa-rss-square"></i></a></li>
				<li id="x"><a href = "admin/login.php">.</a></li>
			</ul>
		</footer>
		<!-- End Footer-->
	</body>
</html>