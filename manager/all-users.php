<!-- Page Header Start-->
<?php include('header.php'); ?>
<?php include('delete.php');?>
<
<!-- Page Header Ends-->

<!-- Page Body Start -->
<div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <?php include('sidebar.php'); ?>
    <!-- Page Sidebar Ends-->

    <!-- Container-fluid starts-->
    <div class="page-body">
        <!-- All User Table Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>All Users</h5>
                                <form class="d-inline-flex">
                                    <a href="add-new-user.php" class="align-items-center btn btn-theme d-flex">
                                        <i data-feather="plus"></i>Add New
                                    </a>
                                </form>
                            </div>

                            <div class="table-responsive table-product">
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- <tr>
                                            <td>
                                                <div class="user-name">
                                                    <span>Everett C. Green</span>
                                                    <span>Essex Court</span>
                                                </div>
                                            </td>

                                            <td>+ 802 - 370 - 2430</td>

                                            <td>EverettCGreen@rhyta.com</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr> -->
                                        <tr>
                                            <?php
                                            $user_data = file('../users.txt', FILE_IGNORE_NEW_LINES);
                                            foreach ($user_data as $data) {
                                                list($username, $email, $password, $role, $id) = explode(',', $data);
                                                echo "<tr>";
                                                echo "<td>$username</td>";
                                                echo "<td>$email</td>";
                                                echo "<td>$role</td>";
                                                echo "</tr>";
                                            }
                                            ?>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All User Table Ends-->
        <!-- footer start-->
        <?php include('footer.php'); ?>

        <!-- footer End-->