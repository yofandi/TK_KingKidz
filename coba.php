<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Tab Multiple Content - Bootstrap 5.3</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Add custom styles here if needed */
    </style>
</head>

<body>
    <section class="container-fluid">
        <div class="row">
            <!-- Bagian kiri -->
            <div class="col-md-6 px-5 py-5 bg-light">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="visiImage" role="tabpanel" aria-labelledby="visi-tab">
                        <img class="img-fluid" src="assets/9307750.png" alt="">
                    </div>
                    <div class="tab-pane fade" id="misiImage" role="tabpanel" aria-labelledby="misi-tab">
                        2
                    </div>
                </div>
            </div>
            <!-- Bagian kanan -->
            <div class="col-md-6 px-5 py-2">
                <div class="card border-0">
                    <div class="card-body text-start">
                        <ul class="nav nav-tabs" id="TabVisiMisi" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="visi-tab" data-bs-toggle="tab" data-bs-target="#visi, #visiImage" type="button" role="tab" aria-controls="visi" aria-selected="true">
                                    <h1 class="text-gradient d-inline f-brandSchool">Visi</h1>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="misi-tab" data-bs-toggle="tab" data-bs-target="#misi, #misiImage" type="button" role="tab" aria-controls="misi" aria-selected="false">
                                    <h1 class="text-gradient d-inline f-brandSchool">Misi</h1>
                                </button>
                            </li>
                        </ul>
                        <!-- <hr class="border border-danger opacity-50 w-25"> -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="visi" role="tabpanel" aria-labelledby="visi-tab">
                                <div class="mission-list">
                                    <p class="text-muted f-patrick-hand-regular fs-4">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis amet excepturi, quaerat consequatur error esse maiores in cupiditate sed nemo iure fugit qui veritatis perferendis voluptas accusamus. Dolor, optio totam! Lorem ipsum dolor sit amet consectetur adipisicing elit. A eligendi dolorem nesciunt eum amet sunt pariatur voluptatibus, architecto deserunt vel, aspernatur laudantium! Sed, qui obcaecati quibusdam molestias saepe deserunt suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, impedit debitis? Earum voluptatibus itaque eos cupiditate blanditiis optio voluptates magnam omnis voluptate. Hic ipsa commodi natus earum praesentium rem ullam.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="misi-tab">
                                <div class="mission-list">
                                    <ol class="fs-5 list-numbered f-patrick-hand-regular">
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
        </div>
    </section>

    <!-- Bootstrap JS (Popper.js and Bootstrap Bundle required) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#TabVisiMisi button[data-bs-toggle="tab"]').on('click', function() {
                var tabTarget = $(this).data('bs-target');
                var tabContent = $(tabTarget);
                if (tabContent.length) {
                    tabContent.addClass('active show');
                    $('.tab-pane.active').not(tabContent).removeClass('active show');
                }
            });
        });
    </script>
</body>

</html>