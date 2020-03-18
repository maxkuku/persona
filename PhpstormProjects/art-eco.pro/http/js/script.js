$(document).ready(function(){
		$('#mainslider').bxSlider({responsive:true,touchEnabled: true, auto: true, controls: false, pager: false, mode: 'fade', speed: 1000, });
		$('#thumbs a').click(function(){
			var bigPath=$(this).attr('href');
			var bigAlt=$(this).attr('title');
			$(this).addClass('active').siblings().removeClass('active');
			$('#bigImg').attr({src:bigPath,alt:bigAlt});
			return false;
		});	
		$('.show_more_text a').click(function(){
			$('.detail_description_text').toggleClass('full_text');
			$(this).toggleClass('open_full');
		});	

});
$(document).ready(function() {
	$("#show_nav").click(function(){
		$("#nav_mobile").addClass("visible");
		$("#shadow").addClass("shadow_layer");
	});
	$("#hide_nav").click(function(){
		$("#nav_mobile").removeClass("visible");
		$("#shadow").removeClass("shadow_layer");
	});
	$("#shadow").click(function(){
		$("#nav_mobile").removeClass("visible");
		$("#shadow").removeClass("shadow_layer");
	});
});	
/*маска телефона*/
$(document).ready(function() {
	jQuery(function($){
	   $(".phone_form").mask("+7 (999) 999 - 99 - 99");
	   });
});	
/*обратный звонок*/
$(document).ready(function() {
	$(".recall_link").click(function(){
		$("#shadow_popup").addClass("show");
		$("#recall_form").addClass("shown");
	});
	$(".kp_link").click(function(){
		$("#shadow_popup").addClass("show");
		$("#kp_form").addClass("shown");
	});
	$(".popup_close").click(function(){
		$("#shadow_popup").removeClass("show");
		$("#recall_form").removeClass("shown");
		$("#kp_form").removeClass("shown");
	});
	$("#shadow_popup").click(function(){
		$("#recall_form").removeClass("shown");
		$("#kp_form").removeClass("shown");
		$("#shadow_popup").removeClass("show");
	});
});	
/*заявка*/
$(document).ready(function() {
	$(".request_link").click(function(){
		$("#request_shadow_popup").addClass("show");
		$("#request_form").addClass("shown");
	});
	$(".popup_close").click(function(){
		$("#request_shadow_popup").removeClass("show");
		$("#request_form").removeClass("shown");
	});
	$("#request_shadow_popup").click(function(){
		$("#request_form").removeClass("shown");
		$("#request_shadow_popup").removeClass("show");
	});
});


/*поиск*/
/*$('body').on('click tap', '.header-search-btn, .search-button, .icon-magnifier', function (e) {
    e.preventDefault();
    if (!$(this).parent().hasClass('active')) {
        var t = '90px';
        if ($('.top-panel').css('display') == 'block') {
            t = '96px';
        }
        $('.popup-search').animate({
            top: t,
        }, 300, function () {
            $('.header-search-btn').parent().addClass('active');
            $('.popup-search input').focus();
        });
    }

});
$('body').on('click tap', '.popup-search .close-button', function (e) {
    e.preventDefault();
    $('.popup-search').animate({
        top: "-200%",
        //  opacity: '0',
    }, 200, function () {
        $('.header-search-btn').parent().removeClass('active');
    });
});


$(document).mouseup(function (e) {
    var container = $(".popup-search");

    // if the target of the click isn't the container nor a descendant of the container
    if ($('.header-search-btn').parent().hasClass('active')) {
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.popup-search').animate({
                top: "-200%",
                //  opacity: '0',
            }, 200, function () {
                $('.header-search-btn').parent().removeClass('active');
            });
        }
    }

});
*/

$(document).ready(function() {
    var headerSearchTimeout;
    $('.search input[type=text]').on('keyup', function () {
        clearTimeout(headerSearchTimeout);
        headerSearchTimeout = setTimeout(function () {
            headerSearch();
        }, 500);
    });

    $('.popup-search-results .close').click(function(){
        $('.popup-search-results').css('display', 'none');
	})

    function headerSearch() {
        var q = $('.search input[type=text]').val();
        if (q.length < 3) {

            return false;
        }
        $.ajax({
            type: 'post',
            url: '/ajax/header_search.php',
            data: {q: q},
            dataType: 'html',
            beforeSend: function () {

            },
            complete: function () {

            },
            success: function (data) {
                $('.popup-search-results').html(data);
                $('.popup-search-results').css('display', 'block');
            }
        });
    }
});