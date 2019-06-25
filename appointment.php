<?php
session_start();
$user_id = $_SESSION['user_id'];
$connection = mysqli_connect("localhost", "root", "", "dental");

$getanswer = mysqli_query($connection, "SELECT * FROM main_user WHERE user_id = '".$_GET['user_id']."'");
while($row = mysqli_fetch_array($getanswer)):


?>
<?php


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
                    <h1>TAYAMEN DENTAL CLINIC</h1>
                    <br>
                        <div class="form-group">
                              <label>Fullname</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Fullname" value="<?php echo $row['fullname'];?>">
                        </div>
                        <div class="form-group">
                              <label>Contact no.</label>
                            <input type="text" name="contact_no" value="<?php echo $row['contact_no'];?>" class="form-control" placeholder="Contact no.">
                        </div>
                        <div class="form-group">
                            <label>Type of service</label>
                        <select class="form-control" name="type_service" required>
                            <option value=""></option>
                            <option value="Incisors">Incisors</option>
                            <option value="Canines">Canines</option>
                            <option value="Premolars">Premolars</option>
                            <option value="Molars">Molars</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Effective date</label>
                        <input type="date" name="effective_date" class="form-control" required>
                    </div>
                     <div class="form-group">
                        <label>Time</label>
                        <input type="time" name="time" class="form-control" required>
                    </div>
                       
                        <button type="submit" name="send" class="btn btn-success btn-flat m-b-30 m-t-30"><i class="fa fa-thumbs-up" href = "pfill-form.php?user_id=<?php echo $row['user_id'];?>" ></i> Appoint</button>
                        <div class="social-login-content">
                            <div class="social-button">
                              
                            </div>
                        </div>
                        
                    </form>
                <?php endwhile; ?>
                    <?php
                        include "dental_connect.php";
                        if(isset($_POST['send']))
                        {
                            $fullname = $_POST['fullname'];
                            $contact_no = $_POST['contact_no'];
                            $type_service = $_POST['type_service'];
                            $effective_date = $_POST['effective_date'];
                            $time = $_POST['time'];
                            $connection = mysqli_connect("localhost", "root", "", "dental");
                            $user_id = $_SESSION['user_id'];

                            $insert = mysqli_query($connection, "INSERT INTO appointment_tbl(user_id, fullname, contact_no, type_service, effective_date, time ) VALUES('$user_id', '$fullname', '$contact_no', '$type_service', '$effective_date', '$time')");
                            if(!$insert)
                            {
                                echo 'failed';
                            }
                            else
                            {
                                echo'<script>';
                            echo'alert("Successfully appointed");';
                            echo'window.location.href="pfill-form.php";';
                            echo'</script>';
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
