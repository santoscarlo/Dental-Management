<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>
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
                        <div class="form-group">
                            <input type="text" name="currentpassword" class="form-control" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="newpassword" class="form-control" placeholder="New Password">
                        </div>
                          <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="confirmpassword" type="password">
                                </div>
                       
                        <button type="submit" name="send" value="Change & Submit" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-thumbs-up"></i> Change</button>
                        <div class="social-login-content">
                            <div class="social-button">
                              
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                        </div>
                    </form>
                     <?php
                        $username = $_SESSION['username'];
                        if($_POST['send'])
                        {
                            $currentpassword = ($_POST['currentpassword']);
                            $newpassword = ($_POST['newpassword']);
                            $confirmpassword = ($_POST['confirmpassword']);
                            //check pass in db
                            $connection = mysqli_connect("localhost", "root", "","dental");
                            $getquery ="SELECT password FROM main_user WHERE username = '$username'";
                            $result = mysqli_query($connection, $getquery);
                            $row = mysqli_fetch_assoc($result); 

                            $currentpassworddb=$row['password'];
                            
                            if($currentpassword ==$currentpassworddb)
                            {
                                if($newpassword ==$confirmpassword)
                                {
                                    //change pass in db
                                        $querychange = "UPDATE main_user SET password='$newpassword' WHERE username = '$username'";
                                        $update_query = mysqli_query($connection, $querychange);
                                        if(!$update_query){
                                            echo "mysqli_error";
                                        }
                                        else{
                                          echo'<script>';
               echo'alert("successfully changed!");';
               echo'window.location.href="admin_panel.php";';
               echo'</script>';
                                           // header("location: change_password.php");
                                        }

                                }
                                else
                                {

                                }
                            }
                           
                        }
                       //check change pass
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