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
    <main class="d-flex bg-danger">
        <div class="container-fluid vw-100 vh-100 py-3">
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
                        <!-- sidebar div -->
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
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#Profile" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown">Profile</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="history.php">Sejarah</a></li>
                                        <li><a class="dropdown-item active" href="visi.php">Visi & Misi</a></li>
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

            <!-- penjelasan visi -->
            <header class="py-5 tk-bgvisi" style="--background: url('../assets/9307750.png')">
                <div class="container my-5 align-items-end">
                    <div class="row align-items-end text-center justify-content-center">
                        <h4 class="display-5 lead text-white mt-5">TK King's Kidz</h4>
                        <h1 class="display-1 fw-bolder"><span class="text-white d-inline ">Visi & Misi</span></h1>
                    </div>
                    <div class="row align-items-end text-center text-white d-flex justify-content-center display-5 mx-5 py-5 px-5">
                        <p class="fs-3">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis ipsa sit harum illo beatae. Tempora dolore eveniet optio aut fugiat consectetur eaque quod qui pariatur? Quisquam itaque similique dicta ullam.
                        </p>
                        <p class="fs-3">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam quas rerum, velit voluptatum in harum iure non accusantium quis porro corporis ab, sit veritatis eum natus magni laborum reiciendis eveniet.
                        </p>
                    </div>
                </div>
            </header>
        </div>
    </main>

    <!-- visi dan misi -->
    <div class="py-5 px-5 bg-light">
        <!-- halaman penjelasan sejarah -->
        <div class="container-fluid tk-bgvisi" style="--background: url('../assets/9307750 - Copy.png')">
            <div class="row d-flex justify-content-center align-items-start text-start mb-3">
                <div class="col-4 px-5 py-5">
                    <h1 class="display-1 fw-bolder mb-0"><span class="text-gradient d-inline">Visi</span></h1>
                    <hr class="border border-danger opacity-50 w-25">
                    <p class="text-muted fs-6">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis amet excepturi, quaerat consequatur error esse maiores in cupiditate sed nemo iure fugit qui veritatis perferendis voluptas accusamus. Dolor, optio totam! Lorem ipsum dolor sit amet consectetur adipisicing elit. A eligendi dolorem nesciunt eum amet sunt pariatur voluptatibus, architecto deserunt vel, aspernatur laudantium! Sed, qui obcaecati quibusdam molestias saepe deserunt suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, impedit debitis? Earum voluptatibus itaque eos cupiditate blanditiis optio voluptates magnam omnis voluptate. Hic ipsa commodi natus earum praesentium rem ullam.
                    </p>
                </div>
                <div class="col-4 px-5 py-5">
                    <h1 class="display-1 fw-bolder mb-0"><span class="text-gradient d-inline">Misi</span></h1>
                    <hr class="border border-danger opacity-50 w-25">
                    <p class="lead">
                    <ol class="fs-6 list-numbered">
                        <li>Mengembangkan solusi teknologi canggih.</li>
                        <li>Menyediakan lingkungan kerja yang inspiratif.</li>
                        <li>Menciptakan nilai tambah bagi pelanggan dan pemangku kepentingan.</li>
                        <li>Mengembangkan Kreativitas dan Inovasi</li>
                        <li>Membangun Dasar Pendidikan Berkualitas</li>
                        <li>Menanamkan Nilai-Nilai Moral dan Etika</li>
                        <li>Mengintegrasikan Teknologi dalam Pembelajaran</li>
                        <li>Menciptakan Lingkungan Ramah Anak</li>
                        <li>Mendorong Pembelajaran Kolaboratif</li>
                        <li>Mengembangkan Keterampilan Sosial dan Emosional</li>
                        <li>Memelihara Kepekaan terhadap Keanekaragaman</li>
                        <li>Menyediakan Lingkungan Pembelajaran yang Fleksibel</li>
                        <li>Melibatkan Orang Tua dalam Pembelajaran</li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- nilai -->
    <div class="bg-danger py-5 mt-auto">
        <div class="container-fluid">
            <div class="row mt-2 ms-auto">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-white d-inline">Nilai-Nilai Yang Dibawa</span></h2>
                    <hr class="border border-white w-50 mx-auto">
                </div>
            </div>
            <div class="row justify-content-center align-items-start">
                <div class="col-md-4 logoTKhover">
                    <img class="img-fluid" style="height: 50vh; width: auto" src="assets/8728841.png" alt="">
                    <h1 class="display-2 fw-bolder text-white ms-5"><em>King's Kidz</em></h1>
                </div>
                <div class="col-md-5">
                    <div class="text-white pt-5">
                        <h1 class="display-5 fw-bolder">Penjelasan</h1>
                        <ol class="fs-6 list-numbered">
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
    <script src="js/style.js"></script>
</body>

</html>