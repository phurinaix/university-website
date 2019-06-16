<?php
	require'./dbConnect.php';
	$idSelect = $_GET['id'];
	$sql = "select * from activityeng where id=$idSelect";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add news</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="editactivity_eng1.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Londrina+Sketch" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<section id="tu-text"><h4>Faculty of Engineering</h4></section>
			<aside id="tu-logout"><a href="addnews.php"><p><i class="fa fa-tv" style="font-size:24px"></i>Admin site</p></a></aside>
		</header>
		
		<div id="big-content">
			<div id="menubar">
				<a href="admin_page.php"><div class="menubar-inner"><i class="fa fa-bar-chart" style="font-size:24px"></i>View news</div></a>
				<a href="activity.php"><div class="menubar-inner current"><i class="fa fa-bar-chart" style="font-size:24px"></i>View activity</div></a>
				<a href="viewstaff.php"><div class="menubar-inner"><i class="fa fa-child" style="font-size:24px"></i></i>View Staff</div></a>
				
				<a href="addnews.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add news</div></a>
				<a href="addactivity.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add activity</div></a>
				<a href="addstaff.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add Staff</div></a>
				<a href="logout.php" onclick="return confirm('Are you sure to logout?');"><div class="menubar-inner"><i class="fa fa-sign-out" style="font-size:24px"></i>Log out</div></a>
			</div>
			<div id="english">
				<div id="content">
					<div id="content-inside">
						<div id="flag">
							<a href="addactivity_thai.php"><img src="img/thai.png" width="40px" id="flag-inner1"></a>
							<a href="addactivity.php"><img src="img/uk.jpg" width="40px" id="flag-inner2"></a>
						</div>
						<form method="post" action="editactivityaction_eng.php" enctype="multipart/form-data">
							<input type="hidden" name="size" value="1000000">
							<div>
								<h3>date</h3>
								<input type="text" name="date" value='<?php echo $row['date']?>'>
							</div>
							<div>
								<h3>topic</h3>
								<input type="text" name="topic" value='<?php echo $row['topic']?>'>
							</div>
							<div>
								<h3>detail</h3>
								<textarea name="detail" cols="40" rows="4" ><?php echo $row['detail']?></textarea>
							</div>

							<div>
								<input type="submit" name="upload" value="Save">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>