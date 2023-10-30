<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $id = rand();


    $user = "$username,$email,$password,$role,$id\n";
    file_put_contents('../users.txt', $user, FILE_APPEND);

    header('Location: all-users.php');
    exit;
}
?>

<!-- Page Header Start-->
<?php include('header.php'); ?>
<!-- Page Header End -->

<!-- Page Body Start -->
<div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <?php include('sidebar.php'); ?>
    <!-- Page Sidebar Ends-->

    <!-- Page Sidebar Start -->
    <div class="page-body">
        <!-- New User start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Add New User</h5>
                                    </div>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button">Account</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                            <form class="theme-form theme-form-2 mega-form" method="POST">
                                                <div class="card-header-1">
                                                    <h5>Product Information</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-lg-2 col-md-3 mb-0">First
                                                            Name</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" name="username" type="text">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                            Address</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" name="email" type="email">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" name="password" type="password">
                                                        </div>
                                                    </div>


                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-lg-2 col-md-3 col-form-label form-label-title">Select Role</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <select name="role" id="" class=" form-control">
                                                                <option value="admin">admin</option>
                                                                <option value="manager">manager</option>
                                                                <option value="user">user</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control btn btn-primary" type="submit" name="submit" value="Add">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User End -->
        <!-- footer start-->
        <?php include('footer.php'); ?>
        <!-- footer End-->