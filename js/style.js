$(document).ready(function () {
    $(this).scroll(function () {
        if ($(document).scrollTop() > 200) {
            $("#mynav").removeClass('bg-transparent');
            $("#mynav").addClass('bg-danger');

            $('#textLogoKk').removeClass('text-danger').addClass('text-dark');
        } else {
            $("#mynav").removeClass('bg-danger');
            $("#mynav").addClass('bg-transparent');
        }
    });
});