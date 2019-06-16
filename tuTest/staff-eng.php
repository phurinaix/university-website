<!DOCTYPE html>
<html>
	<head>
		<title>Staff</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="staff-eng1.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
	</head>
	<body>
		<img src="https://goo.gl/EMCghL" class="black-ribbon stick-top stick-right"/>
		<header>
			<div id="wrapper">
				<div id = "header-inner">
					<a href = "home-eng.php" id = "logo"></a>
					<nav>
						<a href = "#" id = "menu-icon"></a>
						<ul>
							<li><a href = "home-eng.php">Home</a></li>
							<li class="dropdown"><a href = "#" class="droptn">News and Activity</a>
								<div class="dropdown-content">
								  <a href="news-eng.php">News</a>
								  <a href="activity-eng.php">Activity</a>
								</div>
							</li>
							<li class="dropdown"><a href = "#" class="droptn current">About</a>
								<div class="dropdown-content">
								  <a href="staff-eng.php">Staff</a>
								  <a href="map-eng.php">Map</a>
								  <a href="vision-eng.php">Vision</a>
								  <a href="history-eng.php">History</a>
								</div>
							</li>
							<li class="dropdown"><a href = "program-eng.php" class="droptn">Program</a>
								<div class="dropdown-content">
								  <a href="soft-eng.php">Software Engineering</a>
								  <a href="auto-eng.php">Automotive Engineering</a>
								</div>
							</li>
							<li><a href = "life-eng.php">Student's Life</a></li>
							<a href="staff-thai.php"><img src="img/thai.png" alt="thai" width="40px" height="20px" class="flag"></a>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- End Header-->
		
		<!--Start Administrator-->
		<h3>Administrators</h3>
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
										echo "<h4>".$row['neng']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['peng']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
			
		
		</div>
		<div class="unit">
		<h2>General Management and Information</h2>
		<h3>Government Administration</h3></div>
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
										echo "<h4>".$row['neng']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['peng']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
		</div>
		
		<div class="unit"><h3>Information Technology Unit</h3></div>
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
										echo "<h4>".$row['neng']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['peng']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
		</div>
		
		
		<h2>Educational Services and Student Affairs</h2>
		<div class="unit"><h3>Registration and Academic</h3></div>
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
										echo "<h4>".$row['neng']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['peng']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
		</div>
		
		<div class="unit"><h3>Student Affairs</h3></div>
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
										echo "<h4>".$row['neng']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['peng']."</p>";
									echo "</div>";
								echo "</section>";
							echo "</article>";
						}
					}
			?>
		</div>
		
		<div class="unit"><h3>Unit and laboratory maintenance</h3></div>
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
										echo "<h4>".$row['neng']."</h4>";
									echo "</div>";
									echo "<div class='text'>";
										echo "<p>".$row['peng']."</p>";
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
				<li>Faculty of Engineering, Thammasat University. ? 2013 All Rights Reserved</li>
				<li><a href = "https://www.facebook.com/ENGR.THAMMASAT" target = "_blank"><i class = "fa fa-facebook"></i></a></li>
				<li><a href = "https://twitter.com/engr_tu" target = "_blank"><i class = "fa fa-twitter"></i></a></li>
				<li><a href = "http://www.engr.tu.ac.th/en/rss" target = "_blank"><i class = "fa fa-rss-square"></i></a></li>
			</ul>
		</footer>
		<!-- End Footer-->
	</body>
</html>