$(document).ready(function(){
    $('.spoiler-body').hide();
    $('.spoiler-title').click(function(){
        $(this).toggleClass('opened').toggleClass('closed').next().slideToggle();
        if($(this).hasClass('opened')) {
            $(this).html('&#9650;');
        }
        else {
            $(this).html('&#9660;');
        }
    });
});