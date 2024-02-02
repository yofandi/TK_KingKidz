<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- style page -->
    <link rel="stylesheet" href="css/style.css">
    <title>Kontak</title>
</head>

<body>
    <main class="d-flex bg-danger">
        <div class="container-fluid py-3">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger" id="mynav">
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
                                    <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                                </li>
                                <!-- Profile dropdown -->
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#Profile" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown">Profile</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href=""></a></li>
                                        <li><a class="dropdown-item" href=""></a></li>
                                        <li><a class="dropdown-item" href=""></a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="history.php">Sejarah</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="visi.php">Visi & Misi</a>
                                </li>

                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="perihalkami.php">Tentang kami</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link active" href="kontak.php">Kontak</a>
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

            <!-- lokasi kami -->
            <header class="py-5 bg-danger">
                <div class="container-fluid my-5">
                    <div class="row text-center text-lg-start align-items-center justify-content-center">
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <img src="assets/7125203.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h4 class="display-5 lead text-white mt-3 mt-lg-0">Lokasi</h4>
                            <h1 class="display-1 fw-bolder"><span class="text-white d-inline">TK King's Kidz</span></h1>
                            <div class="text-white">
                                <p class="fs-5">
                                    Jl. Raya Darmo Indah Blok K No.6Tandes Kidul, Kec. Tandes, Surabaya, Jawa Timur 60187
                                </p>
                                <p class="lead fst-italic">
                                    Telepon: +62 85000000000 | Email: tk.kingskidzsby@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </main>

    <!-- kontak kami -->
    <div class="container py-5 px-4 px-md-5">
        <div class="row bg-light rounded-4 py-5">
            <div class="col-md-6 col-lg-4 px-md-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder text-gradient">Hubungi Kami</h1>
                    <p class="lead fw-normal text-muted mb-0">Formulir Pesan dan Saran</p>
                </div>
                <div class="text-start mb-5">
                    <p class="lead fw-formal text-muted">
                        Silakan menghubungi kami di hari dan jam kerja melalui kontak berikut:
                    </p>
                    <ul class="lead fw-formal">
                        <li>Jam Kerja: 8:00 – 14:00 (Senin - Kamis); 08.00 - 12.00 (Jumat)</li>
                        <li>Telepon: +62 85000000000 </li>
                        <li>Email: info@tkkingskidzsby.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="row gx-md-5 justify-content-center">
                    <div class="col-lg-8 col-xl-10">
                        <form id="contactForm" method="POST" action="process/send_email.php">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="nama" type="text" placeholder="Enter your name..." data-sb-validations="required" data-sb-can-submit="no">
                                <label for="name">Nama Lengkap</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Diperlukan nama.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" data-sb-can-submit="no">
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Diperlukan email.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" data-sb-can-submit="no">
                                <label for="phone">Telefon</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Diperlukan nomor telefon.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="pesan" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" data-sb-can-submit="no"></textarea>
                                <label for="message">Pesan</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Diperlukan untuk mengisi pesan atau saran.</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-gradient btn-lg" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
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

</body>

</html>