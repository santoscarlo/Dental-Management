<?php 
  $db = mysqli_connect("localhost", "root", "", "dental");
  $username = "";
  $email = "";
  if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact_no = $_POST['contact_no'];
    $type = "patient";

    $sql_u = "SELECT * FROM main_user WHERE username='$username'";
    $sql_e = "SELECT * FROM main_user WHERE email='$email'";
    $res_u = mysqli_query($db, $sql_u);
    $res_e = mysqli_query($db, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
      $name_error = "Sorry... username already taken";  
    }else if(mysqli_num_rows($res_e) > 0){
      $email_error = "Sorry... email already taken";  
    }else{
           $query = "INSERT INTO main_user (fullname, username, email, password, contact_no, type) 
                VALUES ('$fullname','$username', '$email', '$password',' $contact_no','$type')";
           $results = mysqli_query($db, $query);
           if(!$results)
           {
            echo 'mysqli_error()';
           }
           else
           {
              echo'<script>';
               echo'alert("successfully Registered!");';
               echo'window.location.href="login.php";';
               echo'</script>';
           }
    }
  }
?>