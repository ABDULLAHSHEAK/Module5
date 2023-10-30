<?php
session_start();

if (isset($_SESSION['role'])) {
  header('location:Dashbaord/index.php');
};
if (isset($_SESSION['user_role'])) {
  header('location:Profile/index.php');
};


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $users = file('users.txt', FILE_IGNORE_NEW_LINES);


  foreach ($users as $user) {
    list($username, $stored_email, $stored_password, $stored_role, $stored_id) = explode(',', $user);

    if ($email == $stored_email && $password == $stored_password) {
      $_SESSION['username'] = $username;
      $_SESSION['user_email'] = $stored_email;
      $_SESSION['password'] = $stored_password;
      $_SESSION['role'] = $stored_role;
      $_SESSION['user_id'] = $stored_id;

      if ($stored_role == 'admin') {
        header('Location: Dashbaord/index.php');
      } elseif ($stored_role == 'user') {
        $_SESSION['user_role'] = "user";
        header('Location: Profile/index.php');
      }elseif($stored_role == 'manager'){
        $_SESSION['maneger_role'] = 'manager';
        header('location:manager/index.php');
      }
      exit;
    }
  }

  echo 'Invalid credentials';
}
?>



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
  <title>log In</title>

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
              <h3>Welcome</h3>
              <h4>Log In Your Account</h4>
            </div>

            <div class="input-box">
              <form class="row g-4" action="" method="POST">
                <div class="col-12">
                  <div class="form-floating theme-form-floating log-in-form">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
                    <label for="email">Email Address</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating theme-form-floating log-in-form">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="forgot-box">
                    <div class="form-check ps-0 m-0 remember-box">
                      <input class="checkbox_animated check-box" type="checkbox" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                    </div>
                    <a href="forgot.html" class="forgot-password">Forgot Password?</a>
                  </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-animation w-100 justify-content-center" type="submit">Log
                    In</button>
                </div>
              </form>
            </div>

            <div class="other-log-in">
              <h6>or</h6>
            </div>

            <div class="log-in-button">
              <ul>
                <li>
                  <a href="register.php" class="btn google-button w-100">
                    Create Account
                  </a>
                </li>
                <li>
                  <table class="table">
                    <tr>
                      <th>Role</th>
                      <th>Email</th>
                      <th>Password</th>
                    </tr>
                    <tr>
                      <td>Admin</td>
                      <td>admin@gmail.com</td>
                      <td>1122</td>
                    </tr>
                    <tr>
                      <td>User</td>
                      <td>users@gmail.com</td>
                      <td>1122</td>
                    </tr>
                    <tr>
                      <td>Maneger</td>
                      <td>maneger@gmail.com</td>
                      <td>1122</td>
                    </tr>
                  </table>
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