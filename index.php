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
                    <a id="texttransisi" class="navbar-brand text-white fs-4" href="index.php"><img src="assets/image/Logo_KingsKid.png" alt="Bootstrap" width="60" height="45">TK King's Kidz</a>
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
                                    <a id="texttransisi" class="nav-link text-white active" aria-current="page" href="index.php">Beranda</a>
                                </li>
                                <!-- Profile dropdown -->
                                <!-- <li class="nav-item dropdown">
                                    <a id="texttransisi" class="nav-link text-white dropdown-toggle" href="#Profile" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown">Profile</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href=""></a></li>
                                        <li><a class="dropdown-item" href=""></a></li>
                                        <li><a class="dropdown-item" href=""></a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-white" href="history.php">Sejarah</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-white" href="visi.php">Visi & Misi</a>
                                </li>

                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-white" href="perihalkami.php">Tentang kami</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a id="texttransisi" class="nav-link text-white" href="kontak.php">Kontak</a>
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
                                <div class="rounded-pill mb-3">
                                    <div class="badge bg-gradient-warning-to-secondary fs-5">
                                        Lembaga Pendidikan
                                    </div>
                                </div>
                                <h1 class="f-brandSchool display-1 mb-3">TK King's Kidz</h1>
                                <div class="rounded-pill mb-3">
                                    <div class="badge bg-light fs-5">
                                        <h4 class="f-textSchool text-gradient">Growing in Excellent</h4>
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

        <!-- contact -->
        <div class="bg-body-tertiary" style=" height: 80px; width: auto">
            <div class="container-fluid">
                <div class="row justify-content-center bg-warning">
                    <div class="col mt-2 text-dark text-end">
                        <p><i class="bi bi-telephone-fill"></i> (0331) 4350050 <i class="bi bi-telephone-fill"></i> (0331) 4350327 <i class="bi bi-telephone-fill"></i> (031) 99446671 <i class="bi bi-telephone-fill"></i> 08123-0033-880 </p>
                    </div>
                    <div class="col">
                        <ul class="text-dark text-end social mt-2">
                            <li class="social-shared"> <i class="bi bi-facebook"></i> </li>
                            <li class="social-shared"> <i class="bi bi-instagram"></i> </li>
                            <li class="social-shared"> <i class="bi bi-twitter-x"></i> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- sekilas -->
        <section class="bg-light py-5 position-relative tk-bgimage" style="--background: url('../assets/Artboard1.png')" id="About">
            <div class=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-start text-wrap my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline f-brandSchool">Sekilas</span></h2>
                            <p class="text-muted f-plus-jakarta">TK King's Kid adalah sebuah lembaga pendidikan non-profit yang berkomitmen untuk memberikan akses pendidikan berkualitas bagi masyarakat menengah ke bawah. Sebagai lembaga yang didedikasikan untuk keberlanjutan dan pemerataan pendidikan, TK King's Kid berusaha memberikan peluang belajar yang setara bagi semua anak, tanpa memandang latar belakang ekonomi. Organisasi ini beroperasi dengan tujuan mendasar untuk mengurangi kesenjangan pendidikan dan memberikan dasar yang kuat bagi perkembangan anak-anak.</p>
                            <p class="text-muted f-plus-jakarta">Dengan menggunakan pendekatan yang holistik dan inklusif, TK King's Kid tidak hanya memberikan ajaran akademis, tetapi juga memperhatikan aspek-aspek perkembangan sosial dan emosional anak-anak. Kurikulum yang disusun dengan cermat didesain untuk merangsang rasa ingin tahu dan kreativitas anak-anak, sambil membangun nilai-nilai moral yang kuat.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center my-5">
                        <img class="img-fluid" src="assets/forhistory - def.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center mt-4">
                        <div class="fs-2 gap-4">
                            <a class="text-gradient" href="#!"><i class="bi bi-facebook"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-instagram"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-twitter-x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- sekolah kami -->
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
        <div class="container bg-light mt-5">
            <div class="card shadow border-0 card-slider">
                <div class="text-center my-5">
                    <h2 class="display-5 card-title fw-bolder"><span class="text-gradient d-inline">Testimoni</span></h2>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/800x400" class="" alt="Slide 1">
                            <div class="d-none" data-title="Anak saya berkembang luar biasa" data-caption="Anak saya telah menunjukkan perkembangan yang luar biasa sejak bergabung dengan TK Kings Kidz. Saya sangat senang melihat betapa bahagianya anak saya setiap hari, dan saya juga melihat bahwa ia menjadi lebih maju dan unggul dibandingkan dengan anak-anak sebayanya di sekitar rumah kami. -- "></div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/800x400" class="" alt="Slide 2">
                            <div class="d-none" data-title="Anak jadi aktif dan suka sekolah" data-caption="Jadi semakin aktif dan senang membantu di sekitar rumah sejak bergabung dengan TK Kings Kidz. Selain itu, semangat belajarnya juga semakin meningkat setiap harinya. Saya sangat bersyukur melihat perkembangannya. -- Mom Djanuar"></div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/800x400" class="" alt="Slide 3">
                            <div class="d-none" data-title="Dari pendiam jadi aktif dan ekspresif" data-caption="Saya sangat bersyukur melihat perubahan positif yang dialami anak saya sejak bergabung dengan TK Kings Kidz. Anak saya yang dulunya pendiam kini menjadi lebih berani, aktif, dan mandiri. Mereka telah belajar untuk bergaul dan mengekspresikan diri dengan lebih baik. Ini adalah sebuah perubahan yang luar biasa, dan saya sangat senang dengan perkembangan anak saya. - Mom Rein"></div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title" id="carouselTitle"></h5>
                    <p class="card-text" id="carouselCaption"></p>
                </div>
            </div>
        </div>
        <section class="py-5 bg-white">

        </section>

        <!-- kerjasama -->
        <div class="bg-white py-5 my-5" id="Partner">
            <div class="container">
                <div class="row justify-content-center text-center py-5 mt-auto">
                    <h2 class="display-4 fw-bolder mb-4">Kerjasama</h2> 
                    <hr class="border border-warning opacity-50 w-50">
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <img class="img-thumbnail border-0" src="assets/image/yayasan-generasi-peduli-logo.png" width="200" height="200" alt="Partner 1">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <img class="img-thumbnail border-0" src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg"  width="200" height="200" alt="Partner 2">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <img class="img-thumbnail border-0" src="https://ih1.redbubble.net/image.3259860502.3137/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg"  width="200" height="200" alt="Partner 3">
                            </div>
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
    <script>
        $(document).ready(function() {
            // Fungsi untuk mengatur isi card body
            function setCardBodyContent() {
                // Dapatkan carousel item yang aktif saat pertama kali halaman dimuat
                var $activeCarouselItem = $('#carouselExampleControls .carousel-item.active');

                // Dapatkan nilai data-title dari carousel item yang aktif
                var title = $activeCarouselItem.find('.d-none').data('title');

                // Dapatkan nilai data-caption dari carousel item yang aktif
                var caption = $activeCarouselItem.find('.d-none').data('caption');

                // Tetapkan nilai data-title ke elemen dengan ID carouselTitle
                $('#carouselTitle').css('font-weight', 'bold').text(title);

                // Tetapkan nilai data-caption ke elemen dengan ID carouselCaption
                $('#carouselCaption').text(caption);
            }

            // Panggil fungsi setCardBodyContent saat dokumen siap
            setCardBodyContent();

            // Jalankan kode ketika carousel berubah slide
            $('#carouselExampleControls').on('slid.bs.carousel', function() {
                setCardBodyContent();
                // Dapatkan carousel item yang aktif
                var $activeCarouselItem = $(this).find('.carousel-item.active');

                // Dapatkan nilai data-caption dari carousel item yang aktif
                var title = $activeCarouselItem.find('.d-none').data('title');
                var caption = $activeCarouselItem.find('.d-none').data('caption');

                // Tetapkan nilai data-caption ke elemen dengan ID carouselCaption
                $('#carouselTitle').css('font-weight','bold').text(title);
                $('#carouselCaption').text(caption);
            });
        });
    </script>
</body>

</html>