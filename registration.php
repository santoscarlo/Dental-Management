<?php include('registration_process.php') ?>
<html>
<head>
  <title>Tayamen Dental Clinic</title>
  <link rel="stylesheet" href="registrationstyle.css">
</head>
<body>
  <form method="post" action="registration.php" id="register_form">
    <h1>Tayamen Registration Form</h1>
     <div>
      <input type="text"  placeholder="Fullname" name="fullname" >
    </div>
    <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
    <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
    <?php if (isset($name_error)): ?>
      <span><?php echo $name_error; ?></span>
    <?php endif ?>
    </div>
    <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
      <?php if (isset($email_error)): ?>
        <span><?php echo $email_error; ?></span>
      <?php endif ?>
    </div>
    <div>
      <input type="text" name="contact_no" placeholder="Contact no.">
    </div>
    <div>
      <input type="password"  placeholder="Password" name="password">
    </div>
    <div>
      <button type="submit" name="register" id="reg_btn">Register</button>
    </div>
     <div class="register-link m-t-15 text-center">
        <center><p>Have an account ? <a href="login.php" > Sign In Here</a></p></center>
       </div>
  </form>
  </body>
</html>