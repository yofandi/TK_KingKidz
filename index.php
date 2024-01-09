<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- style page -->
    <link rel="stylesheet" href="css/style.css">
    <title>TK King's Kid</title>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container-fluid tk-kingkid">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent" id="mynav">
                <div class="container">
                    <!-- logo -->
                    <a class="navbar-brand fs-4" href="#"><img src="assets/image/Logo_KingsKid.png" alt="Bootstrap" width="60" height="45">TK King's Kid</a>
                    <!-- toggle button -->
                    <button class="navbar-toggler shaddow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- sidebar -->
                    <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <!-- sidebar header -->
                        <div class="offcanvas-header text-white border-bottom">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">King's Kid</h5>
                            <button type="button" class="btn-close btn-close-white shaddow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <!-- sidebar body -->
                        <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                            <ul class="navbar-nav justify-content-center fs-5 flex-grow-1 pe-3">
                                <li class="nav-item mx-2">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="#About">About</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="#Services">Services</a>
                                </li>

                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="#Contact">Contact</a>
                                </li>
                            </ul>
                            <!-- login / sign up -->
                            <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                                <a href="#login" class="text-white">Login</a>
                                <a href="#signup" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: #f5b30c;">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- /main -->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-md-5">
                            <div class="w-100 vh-100 d-flex px-md-5 pb-md-5 flex-column justify-content-center text-start text-white fs-1">
                                <div class="rounded-pill">
                                    <div class="badge bg-gradient-warning-to-secondary fs-5 m-2">
                                        Lembaga Pendidikan
                                    </div>
                                </div>
                                <h1 class="f-brandSchool">King's Kid</h1>
                                <div class="rounded-pill">
                                    <div class="badge bg-light fs-5 m-2">
                                        <h4 class="f-textSchool">Growing in Excellent</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex justify-content-center mt-5">
                                <div class="profile">
                                    <img class="profile-img" src="assets/image/Logo_KingsKid.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <div class="bg-body-tertiary" style=" height: 80px; width: auto">
            <div class="container-fluid">
                <div class="row justify-content-center bg-danger">
                    <div class="col mt-2 text-white text-end">
                        <p><i class="bi bi-telephone-fill"></i> (0331) 4350050 <i class="bi bi-telephone-fill"></i> (0331) 4350327 <i class="bi bi-telephone-fill"></i> (031) 99446671 <i class="bi bi-telephone-fill"></i> 08123-0033-880 </p>
                    </div>
                    <div class="col">
                        <ul class="text-white text-end social mt-2">
                            <li class="social-shared"> <i class="bi bi-facebook"></i> </li>
                            <li class="social-shared"> <i class="bi bi-instagram"></i> </li>
                            <li class="social-shared"> <i class="bi bi-twitter-x"></i> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Tentang Kami</span></h2>
                            <p class="lead fw-light mb-4">My name is Start Bootstrap and I help brands grow.</p>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/style.js"></script>
</body>

</html>