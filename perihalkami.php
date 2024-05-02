<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css" rel="stylesheet">

    <!-- style page -->
    <link rel="stylesheet" href="css/style.css">
    <title>Tentang King's Kidz</title>
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0 bg-warning">
        <div class="container-fluid py-3 tk-bgimage" style="--background: url('../assets/line.png')">
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
                                    <a id="texttransisi" class="nav-link text-dark" aria-current="page" href="index.php">Beranda</a>
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

            <!-- penjelasan tentang kami -->
            <header class="py-5">
                <div class="container-fluid my-5">
                    <div class="row text-center text-lg-start align-items-center justify-content-center">
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <img src="assets/10135474.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-4">
                            <h4 class="display-6 lead text-gradient-scarlet-with-shadow f-brandSchool mt-3 mt-lg-0">TK King's Kidz</h4>
                            <h1 class="display-1 fw-bolder"><span class="f-brandSchool text-gradient-scarlet-with-shadow d-inline">Tentang Kami</span></h1>
                            <div class="text-dark">
                                <p class="fs-2 f-patrick-hand-regular">
                                    Growing In Excellent
                                </p>
                                <p class="lead f-textSchool">
                                    Jelajahi lebih lanjut! Kami mengundang Anda untuk menyelami dunia kami dan menemukan lebih banyak tentang apa yang kami tawarkan. Dari layanan kami hingga informasi terbaru, kami memiliki segala yang Anda butuhkan untuk membuat pengalaman Anda lebih menarik dan bermanfaat. Segera temukan lebih banyak hal yang menarik dan bergabunglah dalam perjalanan bersama kami!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </main>

    <!-- program yang kami bawa -->
    <section class="py-5 bg-light">
        <div class="container-fluid px-5 my-5">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="text-gradient fw-bolder mb-0">Program yang kami bawa :</h2>
            </div>
            <!-- Experience Card 1-->
            <div class="card shadow border-0 rounded-4 mb-5">
                <div class="card-body p-5">
                    <div class="row align-items-center gx-5">
                        <div class="col-lg-4 col-md-6 text-center text-lg-start mb-4 mb-lg-0 tk-bgabout" style="--background: url('../assets/4431120.png')">
                            <div class="bg-light p-4 rounded-4">
                                <div class="text-danger fs-1 fw-bolder mb-2">TK King's Kidz</div>
                                <div class="small fw-bolder">Character Building</div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="lead text-muted f-plus-jakarta">
                            TK. Kings Kidz memiliki program yang sejalan dengan program Pemerintah khususnya dalam hal  kurikulum dari Dinas Pendidikan. TK. Kings Kidz juga melakukan beberapa penambahan dalam program pendidikan yang dijalankan dengan tujuan untuk menyesuaikan dalam pencapaian target yang kami harapkan sehingga anak-anak bertumbuh menjadi pribadi yang berkarakter dan luar biasa.
                            </div><br>
                            <div class="lead text-muted f-plus-jakarta">
                            Setiap tahun TK. Kings Kidz selalu berkerjasama dengan pihak-pihak dari luar sekolah untuk melalukan kegiatan pengembangan dan pelatihan yang bertujuan untuk meningkatkan kualitas dari sekolah kami, seperti berkerjasama dengan UK. Petra atau mendatangkan Trainer-trainer terbaik dalam bidang pendidikan dan masih banyak lagi. Semua itu kami lakukan untuk menjadikan sekolah berkembang maju dan terus berinovasi dalam dunia pendidikan.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- panel tentang sekolah kegiatan dan fasilitas -->
    <!-- <section class="py-5 bg-white">
        <div class="container px-5 my-5">
            <div class="row text-center justify-content-center mb-3">
                <h1 class="text-gradient fw-bolder mb-0">Sekolah Kami</h1>
                <hr class="border border-danger opacity-50 w-25">
            </div>
            <ul class="nav nav-tabs nav-fill">
                <li class="nav-item">
                    <a class="nav-link active rounded" id="tab1" data-bs-toggle="tab" href="#content1"><span class="fs-2 fw-bolder">Fasilitas</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded" id="tab2" data-bs-toggle="tab" href="#content2"><span class="fs-2 fw-bolder">Kegiatan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded" id="tab3" data-bs-toggle="tab" href="#content3"><span class="fs-2 fw-bolder">Prestasi</span></a>
                </li>
            </ul>
            <div class="tab-content my-5 mx-2">
                <div class="tab-pane fade show active" id="content1">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque labore similique iure modi earum ratione non sint! Dolore fugiat cum numquam blanditiis dolorum. Quasi magni assumenda inventore deserunt quidem? Qui.
                </div>
                <div class="tab-pane fade" id="content2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, possimus. Et similique cum mollitia deleniti, autem, distinctio pariatur quaerat porro assumenda deserunt ea, possimus reiciendis? Cupiditate consectetur quia officia voluptatem?
                </div>
                <div class="tab-pane fade" id="content3">
                    <h3>Isi Konten Tab 3</h3>
                    <p>Ini adalah konten untuk Tab 3.</p>
                </div>
            </div>

        </div>
    </section> -->
    <div class="container py-5">
        <div class="row text-center justify-content-center mb-3">
            <h1 class="text-gold display-1 fw-bolder mb-0">Sekolah Kami</h1>
            <hr class="border border-warning opacity-50 w-25">
        </div>
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="py-4 mb-4 fst-italic text-gradient border-bottom">
                    Fasilitas
                </h3>

                <div class="container py-5">
                    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20240123_122154.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20240123_122154.jpg" alt="Fasilitas 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20240123_122504.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20240123_122504.jpg" alt="fasilitas">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20240123_122721.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20240123_122721.jpg" alt="fasilitas">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20240123_123021.jpg" class="lightbox" data-gallery="gallery2">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20240123_123021.jpg" alt="fasilitas2">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20240123_123128.jpg" class="lightbox" data-gallery="gallery2">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20240123_123128.jpg" alt="fasilitas2">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20240129_092054.jpg" class="lightbox" data-gallery="gallery2">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20240129_092054.jpg" alt="fasilitas2">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end fasilitas -->

                <h3 class="py-4 mb-4 fst-italic text-gradient border-bottom">
                    Kegiatan
                </h3>
                <div class="container py-5">
                    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20151102_085538.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20151102_085538.jpg" alt="Fasilitas 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20151102_085026.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20151102_085026.jpg" alt="Fasilitas 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20151102_100149.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20151102_100149.jpg" alt="Fasilitas 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20230126_141255.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20230126_141255.jpg" alt="Fasilitas 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20231214_083833.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20231214_083833.jpg" alt="Fasilitas 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20231214_085449.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20231214_085449.jpg" alt="Fasilitas 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG_20240118_112455.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG_20240118_112455.jpg" alt="Fasilitas 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG-20230228-WA0009.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG-20230228-WA0009.jpg" alt="Fasilitas 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <a href="assets/image/IMG-20230228-WA0011.jpg" class="lightbox" data-gallery="gallery1">
                                        <img class="img-fluid rounded" src="assets/image/IMG-20230228-WA0011.jpg" alt="Fasilitas 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end kegiatan -->
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="card shadow rounded">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder text-danger fst-italic">Ikuti Kami</h5>
                            <p class="card-text">
                                Dapatkan informasi terbaru dari kami dengan mengunjungi dan menjelajahi akun media sosial kami di platform yang tertera di bawah ini.
                            </p>
                            <div class="d-flex justify-content-start fs-2 gap-4">
                                <a class="text-gradient" href="#!"><i class="bi bi-facebook"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-instagram"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-twitter-x"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="my-5">
                        <h4 class="fst-italic">Recent posts</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://www.instagram.com/p/C0gTdUhh_GU/?igsh=ZTN2cWh4c28waDV1" target="_blank">
                                    <img src="assets/image/407567194_1355072038450892_2781676426673388221_n.jpeg" alt="Thumbnail 1" class="me-3 rounded" width="100" height="100">
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Berbagi kebahagiaan😘 Thankyou @yuanagoz berkat kado natal sepatunya yang super keren @booplay.co
                                            Tuhan Yesus Memberkati🙏😇.
                                            #ruthjuliaministry #tkkingskidz</h6>
                                        <small class="text-body-secondary">December 6, 2023</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://www.instagram.com/p/C0TVhkyhGqG/?igsh=MTBkMWpiaTJvdHllbg==" target="_blank">
                                    <img src="assets/image/404978114_1689351408223724_2126124452063967764_n.jpeg" alt="Thumbnail 2" class="me-3 rounded" width="100" height="100">
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Terimakasih kakak2 mahasiswa @berita_ukpetra @lifeatpcu juga bu @mariana_fw sudah berbagi berkat pengajaran kepada anak2 King's Kidz💕.
                                            #tkkingskidz #ruthjuliaministry #kindergarten #paperbagpuppet #funrocketracegame</h6>
                                        <small class="text-body-secondary">December 1, 2023</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://www.instagram.com/reel/CzWQaHZB50N/?igsh=Z3pzOWpsMm1sb21o" target="_blank">
                                    <img src="assets/image/399672683_865645001721336_937377096448398539_n.jpg" alt="Thumbnail 3" class="me-3 rounded" width="100" height="100">
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Field Trip "Tugu Pahlawan Surabaya"💕

                                            #tugupahlawansurabaya #fieldtrip #ruthjuliaministry #kindergarten #kingskidz
                                        </h6>
                                        <small class="text-body-secondary">November 7, 2023</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>
    <script>
        // Inisialisasi Lightbox
        baguetteBox.run('.lightbox');
    </script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- javascript page -->
    <!-- <script src="js/style.js"></script> -->
</body>

</html>