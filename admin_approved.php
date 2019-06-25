<?php
error_reporting(E_ALL ^ E_NOTICE);
$user_id = $_GET['user_id'];

$connection = mysqli_connect("localhost", "root", "", "dental");
$query = mysqli_query($connection, "UPDATE patient_form SET status = '1' WHERE user_id = '{$user_id}'");
if($query)
{
	 						echo'<script>';
                            echo'alert("Approved");';
                            echo'window.location.href="admin_nav.php";';
                            echo'</script>';
}

?>