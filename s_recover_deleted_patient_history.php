<?php
	$connection = mysqli_connect("localhost", "root", "","dental");
	$user_id = $_GET['user_id'];
	$recover = mysqli_query($connection , "UPDATE patient_form SET status = '0' WHERE user_id = '{$user_id}'");
	if($recover)
	{
							echo'<script>';
                            echo'alert("Recovered");';
                            echo'window.location.href="s_deleted_patient_history.php";';
                            echo'</script>';
}

	

?>