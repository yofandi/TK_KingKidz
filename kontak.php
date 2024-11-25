<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/image/Logo_KingsKid.ico">
    <!-- boostrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- style page -->
    <link rel="stylesheet" href="css/style.css">
    <title>Kontak</title>
</head>

<body>
    <main class="d-flex tk-bgimage" style="--background: url('../assets/map_line.png');">
        <div class="container-fluid py-3">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-warning" id="mynav">
                <div class="container">
                    <!-- logo -->
                    <a id="texttransisi" class="navbar-brand text-dark fs-4" href="index.php"><img
                            src="assets/image/Logo_KingsKid.png" alt="Bootstrap" width="60" height="45">TK King's
                        Kidz</a>
                    <!-- toggle button -->
                    <button class="navbar-toggler shaddow-none border-0" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- sidebar -->
                    <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <!-- sidebar header -->
                        <div class="offcanvas-header text-white border-bottom">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">King's Kidz</h5>
                            <button type="button" class="btn-close btn-close-white shaddow-none"
                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <!-- sidebar body -->
                        <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                            <ul class="navbar-nav justify-content-center fs-5 flex-grow-1 pe-3">
                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-dark active" aria-current="page"
                                        href="index.php">Beranda</a>
                                </li>
                                <!-- Profile dropdown -->
                                <!-- <li class="nav-item dropdown">
                                    <a id="texttransisi" class="nav-link text-dark dropdown-toggle" href="#Profile" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown">Profile</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href=""></a></li>
                                        <li><a class="dropdown-item" href=""></a></li>
                                        <li><a class="dropdown-item" href=""></a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-dark" href="history.php">Sejarah</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-dark" href="visi.php">Visi & Misi</a>
                                </li>

                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-dark" href="perihalkami.php">Tentang
                                        kami</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-dark active" href="kontak.php">Kontak</a>
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
            <header class="py-5">
                <div class="container-fluid my-5">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-4 col-md-6 mb-3 mb-lg-0 text-center">
                            <img src="assets/7125203.png" class="img-fluid contact-map" width="400vw">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="card border border-white border-4 shadow bg-danger"
                                style="border-radius: 50px;">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h4 class="display-5 lead f-brandSchool text-gradient-gold-with-shadow">Lokasi
                                        </h4>
                                        <h1 class="display-1 fw-bolder"><span
                                                class="text-gradient-gold-with-shadow d-inline f-brandSchool">TK King's
                                                Kidz</span></h1>
                                    </div>
                                    <div
                                        class="text-start text-gradient-gold-with-shadow text-center ps-5 mt-3 mt-md-4">
                                        <p class="fs-5">
                                            Jl. Raya Darmo Indah Blok K No.7 Tandes Kidul, Kec. Tandes, Surabaya, Jawa
                                            Timur 60187
                                        </p>
                                        <p class="lead fst-italic">
                                            Email: tk.kingskidzsby@gmail.com
                                        </p>
                                    </div>
                                </div>
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
                        <li>Kontak: +62 89368685069 </li>
                        <li>Email: info@tkkingskidzsby.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="row gx-md-5 justify-content-center">
                    <div class="col-lg-8 col-xl-10">
                        <form class="needs-validation" id="contactForm" method="POST" action="process/send_email.php"
                            novalidate>
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="nama" type="text" required>
                                <label for="name">Nama Lengkap</label>
                                <div class="invalid-feedback">Diperlukan nama.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" required>
                                <label for="email">Email</label>
                                <div class="invalid-feedback">Diperlukan email.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="phone" type="tel" required>
                                <label for="phone">Telefon</label>
                                <div class="invalid-feedback">Diperlukan nomor
                                    telefon.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="pesan" type="text"
                                    style="height: 10rem" required></textarea>
                                <label for="message">Pesan</label>
                                <div class="invalid-feedback">Diperlukan untuk
                                    mengisi pesan atau saran.</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-gradient btn-lg" id="submitButton"
                                    type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- donasi -->
    <section class="bg-light py-5 tk-bgimage" style="background-image: url('assets/donation_png.png');">
        <div class="container my-5 px-3 px-md-5">
            <div class="row text-center">
                <h1 class="display-5 fw-bolder"><span class="text-gradient d-inline f-brandSchool">Donasi</span></h1>
            </div>
            <div class="row bg-white justify-content-center align-items-center text-center py-5 py-md-5"
                style="border-radius: 50px;">
                <div class="col-md-4 mt-4 mt-md-5">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link bg-transparent active" id="v-pills-rekbca-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-rekbca" type="button" role="tab" aria-controls="v-pills-rekbca"
                            aria-selected="true">
                            <h1 class="display-6 f-patrick-hand-regular">Rek. BCA</h1>
                        </button>
                        <button class="nav-link bg-transparent" id="v-pills-whatsapp-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-whatsapp" type="button" role="tab" aria-controls="v-pills-whatsapp"
                            aria-selected="false">
                            <h1 class="display-6 f-patrick-hand-regular">Kontak</h1>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-rekbca" role="tabpanel"
                            aria-labelledby="v-pills-rekbca-tab">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <img src="assets/bcapng.png" alt="BCA" style="width: 13rem;">
                                    <p class="fs-3 fw-bold mt-2">
                                        8291595588 <br>
                                        (Djulia Ekawidjaja Or Amelia Jauwena)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-whatsapp" role="tabpanel"
                            aria-labelledby="v-pills-whatsapp-tab">
                            <div class="text-center d-flex justify-content-center align-items-center"
                                style="height: 30vh;">
                                <div class="row">
                                    <i class="bi bi-whatsapp text-success" style="font-size: 4rem;"></i>
                                    <p class="fs-3 fw-bold mt-3">
                                        089368685069 (Elyana)<br>
                                        081945554327 (Henokh)<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <footer class="bg-warning py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-dark">Copyright &copy; King's Kid 2024</div>
                </div>
                <div class="col-auto">
                    <a class="small text-dark" href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small text-dark" href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small text-dark" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    $('#TabVisiMisi button[data-bs-toggle="tab"]').on('show.bs.tab', function(e) {
        let target = $(e.target).data('target');
        $(target)
            .addClass('active show')
            .siblings('.tab-pane.active')
            .removeClass('active show')
    });

    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>
</body>

</html>