<?php

$connection = mysqli_connect("localhost", "root", "", "dental");
$user_id = $_GET['user_id'];
$query = mysqli_query($connection, "UPDATE patient_form Set status = '2' Where user_id = '{$user_id}' ");
if($query)
{
							echo'<script>';
                            echo'alert("Deleted");';
                            echo'window.location.href="patient_table.php";';
                            echo'</script>';
}




?>