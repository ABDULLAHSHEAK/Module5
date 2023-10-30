<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = "user";
  $id = rand();


  $user = "$username,$email,$password,$role,$id\n";
  file_put_contents('users.txt', $user, FILE_APPEND);

  header('Location: login.php');
  exit;
}
?>
<!-- Create the registration form in HTML here -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">

  <link rel="icon" href="Dashbaord/assets/images/ostad.png" type="image/x-icon">
  <link rel="shortcut icon" href="Dashbaord/assets/images/ostad.png" type="image/x-icon">
  <title>Create Account</title>

  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Bootstrap css -->
  <link rel="stylesheet" type="text/css" href="Dashbaord/assets/css/vendors/bootstrap.css">

  <!-- App css -->
  <link rel="stylesheet" type="text/css" href="Dashbaord/assets/css/style.css">
</head>

<body>

  <!-- login section start -->
  <section class="log-in-section section-b-space">

    <div class="container w-100">
      <div class="row">

        <div class="col-xl-5 col-lg-6 mx-auto">
          <div class="log-in-box">
            <div class="log-in-title">
              <h3>Welcome To Our Softoware</h3>
              <h4>Create an account as a user only</h4>
            </div>

            <div class="input-box">
              <form class="row g-4" action="" method="POST">
                <div class="col-12">
                  <div class="form-floating theme-form-floating log-in-form">
                    <input type="text" name="username" class="form-control" id="email" placeholder="User Name">
                    <label for="email">User Name</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating theme-form-floating log-in-form">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                    <label for="email">Email Address</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating theme-form-floating log-in-form">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                  </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-animation w-100 justify-content-center" type="submit">Create</button>
                </div>
              </form>
            </div>

            <div class="other-log-in">
              <h6>or</h6>
            </div>

            <div class="log-in-button">
              <ul>
                <li>
                  <a href="login.php" class="btn google-button w-100">
                    <img src="../assets/images/inner-page/google.png" class="blur-up lazyload" alt="">Login
                  </a>
                </li>
                <li>
                  <a href="#" class="btn google-button w-100">
                    <img src="../assets/images/inner-page/facebook.png" class="blur-up lazyload" alt=""> Log In with Google
                  </a>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- login section end -->

</body>

</html>