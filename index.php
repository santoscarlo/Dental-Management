<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table class="table">
		<thead>
			<tr>
				<th>Fullname</th>
				<th>Username</th>
				<th>Email</th>
			</tr>

		</thead>
		<tbody>
			
			<?php

				$connection = mysqli_connect("localhost", "root", "", "dental");
				$results = mysqli_query($connection, "SELECT * FROM main_user");

				while ($row = mysqli_fetch_assoc($results)):
		
			?>
			<tr>
				<td><?php echo $row['fullname'];?></td>
				<td><?php echo $row['username'];?></td>
				<td><?php echo $row['email'];?></td>

			</tr>

			<?php endwhile; ?>
		</tbody>

</table>
<link rel="stylesheet"  href="bootstrap.css">
<script src="tables/js/jquery.js"></script>
<script src="tables/js/jquery.dataTables.js"></script>
<script src="tables/js/dataTables.bootstrap.js"></script>

<script>
	$(".table").DataTable();
</script>
</body>
</html>