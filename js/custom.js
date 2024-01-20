$(document).ready(function () {
    // Fungsi untuk memeriksa lebar layar dan mengubah class
    function checkScreenWidth() {
        var responsiveElement = $('#contentHistory');
        var logoTKhover = $('.logoTKhover');

        // Ganti class berdasarkan lebar layar
        if ($(window).width() < 1165) {
              responsiveElement.removeClass('col-lg-8').addClass('col-lg-12');
              logoTKhover.removeClass('col-lg-4');
            // console.log(Math.random());
        } else {
            responsiveElement.addClass('col-lg-8').removeClass('col-lg-12');
            logoTKhover.addClass('col-lg-4');
        }
    }

    // Panggil fungsi ketika halaman dimuat dan saat layar diubah
    $(window).on('load resize', checkScreenWidth);
});