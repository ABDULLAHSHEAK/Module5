<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud operation with session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="superNav border-bottom py-2" style="background: #6351ce;color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
                    <span class="d-lg-inline-block d-md-inline-block d-sm-inline-block">
                        <?php
                        $current_date = date('d');
                        $current_year = date('Y');
                        $current_month = date('F');
                        $current_day = date('l');
                        $current_time = date('h:i A');

                        echo $current_day . " , " . $current_date . " " . $current_month . " , " . $current_year . " || " . " <span id='clock'></span>";
                        ?>
                    </span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
                    <span class="me-3"><i class="fa-solid fa-truck text-white me-1"></i><a class="text-white" href="login.php">Login</a></span>
                    <span class="me-3"><i class="fa-solid fa-file  text-white me-2"></i><a class="text-white" href="register.php">Create Account</a></span>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>Ostad</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">PHP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">JavaScript</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Java</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Phython</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">C++</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">My SQL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Laravel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Wordpress</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ------------ body start ------  -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto m-5">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Goto Dashboard
                    </div>
                    <div class="card-bodey">
                        <div class="col-md-8 mx-auto p-5">
                            <a href="login.php" class="btn btn-primary">Login</a>
                            <a href="register.php" class="btn btn-primary mt-3">Create Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="">
        <div class="">

            <!-- Footer -->
            <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
                <!-- Section: Social media -->
                <div class="">
                    <div class="">
                        <section class="d-flex justify-content-between p-4 col-lg-12" style="background-color: #6351ce">
                            <!-- Left -->
                            <div class="">
                                <span>Get connected with us on social networks:</span>
                            </div>
                            <!-- Left -->

                            <!-- Right -->
                            <div>
                                <a href="" class="text-white me-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" class="text-white me-4">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="" class="text-white me-4">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="" class="text-white me-4">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="" class="text-white me-4">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="" class="text-white me-4">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <!-- Right -->
                        </section>
                    </div>
                </div>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold">Ostad</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    "Ostad is the first online live skill training platform that provides a rigorous online bootcamp on for skill training to help individuals acquire the skills they need in their careera"
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">Category</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    <a href="#!" class="text-white">PHP</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Javascript</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Laravel</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Python</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">Useful links</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    <a href="#!" class="text-white">About Us</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Contact Us</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Terms & Condition</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Privacy Policy</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">Contact</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p><i class="fas fa-home mr-3"></i> Mirpur-10, Dhaka, Bangladesh </p>
                                <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                                <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                                <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    © 2023 Copyright:
                    <a class="text-white" href="#">Desgin & Develop by Md Abdullah Shake</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->

        </div>
        <!-- End of .container -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>
</body>

</html>