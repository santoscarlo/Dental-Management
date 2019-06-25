<?php 
error_reporting(E_ALL ^ E_NOTICE);
session_start();


$user_id = $_SESSION['user_id'];
$connection = mysqli_connect("localhost", "root", "", "dental");
 
$getasnwer = mysqli_query($connection, "SELECT * FROM patient_form where  user_id = '".$_GET['user_id']."'");
while($row = mysqli_fetch_assoc($getasnwer)):
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
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/teeth.png" alt="Logo"></a>
            </div>
            <br/>   
            <br/>                   

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="patient_table.php"> <i class="menu-icon fa fa-arrow-left"></i>Back </a>
                    </li>
                         <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-calendar"></i>Schedule </a>
                    </li>
                  
                    <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-users"></i>Patient </a>
                    </li>


                      <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-envelope"></i>Send sms </a>
                    </li>

                    <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-folder-open"></i>Reports </a>
                    </li>
                     <li>
                        <a href="widgets.html"> <i class="menu-icon fa fa-trash"></i>Deleted History </a>
                    </li>
                 

                
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                       
 <p> Welcome, <strong><?php echo $_SESSION['username'];?>    </strong> </p>
                     
                    </div>
                </div>
                

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <br>
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="admin_change_password.php"><i class="fa fa -cog"></i>Change Password</a>

                                <a class="nav-link" href="Logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
     

               
                
        
        <div class="col col-lg-12 col-md-12 panel panel-default">
                    <legend><b>Patient View Form</b></legend>
                  <form method="POST" action="viewpatient_answer.php">

                      <div class="form-group col-md-4">
                        <label>Full Name:</label>
                        <input type="text" name="fullname" class="form-control"  placeholder="Enter Full Name" value="<?php echo $row['fullname'];?>" readonly>
                      </div>

                      <div class="form-group col-md-4">
                       <label>Email:</label>
                       <input type="text" name="email" class="form-control pull-right"  placeholder="Enter Email" value="<?php echo $row['occupation'];?>" readonly>   
                      </div>

                      <div class="form-group col-md-4">
                       <label>Contact:</label>
                       <input type="text" name="username" class="form-control pull-right"  placeholder="Enter Username" value="<?php echo $row['contact_no'];?>" readonly>
                      </div>

                      <div class="form-group col-md-4">
                       <label>Effective date:</label>
                       <input type="text" name="password" class="form-control pull-right"  placeholder="Enter Password" value="<?php echo $row['effective_date'];?>" readonly="">
                      </div>
                       
                      <div class="form-group col-md-4">
                       <label>Type of service:</label>
                       <input type="text" name="contact_no" class="form-control pull-right"  placeholder="Enter Contact Number" value="<?php echo $row['type_service'];?>" readonly>   
                      </div>

                    
                        <div class="form-group col-md-4">
                       <label>Age:</label>
                       <input type="text" name="age" class="form-control pull-right"  placeholder="Age " value="<?php echo $row['age'];?>" readonly="">   
                      </div>

                      

                     

                      <div class="form-group col-md-4">
                       <label>Gender:</label>
                       <input type="text" class="form-control" name="gender" data-placement="right" value="<?php echo $row['gender'];?>" readonly/>
                      </div>

                      <div class="form-group col-md-4">
                       <label>Nationality:</label>
                       <input type="text" class="form-control" name="type" data-placement="right" value="<?php echo $row['nationality'];?>" readonly>
                      </div>

                    
                      <div class="form-group col-md-4">
                       <label>Occupation:</label>
                       <input type="text" name="address" class="form-control pull-right"  placeholder="Address" value="<?php echo $row['occupation'];?>" readonly>   
                      </div>

                        <div class="form-group col-md-4">
                       <label>Religion:</label>
                       <input type="text" name="address" class="form-control pull-right"  placeholder="Address" value="<?php echo $row['religion'];?>" readonly>   
                      </div>

                        <div class="form-group col-md-4">
                       <label>Dental insurance:</label>
                       <input type="text" name="address" class="form-control pull-right"  placeholder="Address" value="<?php echo $row['dental_insurance'];?>" readonly>   
                      </div>


                        <div class="form-group col-md-4">
                       <label>Dental history:</label>
                       <input type="text" name="address" class="form-control pull-right"  placeholder="Address" value="<?php echo $row['predental_history'];?>" readonly>   
                      </div>

                      <div class="form-group col-md-4">
                          <label>Parent's guardian name</label>
                          <input type="text" name="" value="<?php echo $row['p_guardian_name'];?>" class="form-control pull-right" readonly>
                      </div>

                      <div class="form-group col-md-4">
                        <label>Reason for consultation</label>
                        <input type="text" name="" class="form-control pull-right" value="<?php echo $row['r_dental_consultation'];?>" readonly >
                      </div>

                      <div class="form-group col-md-4">
                        <label>Home Number</label>
                        <input type="text" name="" class="form-control pull-right" value="<?php echo $row['home_no'];?>" readonly>
                      </div>

                      <div class="form-group col-md-4">
                        <label>Fax Number</label>
                        <input type="text" name="" class="form-control pull-right" value="<?php echo $row['fax_no'];?>" readonly>
                      </div>


                      <div class="form-group col-md-4">
                        <label>Blood type</label>
                        <input type="text" class="form-control pull-right" name="" value="<?php echo $row['blood_type'];?>" readonly>
                      </div>

                      <div class="form-group col-md-4">
                        <label>Blood Preassure</label>
                        <input type="text" class="form-control pull-right" name="" value="<?php echo $row['blood_preassure'];?>" readonly>
                        </div>

                 
                   

                    
                      <div class="form-group" align="center">
                       <button> <a class="btn btn-outline btn-info fa fa-check" href="approved.php?user_id=<?php echo $row['user_id'];?>">Approved</a></button>
                      </div>
                    
                    </form>
                  <?php endwhile; ?>


  </div>


        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>