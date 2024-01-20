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
    <title>TK King's Kidz</title>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container-fluid tk-kingkid">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent" id="mynav">
                <div class="container">
                    <!-- logo -->
                    <a class="navbar-brand fs-4" href="index.php"><img src="assets/image/Logo_KingsKid.png" alt="Bootstrap" width="60" height="45">TK King's Kidz</a>
                    <!-- toggle button -->
                    <button class="navbar-toggler shaddow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- sidebar -->
                    <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <!-- sidebar header -->
                        <div class="offcanvas-header text-white border-bottom">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">King's Kidz</h5>
                            <button type="button" class="btn-close btn-close-white shaddow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <!-- sidebar body -->
                        <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                            <ul class="navbar-nav justify-content-center fs-5 flex-grow-1 pe-3">
                                <li class="nav-item mx-2">
                                    <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                                </li>
                                <!-- Profile dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#Profile" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown">Profile</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="history.php">Sejarah</a></li>
                                        <li><a class="dropdown-item" href="visi.php">Visi & Misi</a></li>
                                        <li><a class="dropdown-item" href="perihalkami.php">Tentang kami</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="#About">Sekilas</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="#Partner">Kerjasama</a>
                                </li>

                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="#Contact">Kontak</a>
                                </li>
                            </ul>
                            <!-- login / sign up -->
                            <!-- <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                                <a href="#login" class="text-white">Login</a>
                                <a href="#signup" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: #f5b30c;">Sign Up</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </nav>

            <!-- /main -->
            <header class="py-5">
                <div class="container px-5 pb-5 vh-100 d-flex align-items-center">
                    <div class="row gx-5 align-items-center">
                        <div class="col-md-5">
                            <div class="w-100 d-flex px-md-5 pb-md-5 flex-column justify-content-center text-start text-white fs-1">
                                <div class="rounded-pill">
                                    <div class="badge bg-gradient-warning-to-secondary fs-5 m-2">
                                        Lembaga Pendidikan
                                    </div>
                                </div>
                                <h1 class="f-brandSchool">King's Kidz</h1>
                                <div class="rounded-pill">
                                    <div class="badge bg-light fs-5 m-2">
                                        <h4 class="f-textSchool">Growing in Excellent</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 d-flex justify-content-center">
                            <img class="profile-img" src="assets/image/Logo_KingsKid.png" alt="">
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

        <section class="bg-light py-5" id="About">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-start text-wrap my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Sekilas</span></h2>
                            <p class="text-muted">TK King's Kid adalah sebuah lembaga pendidikan non-profit yang berkomitmen untuk memberikan akses pendidikan berkualitas bagi masyarakat menengah ke bawah. Sebagai lembaga yang didedikasikan untuk keberlanjutan dan pemerataan pendidikan, TK King's Kid berusaha memberikan peluang belajar yang setara bagi semua anak, tanpa memandang latar belakang ekonomi. Organisasi ini beroperasi dengan tujuan mendasar untuk mengurangi kesenjangan pendidikan dan memberikan dasar yang kuat bagi perkembangan anak-anak.</p>

                            <p>Dengan menggunakan pendekatan yang holistik dan inklusif, TK King's Kid tidak hanya memberikan ajaran akademis, tetapi juga memperhatikan aspek-aspek perkembangan sosial dan emosional anak-anak. Kurikulum yang disusun dengan cermat didesain untuk merangsang rasa ingin tahu dan kreativitas anak-anak, sambil membangun nilai-nilai moral yang kuat.</p>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2 d-flex justify-content-center position-relative my-5">
                        <div class="circle"></div>
                        <div class="circle2"></div>
                        <img class="rounded-circle img" src="assets/image/IMG-20230202-WA0032.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!"><i class="bi bi-facebook"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-instagram"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-gradient-warning-to-secondary text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">Sekolah Kami</h2>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <img src="assets/image/4.jpg" class="profile-img" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <img src="assets/image/1.jpg" class="profile-img" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <img src="assets/image/2.jpg" class="profile-img" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <img src="assets/image/3.jpg" class="profile-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a> -->
                </div>
            </div>
        </section>

        <!-- Testimoni -->
        <div class="bg-light py-5 mt-auto">
            <div class="containner">
                <div class="row mt-2 ms-auto">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Testimoni</span></h2>
                    </div>
                    <div class="col">
                        <div id="multipleItemsCarousel" class="carousel slide" data-bs-ride="carousel">

                            <!-- indicator carousel -->
                            <div class="carousel-indicators bg-warning">
                                <button type="button" data-bs-target="#multipleItemsCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#multipleItemsCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                <button type="button" data-bs-target="#multipleItemsCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card shadow border-0 rounded-4 mb-5">
                                                <div class="card-body p-5">
                                                    <div class="row align-items-center gx-5">
                                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                            <div class="bg-light p-4 rounded-4">
                                                                <div class="text-primary fw-bolder mb-2">2019 - Present</div>
                                                                <div class="small fw-bolder">Web Developer</div>
                                                                <div class="small text-muted">Stark Industries</div>
                                                                <div class="small text-muted">Los Angeles, CA</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card shadow border-0 rounded-4 mb-5">
                                                <div class="card-body p-5">
                                                    <div class="row align-items-center gx-5">
                                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                            <div class="bg-light p-4 rounded-4">
                                                                <div class="text-primary fw-bolder mb-2">2019 - Present</div>
                                                                <div class="small fw-bolder">Web Developer</div>
                                                                <div class="small text-muted">Stark Industries</div>
                                                                <div class="small text-muted">Los Angeles, CA</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card shadow border-0 rounded-4 mb-5">
                                                <div class="card-body p-5">
                                                    <div class="row align-items-center gx-5">
                                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                            <div class="bg-light p-4 rounded-4">
                                                                <div class="text-primary fw-bolder mb-2">2019 - Present</div>
                                                                <div class="small fw-bolder">Web Developer</div>
                                                                <div class="small text-muted">Stark Industries</div>
                                                                <div class="small text-muted">Los Angeles, CA</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card shadow border-0 rounded-4 mb-5">
                                                <div class="card-body p-5">
                                                    <div class="row align-items-center gx-5">
                                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                            <div class="bg-light p-4 rounded-4">
                                                                <div class="text-secondary fw-bolder mb-2">2015 - 2017</div>
                                                                <div class="mb-2">
                                                                    <div class="small fw-bolder">Barnett College</div>
                                                                    <div class="small text-muted">Fairfield, NY</div>
                                                                </div>
                                                                <div class="fst-italic">
                                                                    <div class="small text-muted">Master's</div>
                                                                    <div class="small text-muted">Web Development</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card shadow border-0 rounded-4 mb-5">
                                                <div class="card-body p-5">
                                                    <div class="row align-items-center gx-5">
                                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                            <div class="bg-light p-4 rounded-4">
                                                                <div class="text-secondary fw-bolder mb-2">2015 - 2017</div>
                                                                <div class="mb-2">
                                                                    <div class="small fw-bolder">Barnett College</div>
                                                                    <div class="small text-muted">Fairfield, NY</div>
                                                                </div>
                                                                <div class="fst-italic">
                                                                    <div class="small text-muted">Master's</div>
                                                                    <div class="small text-muted">Web Development</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card shadow border-0 rounded-4 mb-5">
                                                <div class="card-body p-5">
                                                    <div class="row align-items-center gx-5">
                                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                            <div class="bg-light p-4 rounded-4">
                                                                <div class="text-secondary fw-bolder mb-2">2015 - 2017</div>
                                                                <div class="mb-2">
                                                                    <div class="small fw-bolder">Barnett College</div>
                                                                    <div class="small text-muted">Fairfield, NY</div>
                                                                </div>
                                                                <div class="fst-italic">
                                                                    <div class="small text-muted">Master's</div>
                                                                    <div class="small text-muted">Web Development</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more carousel items as needed -->
                            </div>
                            <button class="btn btn-primary carousel-control-prev" type="button" data-bs-target="#multipleItemsCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="btn btn-primary carousel-control-next" type="button" data-bs-target="#multipleItemsCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- kerjasama -->
        <div class="bg-white" id="Partner">
            <div class="container">
                <div class="row justify-content-center text-center py-5 mt-auto">
                    <h2 class="display-4 fw-bolder mb-4">Kerjasama</h2>
                    <hr class="border border-danger opacity-50 w-50">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" class="profile-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" class="profile-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" class="profile-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" class="profile-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" class="profile-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" class="profile-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" class="profile-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" class="profile-img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" class="profile-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <footer class="bg-danger py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="small m-0 text-white">Copyright &copy; King's Kid 2024</div>
                    </div>
                    <div class="col-auto">
                        <a class="small text-white" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small text-white" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small text-white" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>

    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/style.js"></script>
</body>

</html>