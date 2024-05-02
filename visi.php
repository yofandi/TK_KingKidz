<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- style page -->
    <link rel="stylesheet" href="css/style.css">
    <title>Visi & Misi King's Kidz</title>
</head>

<body>
    <main class="tk-bgvisi" style="--background: url('../assets/multiple image - kingskidz (1).png')">
        <div class="container-fluid py-3">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-warning" id="mynav">
                <div class="container">
                    <!-- logo -->
                    <a id="texttransisi" class="navbar-brand text-dark fs-4" href="index.php"><img src="assets/image/Logo_KingsKid.png" alt="Bootstrap" width="60" height="45">TK King's Kidz</a>
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
                                    <a id="texttransisi" class="nav-link text-dark active" aria-current="page" href="index.php">Beranda</a>
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
                                    <a id="texttransisi" class="nav-link text-dark active" href="visi.php">Visi & Misi</a>
                                </li>

                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-dark" href="perihalkami.php">Tentang kami</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-dark" href="kontak.php">Kontak</a>
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

            <!-- penjelasan visi -->
            <div class="container text-center">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8" style="margin-top: 250px;">
                        <h4 class="display-5 lead f-brandSchool text-gradient-color-with-shadow">TK King's Kidz</h4>
                        <h1 class="display-1 fw-bolder"><span class="text-gradient-color-with-shadow d-inline f-brandSchool">Visi & Misi</span></h1>
                    </div>
                    <div class="col-md-8 text-dark mt-4">
                        <p class="fs-4 f-brandSchool">
                            Kami mengundang Anda untuk menyelami visi dan misi kami, yang menjadi landasan utama dalam setiap langkah kami. Visi kami adalah menciptakan perubahan positif dan memberikan dampak yang berarti dalam masyarakat dan lingkungan sekitar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- visi dan misi -->
    <!-- <div class="h-100">
        <section class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-5 py-5 bg-light d-flex justify-content-center align-items-center">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="visiImage" role="tabpanel" aria-labelledby="visi-tab" style="border-radius: 50px;">
                            <img class="img-fluid" src="assets/9307750.png" alt="visi image">
                        </div>
                        <div class="tab-pane fade" id="misiImage" role="tabpanel" aria-labelledby="misi-tab" style="border-radius: 50px;">
                            <img class="img-fluid" src="assets/5143067.png" alt="misi image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-5 py-2 d-flex justify-content-center align-items-center">
                    <div>
                        <ul class="nav nav-tabs" id="TabVisiMisi" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="visi-tab" data-bs-toggle="tab" data-target="#visi, #visiImage" type="button" role="tab" aria-controls="visi" aria-selected="true">
                                    <h1 class="text-gradient d-inline f-brandSchool">Visi</h1>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="misi-tab" data-bs-toggle="tab" data-target="#misi, #misiImage" type="button" role="tab" aria-controls="misi" aria-selected="false">
                                    <h1 class="text-gradient d-inline f-brandSchool">Misi</h1>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="visi" role="tabpanel" aria-labelledby="visi-tab" style="border-radius: 10px;">
                                <div class="mission-list">
                                    <ul class="fs-4 list-numbered f-brandSchool">
                                        <li class="text-muted">Membawa anak untuk takut akan Tuhan dan memiliki karakter Ilahi.</li>
                                        <li class="text-muted">Membimbing anak dengan iman, kasih dan pengetahuan.</li>
                                        <li class="text-muted">Membentuk pribadi yang mandiri serta percaya diri.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="misi-tab" style="border-radius: 50px;">
                                <div class="mission-list">
                                    <ol class="fs-4 list-numbered f-brandSchool">
                                        <li class="text-muted">Memberikan pendidikan karakter yang berdasar kepada kebenaran Firman Tuhan.</li>
                                        <li class="text-muted">Melatih ketaqwaan pribadi dan berwawasan luas.</li>
                                        <li class="text-muted">Melatih keberanian anak untuk mengaktualisasikan diri dalam keluarga serta masyarakat pada umumnya.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> -->
    <div class="container-fluid my-5">
        <div id="carouselExample" class="carousel carousel-dark slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="p-5 text-end bg-light rounded-5 tk-bgimage" style="--background: url('../assets/backline.png')">
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- <i class="bi bi-fire text-danger" style="font-size: 10rem;"></i> -->
                                <h1 class="display-1 f-brandSchool text-gradient fw-bold">Visi</h1>
                                <!-- <p class="col-lg-8 mx-auto lead"></p> -->
                                <dl class="fs-4 f-brandSchool">
                                    <dt class="text-muted">Membawa anak untuk takut akan Tuhan dan memiliki karakter Ilahi.</dt>
                                    <dt class="text-muted">Membimbing anak dengan iman, kasih dan pengetahuan.</li>
                                    </dt>
                                    <dt class="text-muted">Membentuk pribadi yang mandiri serta percaya diri.</dt>
                                </dl>
                            </div>
                            <div class="col-lg-4 mt-4">
                                <img class="img-fluid rounded" src="assets/image/IMG-20230119-WA0005.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="p-5 text-center bg-light rounded-5 tk-bgimage" style="--background: url('../assets/backline2.png')">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 mt-5">
                                <img class="img-fluid rounded" src="assets/image/10november.png" alt="">
                            </div>
                            <div class="col-lg-8 text-start">
                                <!-- <i class="bi bi-gear-wide-connected text-danger" style="font-size: 10rem;"></i> -->
                                <h1 class="display-1 f-brandSchool text-gradient fw-bold">Misi</h1>
                                <!-- <p class="col-lg-8 mx-auto lead"></p> -->
                                <ol class="fs-4 list-numbered f-brandSchool">
                                    <li class="text-muted">Memberikan pendidikan karakter yang berdasar kepada kebenaran Firman Tuhan.</li>
                                    <li class="text-muted">Melatih ketaqwaan pribadi dan berwawasan luas.</li>
                                    <li class="text-muted">Melatih keberanian anak untuk mengaktualisasikan diri dalam keluarga serta masyarakat pada umumnya.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- nilai -->
    <div class="bg-gradient-warning-to-secondary py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4 text-center">
                    <img class="img-fluid" style="height: 50vh; width: auto" src="assets/8728841.png" alt="">
                    <h1 class="display-2 fw-bolder text-white f-brandSchool"><em>King's Kidz</em></h1>
                </div>
                <div class="col-md-6 text-white">
                    <h1 class="display-5 fw-bolder f-brandSchool">Target Kami</h1>
                    <hr class="border border-white w-100 mx-auto">
                    <ol class="fs-6 list-numbered f-patrick-hand-regular">
                        <li>
                            <h4 class="">Berkarakter yang baik</h4>
                            Mendidik dan membentuk anak-anak untuk memiliki karakter yang baik berdasarkan Kasih Kristus sebagai dasar dari iman Kekristenan sekolah kami
                        </li>
                        <li>
                            <h4>Berbudi Baik:</h4>
                            Mendidik dan menjadikan anak-anak kami memiliki perilaku dan perbuatan yang baik, sehingga apa yang terpancar keluar dari perilaku dan perbuatan mereka mencerminkan karakter pribadi yang baik.
                        </li>
                        <li>
                            <h4>Meningkatkan Kemampuan:</h4>
                            Mengembangkan kemampuan otak anak-anak dalam dunia pendidikan sehingga mereka siap untuk melanjutkan pendidikan dijenjang yang lebih lanjut.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="bg-warning py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-dark">Copyright &copy; King's Kid 2024</div>
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

    <!-- boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    </script>
</body>

</html>