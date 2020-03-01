$(document).ready(function(){
    var g = $('.bx-no-touch .aside').outerHeight(true);
    $('.bx-no-touch .aside iframe').height(g)
})
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
/*jQuery(document).ready(function ($) {
    var video_wrapper = $('.youtube-video-place');
    if (video_wrapper.length) {
        $('.youtube-video-place').on('click', function () {
            $(this).html('<a class="fancybox" target="_blank" href="\' + video_wrapper.data(\'yt-url\') + \'"></a><!--iframe allowfullscreen frameborder="0" class="embed-responsive-item" src="' + video_wrapper.data('yt-url') + '"></iframe-->');
        });
    }
});*/