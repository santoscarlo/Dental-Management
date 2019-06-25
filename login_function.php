  <?php
    
  if(isset($_POST["send"])){

    $username =$_POST['username'];
    $password =$_POST['password'];

    $connection = mysqli_connect("localhost", "root", "","dental");
    $cmd  = mysqli_query($connection, "SELECT * FROM mainuser_acc WHERE username='{$username}' AND password='{$password}'");
   
    

  
        while($row = $cmd->fetch_assoc()){
            $account_type = $row['account_type'];
            $user_id = $row['user_id'];
          


        }
        if($account_type === 'admin'){
            $_SESSION['fullname'] = $fullname;
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['account_type'] = $account_type;
            header("location: admini_panel.php");
            exit();
        }
        elseif($account_type === 'patient'){
              $_SESSION['fullname'] = $fullname;
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['account_type'] = $account_type;
            header("location: patient_panel.php");
            exit();
        }
        elseif($account_type == 'secretary'){
            $_SESSION['fullname'] = $fullname;
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['account_type'] = $account_type;
            header("location: secretary_panel.php");
            exit();
        }      
        
      
    }  
      else{


          echo 'mysql_error()';
                /*echo'<script>';
               echo'alert("Your Email Or Password Is Incorrect!");';
               echo'window.location.href="login.php";';
               echo'</script>';*/
      }


  ?>