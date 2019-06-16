<?php
	require'./dbConnect.php';
	session_start();
	if($_SESSION['username']==''){
		header('location:login.php');
		exit();
	}else{
	$sql = "SELECT *FROM news ORDER BY id DESC";
	$result = mysqli_query($con, $sql);}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="home1.css">
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
				
				<a href="admin_page.php"><div class="menubar-inner current"><i class="fa fa-bar-chart" style="font-size:24px"></i>View news</div>
				<a href="activity.php"><div class="menubar-inner"><i class="fa fa-bar-chart" style="font-size:24px"></i>View activity</div></a>
				<a href="viewstaff.php"><div class="menubar-inner"><i class="fa fa-child" style="font-size:24px"></i></i>View Staff</div></a>
				
				<a href="addnews.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add news</div></a>
				<a href="addactivity.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add activity</div></a>
				<a href="addstaff.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add Staff</div></a>
				
				<a href="logout.php" onclick="return confirm('Are you sure to logout?');"><div class="menubar-inner"><i class="fa fa-sign-out" style="font-size:24px"></i>Log out</div></a>
			</div>
			<div id="content">
				<div class="flag">
					<img src="img/thai.png" width="40px" id="flag-inner1">
					<img src="img/uk.jpg" width="40px" id="flag-inner2">
				</div>
				<br>
				<div id="english">
					<table id="tableId">
						<tr>
							<th>ID</th>
							<th>News</th>
							<th>Date(dd/mm/yy)</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<?php while($row= mysqli_fetch_row($result)){?>
						<tr>
							<td><?php echo $row[0] ?></p></td>
							<td><?php echo $row[2] ?></td>
							<td><?php echo date("d/m/Y") ?></td>
							<td><a href="editForm.php?id=<?php echo $row[0]?>">Edit</td>
							<td><a href="delete.php?id=<?php echo $row[0]?>">Delete</a></td>
						</tr>
						<?php }?>
						
					</table>
				</div>
				<div id="thai">
					<table>
						<tr>
							<th>ID</th>
							<th>ข่าว</th>
							<th>วันที่</th>
							<th>แก้ไข</th>
							<th>ลบ</th>
						</tr>
						<?php 
							$sql1 = "SELECT *FROM newsth ORDER BY id DESC";
							$result1 = mysqli_query($con, $sql1);
							while($row= mysqli_fetch_row($result1)){
						?>
						<tr>
							<td><?php echo $row[0] ?></td>
							<td><?php echo $row[2] ?></td>
							<td><?php echo date("d/m/Y") ?></td>
							<td><a href="editForm_thai.php?id=<?php echo $row[0]?>">แก้ไข</td>
							<td><a href="delete_thai.php?id=<?php echo $row[0]?>">ลบ</a></td>
						</tr>
						<?php }?>
						
					</table>
				</div>
			</div>
		</div>
		<script src="home.js"></script>
	</body>
</html>