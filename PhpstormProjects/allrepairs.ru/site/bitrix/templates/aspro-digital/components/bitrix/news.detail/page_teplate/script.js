jQuery(document).ready(function ($) {
    $(".fancybox").fancybox({
        helpers: {
            media: true
        },
        youtube: {
            autoplay: 1, // enable autoplay
            start: 0 // set start time in seconds (embed)
        }
    }); // fancybox
}); // ready

jQuery(document).ready(function ($) {
    $('.title-price').click(function(){
        $(this).parents('.wdropdown').next('.all_price').toggleClass('showen');
    })
    $('.all_price .price').click(function(){
        $(this).parents('.prices').find('.title-price span span').text($(this).text());
        $(this).parents('.prices').find('.value').text($(this).data('sum'));
        $('.all_price').removeClass('showen');
    })
});