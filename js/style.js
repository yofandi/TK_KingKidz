$(document).ready(function () {
    $(this).scroll(function(){
        if($(document).scrollTop() > 200) {
            $("#mynav").removeClass('bg-transparent');
            $("#mynav").addClass('bg-dark');
        } else {
            $("#mynav").removeClass('bg-dark');
            $("#mynav").addClass('bg-transparent');
        }
      });
});