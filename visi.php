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
                                    <a class="nav-link active" href="visi.php">Visi & Misi</a>
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
    <div class="h-100">
        <section class="container-fluid">
            <div class="row">
                <!-- Bagian kiri -->
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
                <!-- Bagian kanan -->
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
                            <div class="tab-pane fade show active" id="visi" role="tabpanel" aria-labelledby="visi-tab" style="border-radius: 50px;">
                                <div class="mission-list">
                                    <p class="text-muted f-patrick-hand-regular fs-4">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis amet excepturi, quaerat consequatur error esse maiores in cupiditate sed nemo iure fugit qui veritatis perferendis voluptas accusamus. Dolor, optio totam! Lorem ipsum dolor sit amet consectetur adipisicing elit. A eligendi dolorem nesciunt eum amet sunt pariatur voluptatibus, architecto deserunt vel, aspernatur laudantium! Sed, qui obcaecati quibusdam molestias saepe deserunt suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, impedit debitis? Earum voluptatibus itaque eos cupiditate blanditiis optio voluptates magnam omnis voluptate. Hic ipsa commodi natus earum praesentium rem ullam.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="misi-tab" style="border-radius: 50px;">
                                <div class="mission-list">
                                    <ol class="fs-4 list-numbered f-brandSchool">
                                        <li class="text-muted">Mengembangkan solusi teknologi canggih.</li>
                                        <li class="text-muted">Menyediakan lingkungan kerja yang inspiratif.</li>
                                        <li class="text-muted">Menciptakan nilai tambah bagi pelanggan dan pemangku kepentingan.</li>
                                        <li class="text-muted">Mengembangkan Kreativitas dan Inovasi</li>
                                        <li class="text-muted">Membangun Dasar Pendidikan Berkualitas</li>
                                        <li class="text-muted">Menanamkan Nilai-Nilai Moral dan Etika</li>
                                        <li class="text-muted">Mengintegrasikan Teknologi dalam Pembelajaran</li>
                                        <li class="text-muted">Menciptakan Lingkungan Ramah Anak</li>
                                        <li class="text-muted">Mendorong Pembelajaran Kolaboratif</li>
                                        <li class="text-muted">Mengembangkan Keterampilan Sosial dan Emosional</li>
                                        <li class="text-muted">Memelihara Kepekaan terhadap Keanekaragaman</li>
                                        <li class="text-muted">Menyediakan Lingkungan Pembelajaran yang Fleksibel</li>
                                        <li class="text-muted">Melibatkan Orang Tua dalam Pembelajaran</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- nilai -->
    <div class="bg-danger py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4 text-center">
                    <img class="img-fluid" style="height: 50vh; width: auto" src="assets/8728841.png" alt="">
                    <h1 class="display-2 fw-bolder text-white mt-4 f-brandSchool"><em>King's Kidz</em></h1>
                </div>
                <div class="col-md-6 text-white">
                    <h1 class="display-5 fw-bolder f-brandSchool">Nilai-Nilai Yang Dibawa</h1>
                    <hr class="border border-white w-50 mx-auto">
                    <ol class="fs-6 list-numbered f-patrick-hand-regular">
                        <li>
                            <h4 class="">Semua Anak Penting:</h4>
                            Di TK King's Kidz, setiap anak dianggap istimewa. Tak peduli dari mana mereka berasal atau kondisi ekonomi keluarganya, semua anak punya hak untuk belajar dengan senang.
                        </li>
                        <li>
                            <h4>Adil untuk Semua:</h4>
                            Kita percaya bahwa semua anak memiliki hak yang sama untuk belajar dan berkembang. Di sini, tidak ada perbedaan perlakuan berdasarkan keadaan ekonomi.
                        </li>
                        <li>
                            <h4>Anak Raja dalam Kristus:</h4>
                            Kami mengajarkan anak-anak bahwa mereka adalah anak-anak raja dalam Kristus Yesus. Artinya, setiap anak dihargai dan dicintai oleh Tuhan tanpa memandang apa pun.
                        </li>
                        <li>
                            <h4>Belajar yang Menyenangkan:</h4>
                            Di TK King's Kidz, kita membuat belajar jadi menyenangkan. Anak-anak belajar banyak hal baik, seperti berhitung dan membaca, sambil juga belajar tentang kasih sayang dan kerja sama.
                        </li>
                        <li>
                            <h4>Berkembang sebagai Pribadi Baik:</h4>
                            Selain pelajaran akademis, kita juga mengajarkan anak-anak menjadi pribadi yang baik. Mereka belajar tentang kejujuran, saling menghormati, dan bagaimana bekerja sama.
                        </li>
                        <li>
                            <h4>Setiap Anak Unik:</h4>
                            Kami bangga pada keunikan setiap anak. Masing-masing punya kelebihan dan bakat sendiri, dan kita mendukung mereka menemukan dan mengembangkan potensi terbaik mereka.
                        </li>
                    </ol>
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

    <!-- bootstrap js -->
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