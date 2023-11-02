<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);

      if ($row['user_type'] == 'admin') {

         $_SESSION['admin_name'] = $row['name'];
         header('location:../TAX%20CRUD/');
      } elseif ($row['user_type'] == 'user') {

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');
      }
   } else {
      $error[] = 'Incorrect Email or Password!';
   }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
   <link rel="icon" type="image/x-icon" href="../assets/site_icon.png">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="../capstone.css">
</head>

<body class="container-fluid">
   <div class="row py-2" style="background-color:#ffa500; top: 0;">
      <div class="col-12">
         <ul class="nav nav-underline justify-content-center">
            <li class="nav-item">
               <a class="nav-link" aria-current="page" href="../homepage.php" style="font-weight: bold; color: white;">Compute your tax</a>
            </li>
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="login_form.php" style="font-weight: bold; color: white;">Login</a>
            </li>
         </ul>
      </div>
   </div>
   <div class="form-container">

      <form action="" method="post">
         <h3>Login Form</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="Enter your Email">
         <input type="password" name="password" required placeholder="Enter your Password">
         <input type="submit" name="submit" value="login" class="form-btn">
         <!-- <p>don't have an account? <a href="register_form.php">register now</a></p> -->
      </form>

   </div>

   <div class="footer row d-flex justify-content-between" style="width: inherit; bottom: 0; position: fixed; margin-bottom: -1em;">
      <div class="col-2">
         <strong>
            <p><a href="terms.php" style="text-decoration: none; color: white;">Terms and Conditions</a></p>
         </strong>
      </div>
      <div class="col-8">
         <strong>
            <p>Divina & Sison &copy; 2023
         </strong>
      </div>
      <div class="col-2">
         <strong>
            <p><a href="privacy.php" style="text-decoration: none; color: white;">Privacy Policy</a></p>
         </strong>
      </div>
   </div>

</body>

</html>