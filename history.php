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

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
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
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#Profile" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown">Profile</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item active" href="history.php">Sejarah</a></li>
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
        </div>

        <!-- history -->
        <section class="bg-light py-5">
            <!-- halaman penjelasan sejarah -->
            <div class="container my-5 px-5">
                <div class="row text-left justify-content-start mb-3">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Sejarah</span></h1>
                    <hr class="border border-danger opacity-50 w-25">
                </div>
                <div class="row d-flex">
                    <div class="col-lg-8 ps-2" id="contentHistory">
                        <p class="text-muted">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis amet excepturi, quaerat consequatur error esse maiores in cupiditate sed nemo iure fugit qui veritatis perferendis voluptas accusamus. Dolor, optio totam! Lorem ipsum dolor sit amet consectetur adipisicing elit. A eligendi dolorem nesciunt eum amet sunt pariatur voluptatibus, architecto deserunt vel, aspernatur laudantium! Sed, qui obcaecati quibusdam molestias saepe deserunt suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, impedit debitis? Earum voluptatibus itaque eos cupiditate blanditiis optio voluptates magnam omnis voluptate. Hic ipsa commodi natus earum praesentium rem ullam.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis amet excepturi, quaerat consequatur error esse maiores in cupiditate sed nemo iure fugit qui veritatis perferendis voluptas accusamus. Dolor, optio totam! Lorem ipsum dolor sit amet consectetur adipisicing elit. A eligendi dolorem nesciunt eum amet sunt pariatur voluptatibus, architecto deserunt vel, aspernatur laudantium! Sed, qui obcaecati quibusdam molestias saepe deserunt suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, impedit debitis? Earum voluptatibus itaque eos cupiditate blanditiis optio voluptates magnam omnis voluptate. Hic ipsa commodi natus earum praesentium rem ullam.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis amet excepturi, quaerat consequatur error esse maiores in cupiditate sed nemo iure fugit qui veritatis perferendis voluptas accusamus. Dolor, optio totam! Lorem ipsum dolor sit amet consectetur adipisicing elit. A eligendi dolorem nesciunt eum amet sunt pariatur voluptatibus, architecto deserunt vel, aspernatur laudantium! Sed, qui obcaecati quibusdam molestias saepe deserunt suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, impedit debitis? Earum voluptatibus itaque eos cupiditate blanditiis optio voluptates magnam omnis voluptate. Hic ipsa commodi natus earum praesentium rem ullam.
                        </p>
                    </div>
                    <div class="col-lg-4 logoTKhover">
                        <div class="container justify-content-center">
                            <img class="img-fluid" style="height: 50vh; width: auto" src="assets/image/logo-fulllvers.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="ps-5">
                            <img class="img-fluid" style="height: 50vh; width: auto" src="https://wallpapers.com/images/featured/school-btqdsrc8abryyar1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- timeline -->
        <div class="container my-5">
            <div class="row text-end justify-content-end pb-5">
                <h1 class="display-5 fw-bolder"><span class="text-gradient d-inline">Timeline King's Kidz</span></h1>
                <hr class="border border-danger opacity-50 w-50">
            </div>
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
                    <!-- Add more timeline items as needed -->
                </ul>
            </div>
        </div>

        <!-- kunjungi instagram  -->
        <section class="py-5 bg-gradient-warning-to-secondary text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="fs-4 fw-bolder">Kunjungi instagram kami untuk menjelajah kegiatan kami lebih lanjut <br><br>
                    <a href="" class="text-white fs-1"><i class="bi bi-instagram"></i></a></h2>
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
    </main>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- javascript page -->
    <script src="js/custom.js"></script>
</body>

</html>