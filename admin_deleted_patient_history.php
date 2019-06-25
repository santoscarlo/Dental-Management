<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tayamen Patient Table</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin_panel.php">Home</a></li>
      <li><a href="#">Schedule</a></li>
      <li><a href="#">Sms</a></li>
      <li><a href="#">Reports</a></li>
    </ul>
  </div>
</nav>
<div class="container">
    <h1 align="center">Tayamen Patient Deleted History</h1>
    <br>
  
<table class="table">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Contact</th>
                <th>Type of service</th>
                <th>Effective date</th>
                  <th>Recover</th>

            </tr>

        </thead>
        <tbody>
            
            <?php

                $connection = mysqli_connect("localhost", "root", "", "dental");
                $results = mysqli_query($connection, "SELECT * FROM patient_form where type = 'patient' and status = '2' ORDER BY user_id desc");

                while ($row = mysqli_fetch_array($results)):
        
            ?>
            <tr>
                <td><?php echo $row['fullname'];?></td>
                <td><?php echo $row['contact_no'];?></td>
                <td><?php echo $row['type_service'];?></td>
                <td><?php echo $row['effective_date'];?></td>
              
               <td>
                <a class="btn btn-outline btn-info fa fa-check" href="admin_recover_deleted_patient_history.php?user_id=<?php echo $row['user_id'];?>"></a>
              </td>

            </tr>

            <?php endwhile; ?>
        </tbody>

</table>
</div>
<link rel="stylesheet"  href="bootstrap.css">
<script src="tables/js/jquery.js"></script>
<script src="tables/js/jquery.dataTables.js"></script>
<script src="tables/js/dataTables.bootstrap.js"></script>

<script>
    $(".table").DataTable();
</script>

</body>
</html>
