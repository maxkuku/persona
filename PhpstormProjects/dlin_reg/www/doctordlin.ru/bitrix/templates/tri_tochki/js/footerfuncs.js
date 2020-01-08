/*$(".rslides").responsiveSlides({
	auto: false,// Boolean: Animate automatically, true or false
	speed: 500,// Integer: Speed of the transition, in milliseconds
	timeout: 4000,// Integer: Time between slide transitions, in milliseconds
	pager: false,// Boolean: Show pager, true or false
	nav: true,// Boolean: Show navigation, true or false
	random: false,// Boolean: Randomize the order of the slides, true or false
	pause: false,// Boolean: Pause on hover, true or false
	pauseControls: true,// Boolean: Pause when hovering controls, true or false
	prevText: '<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>',// String: Text for the "previous" button
	nextText: '<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>',// String: Text for the "next" button
	maxwidth: "",// Integer: Max-width of the slideshow, in pixels
	navContainer: "",// Selector: Where controls should be appended to, default is after the 'ul'
	manualControls: "",// Selector: Declare custom pager navigation
	namespace: "rslides",// String: Change the default namespace used
	before: function(){},// Function: Before callback
	after: function(){}// Function: After callback
});*/


/*if($(".youtube").length) {
    "use strict";
    $(function () {
        $(".youtube").each(function () {
            $(this).css('background-image', 'url(https://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');
            if ($(this).children('div').hasClass('play') === false) {
                $(this).append($('<div/>', {'class': 'play'}));
            }
            $(document).delegate('#' + this.id, 'click', function () {
                var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
                if ($(this).data('params')) iframe_url += '&' + $(this).data('params');
                var iframe = $('<iframe/>', {
                    'frameborder': '0',
                    'src': iframe_url,
                    'width': $(this).width(),
                    'height': $(this).height()
                });
                $(this).prepend(iframe);
            });
        });
        $('.play').click(function () {
            $(this).hide();
        });
    });

}*/

