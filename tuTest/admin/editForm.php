<?php
	require'./dbConnect.php';
	$idSelect = $_GET['id'];
	$sql = "select * from news where id=$idSelect";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add news</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="editForm.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Londrina+Sketch" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<section id="tu-text"><h4>Faculty of Engineering</h4></section>
			<aside id="tu-logout"><a href="admin_page.php"><p><i class="fa fa-tv" style="font-size:24px"></i>Admin site</p></a></aside>
		</header>
		
		<div id="big-content">
			<div id="menubar">
				<a href="admin_page.php"><div class="menubar-inner current"><i class="fa fa-bar-chart" style="font-size:24px"></i>View news</div></a>
				<a href="viewactivity.php"><div class="menubar-inner"><i class="fa fa-bar-chart" style="font-size:24px"></i>View activity</div></a>
				<a href="viewstaff.php"><div class="menubar-inner"><i class="fa fa-child" style="font-size:24px"></i></i>View Staff</div></a>
				
				<a href="addnews.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add news</div></a>
				<a href="addactivity.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add activity</div></a>
				<a href="addstaff.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add Staff</div></a>
				
				<a href="logout.php"><div class="menubar-inner"><i class="fa fa-sign-out" style="font-size:24px"></i>Log out</div></a>
			</div>
			<div id="content">
				<form method="post" action="editnews.php" enctype="multipart/form-data">
					<input type="hidden" name="size" value="1000000">
					<input type="hidden" name="id_select" value='<?php echo $row['id']?>'>
					<div>
						<input type="file" name="image" >
					</div>
					<div>
						<input type="text" name="topic" value='<?php echo $row['topic'] ?>'>
					</div>
					<div>
						<textarea name="text" cols="40" rows="4" ><?php echo $row['text'] ?></textarea>
					</div>
					<div>
						<input type="submit" name="upload" value="save">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
