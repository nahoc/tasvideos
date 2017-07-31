$(function() {
    $('.latest-sub').hide();

    $('#pub-switch').click(function(){
        console.log('hi');
        $(this).addClass('active');
        $('#pub-switch').removeClass('active');
        $('.latest-pub').show();
        $('.latest-sub').hide();
        window.scrollTo(0, 0);
    });

    $('#sub-switch').click(function(){
         console.log('ho');
        $(this).addClass('active');
        $('#sub-switch').removeClass('active');
        $('.latest-sub').show();
        $('.latest-pub').hide();
        window.scrollTo(0, 0);
    });
});