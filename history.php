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
    <title>Sejarah King's Kidz</title>
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0 bg-danger">
        <div class="container-fluid py-3 tk-bgimage" style="--background: url('../assets/forHistory.png')">
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
                                    <a class="nav-link active" href="history.php">Sejarah</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="visi.php">Visi & Misi</a>
                                </li>

                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="perihalkami.php">Tentang kami</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="kontak.php">Kontak</a>
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

            <!-- penjelasan sejarah -->
            <header class="py-5">
                <div class="container-fluid my-5">
                    <div class="row text-center text-lg-start align-items-center justify-content-center">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <img src="assets/8728865.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4">
                            <h4 class="display-5 lead text-gradient-gold-with-shadow mt-3 mt-lg-0 f-brandSchool">TK King's Kidz</h4>
                            <h1 class="display-1 fw-bolder"><span class="text-gradient-gold-with-shadow d-inline f-brandSchool">Sejarah</span></h1>
                            <div class="text-white">
                                <p class="fs-2 f-patrick-hand-regular">
                                    Growing In Excellent
                                </p>
                                <p class="lead">
                                    Kami mengundang Anda untuk menjelajahi setiap momen, kejadian, dan pencapaian yang telah membentuk identitas dan perjalanan kami hingga saat ini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <!-- contact -->
        <div class="bg-warning" style=" height: 80px; width: auto">
            <div class="container-fluid">
                <div class="row justify-content-center bg-danger">
                    <div class="col mt-2 text-white text-end">
                        &nbsp
                    </div>
                    <div class="col">
                        &nbsp
                    </div>
                </div>
            </div>
        </div>

        <!-- history -->
        <section class="bg-light py-5 tk-bgimage" style="--background: url('../assets/8829751.png')">
            <!-- halaman penjelasan sejarah -->
            <div class="container my-5 px-5">
                <div class="row text-left justify-content-start mb-3">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient-color-with-shadow d-inline f-brandSchool">Sejarah</span></h1>
                    <hr class="border border-danger opacity-50 w-25">
                </div>
                <div class="row d-flex">
                    <div class="col-lg-8 ps-2" id="contentHistory">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <p class="text-muted">
                                    King's Kidz didirikan pada bulan Oktober 2008. Kami memulai tahun ajaran baru kami cukup mepet di awal Januari 2009. Ini merupakan kali pertama King's Kidz menempati lokasi, bertempat di Satelit Indah. Pembentukan sekolah ini berawal dari visi pribadi Ibu Ruth Julia selaku Founder yang berdasarkan pengalaman pribadi beliau yang berasal dari keluarga dengan keterbatasan keuangan. Sepanjang masa SMA dan kuliah, beliau bertemu dengan individu baik hati yang memberikan beasiswa, dan yang terakhir memberi beasiswa kuliah hingga selesai.
                                </p>
                                <p class="text-muted">
                                    Sebagai ungkapan terima kasih, beliau bercita-cita membuat sekolah gratis. Dari situlah muncul visi untuk membuat sekolah gratis, King's Kidz. Meskipun hanya Taman kanak-kanak, harapan beliau adalah bahwa orang tua dapat meringankan beban mereka terkait pendidikan anak-anak mereka.
                                </p>
                                <p class="text-muted">
                                    Mungkin bertanya-tanya mengapa "King's Kidz"? Dengan nama ini, kami ingin menyampaikan gagasan bahwa anak-anak ini adalah bangsawan dan berharga di mata TUHAN. Meskipun gratis, komitmen kami adalah memberikan pendidikan terbaik dengan fasilitas yang sangat baik. "Gratis" tidak berarti rendah kualitas. Sejak awal, visi kami adalah memberikan pendidikan terbaik dengan fasilitas berkualitas, bukan fasilitas rendahan hanya karena gratis. Inilah inti dari King's Kidz.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 logoTKhover">
                        <div class="container justify-content-center">
                            <!-- <img class="img-fluid" style="height: 50vh; width: auto" src="assets/image/logo-fulllvers.png" alt="owner tk kings kidz"> -->
                            <div class="card shadow-lg border-1" style="border-radius: 50px;">
                                <div class="card-body">
                                    <div class="ratio ratio-1x1">
                                        <img src="assets/image/logo-fulllvers.png" class="card-img-top img-fluid" alt="Logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- timeline -->
    <div class="container my-5">
        <div class="row text-center pb-5">
            <h1 class="display-5 fw-bolder"><span class="text-gradient d-inline f-brandSchool">Kilas Balik TK King's Kidz</span></h1>
            <nav>
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-timeline-tab" data-bs-toggle="tab" data-bs-target="#nav-timeline" type="button" role="tab" aria-controls="nav-timeline" aria-selected="true">
                        <h5 class="fw-bolder"><span class="text-gradient d-inline f-brandSchool">Timeline King's Kidz</span></h5>
                    </button>
                    <button class="nav-link" id="nav-kilasimg-tab" data-bs-toggle="tab" data-bs-target="#nav-kilasimg" type="button" role="tab" aria-controls="nav-kilasimg" aria-selected="false">Kegiatan Sebelumnya</button>
                </div>
            </nav>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-timeline" role="tabpanel" aria-labelledby="nav-timeline-tab">
                <div class="row d-flex justify-content-end">
                    <ul class="timeline ms-auto">
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-item-content">
                                <h3>Pembentukan Organisai</h3>

                                <p>Description of Event 1 goes here. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt repellendus facilis cumque commodi neque. Repudiandae cumque maxime corporis cum. Tenetur nesciunt eius voluptatem sequi harum quidem veniam architecto iusto voluptatibus.</p>
                            </div>
                            <div class="timeline-item-date mx-3">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="timeline-item-img">
                                            <img class="profile-img" src="https://cmsv2-assets.apptegy.net/uploads/9347/file/909955/cb4e5c0d-f9d6-4b98-97e8-e55704fb6887.jpeg" alt="Event 1 Image">
                                        </div>
                                        12 January 2011
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-item-content">
                                <h3>Pembangunan Bangunan Sekolah</h3>

                                <p>Description of Event 2 goes here. Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, doloribus sapiente earum, repudiandae rem non vitae minima exercitationem vel quam facilis placeat ipsa aliquid iste id consequuntur. Hic, totam autem!</p>
                            </div>
                            <div class="timeline-item-date mx-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="timeline-item-img">
                                            <img class="profile-img" src="https://cmsv2-assets.apptegy.net/uploads/9347/file/909955/cb4e5c0d-f9d6-4b98-97e8-e55704fb6887.jpeg" alt="Event 2 Image">
                                        </div>
                                        28 Oktober 2012
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-item-content">
                                <h3>PPDB Pertama</h3>

                                <p>Description of Event 2 goes here. Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, doloribus sapiente earum, repudiandae rem non vitae minima exercitationem vel quam facilis placeat ipsa aliquid iste id consequuntur. Hic, totam autem!</p>
                            </div>
                            <div class="timeline-item-date mx-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="timeline-item-img">
                                            <img class="profile-img" src="https://cmsv2-assets.apptegy.net/uploads/9347/file/909955/cb4e5c0d-f9d6-4b98-97e8-e55704fb6887.jpeg" alt="Event 2 Image">
                                        </div>
                                        28 Mei 2013
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-kilasimg" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="gallery">
                            <img src="assets/image/P1070848.JPG" alt="Image 1">
                            <div class="overlay">
                                <h4>Craft - Membuat Pohon</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="gallery">
                            <img src="assets/image/IMG20230202101241.jpg" alt="Image 2">
                            <div class="overlay">
                                <h4>Craft - Mengecat dengan telapak tangan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="gallery">
                            <img src="assets/image/IMG-20230119-WA0005.jpg" alt="Image 3">
                            <div class="overlay">
                                <h4>Tematik - Ikan Laut</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Add more images as needed -->
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="gallery">
                            <img src="assets/image/20171212_120710.jpg" alt="Image 1">
                            <div class="overlay">
                                <h4>Outbond - Natal</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="gallery">
                            <img src="assets/image/20171214_102254.jpg" alt="Image 2">
                            <div class="overlay">
                                <h4>Outbond - Dodgeball</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="gallery">
                            <img src="assets/image/3.jpg" alt="Image 3">
                            <div class="overlay">
                                <h4>Science - Balap Kertas Tiup</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Add more images as needed -->
                </div>
            </div>
        </div>
    </div>

    <!-- penjelasan founder -->
    <section class="py-5 bg-light">
        <div class="container px-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient-color-with-shadow d-inline f-brandSchool">Founder</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex align-items-center">
                        <div class="px-5">
                            <h2 class="fw-bolder f-patrick-hand-regular">Pendiri & Pemilik</h2>
                            <div class="text-muted f-plus-jakarta mission-list">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis natus nesciunt deleniti sit veniam adipisci? Non rem reiciendis qui iusto neque soluta id, quia obcaecati in quo facilis dolores atque. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem, consequuntur, quo autem temporibus molestiae eius soluta accusamus eum excepturi ducimus consequatur minus sunt. Dolores eius earum distinctio atque, voluptatibus repellendus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center mt-5">
                    <div class="card shadow-xl border-0" style="border-radius: 50px;">
                        <div class="card-body">
                            <div class="">
                                <img src="assets/image/Bu_RutJulia.png" class="card-img-top img-fluid" alt="Founder TK King's Kidz">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <!-- kunjungi instagram  -->
    <section class="py-5 bg-gradient-warning-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="fs-4 fw-bolder">Kunjungi instagram kami untuk menjelajah kegiatan kami lebih lanjut <br><br>
                    <a href="" class="text-white fs-1"><i class="bi bi-instagram"></i></a>
                </h2>
                <!-- <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a> -->
            </div>
        </div>
    </section>

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

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- javascript page -->
    <script src="js/style.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>