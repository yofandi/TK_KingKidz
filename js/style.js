$(document).ready(function () {
    $(this).scroll(function () {
        if ($(document).scrollTop() > 200) {
            $("#mynav").removeClass('bg-transparent');
            $("#mynav").addClass('bg-warning');

            $('a, #texttransisi').removeClass('text-white').addClass('text-dark');
        } else {
            $("#mynav").removeClass('bg-warning');
            $("#mynav").addClass('bg-transparent');
            $('a, #texttransisi').removeClass('text-dark').addClass('text-white');
        }
    });
});