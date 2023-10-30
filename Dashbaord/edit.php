<?php
    $filePath = '../users.txt';
    $uniqueIdToFind = $_GET['edit_id']; 


    $file = fopen($filePath, 'r');

if ($file) {
  $found = false;

  while (($line = fgets($file)) !== false) {
    $parts = explode(',', $line);
    $currentUniqueId = trim(end($parts)); 

    if ($currentUniqueId === $uniqueIdToFind) {
      $found = true;

      $user_data = file('../users.txt', FILE_IGNORE_NEW_LINES);
      foreach ($user_data as $data) {
        list($username, $email, $password, $role, $id) = explode(',', $data);
      }

      $filePath = '../users.txt';
      $uniqueIdToEdit = $uniqueIdToFind;
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $edit_username = $_POST['username'];
        $edi_email = $_POST['email'];
        $edit_password = $_POST['password'];
        $edit_role = "user";
        $edit_id = rand();


        $user = "$edit_username,$edi_email,$edit_password,$edit_role,$edit_id\n";
      }
      $newData = $user;

      $fileLines = [];

      $file = fopen($filePath, 'r');

      if ($file) {
        // Read each line and store it in the array
        while (($line = fgets($file)) !== false) {
          $fileLines[] = $line;
        }

        fclose($file);

        $edited = false;

        $file = fopen($filePath, 'w');

        foreach ($fileLines as $line) {
          $parts = explode(',', $line);
          $currentUniqueId = trim(end($parts));

          if ($currentUniqueId === $uniqueIdToEdit) {
            $editedLine = substr($line, 0, -strlen($currentUniqueId)) . $newData;
            fwrite($file, $editedLine . PHP_EOL);
            $edited = true;
          } else {
            fwrite($file, $line);
          }
        }

        // Close the file
        fclose($file);

        if ($edited) {
          echo "edit done";
        } else {
          echo "not found";
        }
      } else {
        echo "Failed to open the file.";
      }
    }
  }

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
                              <input class="form-control" name="username" type="text" value="<?= $username?>">
                            </div>
                          </div>

                          <div class="mb-4 row align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                              Address</label>
                            <div class="col-md-9 col-lg-10">
                              <input class="form-control" name="email" type="email" value="<?= $email ?>">
                            </div>
                          </div>

                          <div class="mb-4 row align-items-center">
                            <label class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                            <div class="col-md-9 col-lg-10">
                              <input class="form-control" name="password" type="password"value="<?= $password ?>">
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