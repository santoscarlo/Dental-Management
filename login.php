<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tayamen Dental Clinic</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                    </a>
                </div>
                    <form method="POST">
                <div class="login-form">
                    <h1>TAYAMEN DENTAL CLINIC</h1>
                    <br>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                       
                        <button type="submit" name="send" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-thumbs-up"></i> Sign in</button>
                        <div class="social-login-content">
                            <div class="social-button">
                              
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="registration.php"> Sign Up Here</a></p>
                        </div>
                    </form>
       <?php
       session_start();
  if(isset($_POST["send"])){

    $username =$_POST['username'];
    $password =$_POST['password'];
$connection = mysqli_connect("localhost", "root", "", "dental");
   $query = mysqli_query($connection, "SELECT * FROM  main_user WHERE username = '$username' AND password = '$password'");
   $count = mysqli_num_rows($query);


    if ($query) {
      if ($count > 0) {
        while($row = $query->fetch_assoc()){
            $lol = $row['type'];
            $user_id = $row['user_id'];
            $username = $row['username'];
            


        }
        if($lol === 'admin'){
            $_SESSION['fullname'] = $fullname;
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['lol'] = $lol;
            header("location: admin_panel.php");
            exit();
        }
        elseif($lol === 'patient'){
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['lol'] = $lol;
            header("location: appointment_parallax.php");
            exit();
        }
       
        
        elseif($lol === 'secretary'){
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['lol'] = $lol;
            header("location: secretary_panel.php");
            exit();
    }
    
        
      }
        else {
             echo'<script>';
               echo'alert("Your Password or Username is Incorrect");';
               echo'window.location.href="login.php";';
               echo'</script>';
            
        }
    } 

      
}

  ?>
            
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
