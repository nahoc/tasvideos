$(function() {
    $('.latest-sub').hide();

    $('#pub-switch').click(function(){
        $(this).addClass('active');
        $('#pub-switch').removeClass('active');
        $('.latest-pub').show();
        $('.latest-sub').hide();
        window.scrollTo(0, 0);
    });

    $('#sub-switch').click(function(){
        $(this).addClass('active');
        $('#sub-switch').removeClass('active');
        $('.latest-sub').show();
        $('.latest-pub').hide();
        window.scrollTo(0, 0);
    });

    // youtube icon resize

    $( ".youtube" ).each(function( ) {
        var width = $(this).next('img').innerWidth();
        var height = $(this).next('img').innerHeight();
        $(this).css("width",width);
        $(this).css("height",height);
    });
});