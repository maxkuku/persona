/*logo click*/
$(document).ready(function(){
	$('#logo, #logo-bottom').click(function(){
		location.href="/";
	});
});

/*menu icon click*/
$(document).ready(function menu(){
	var topPos = $("#header").outerHeight(true)-2;
	$('#menu-switch .fa-bars').click(function(){
		$('#menu-switch i').addClass('fa-times').removeClass('fa-bars');
		$('#top-menu').addClass('active');
		$('#top-menu.active').css({'top': topPos});
		setTimeout(function(){
			$('#menu-switch .fa-times').click(function(){
				$('#menu-switch i').addClass('fa-bars').removeClass('fa-times');
				$('#top-menu').removeClass('active');
				$('#top-menu').css({'top': '-150vh'});
			});
			menu();
		},100);
	});
	$('#adr').click(function(){
	    var top = parseInt($("#addresses-list").css("top"))

        if(top < 0){
            $("#addresses-list").css({"top" : topPos + 'px'});
        }
        else{
            $("#addresses-list").css({"top" : -300 + 'px'});
        }

    });
    $('#pho').click(function(){
        var top = parseInt($("#phones").css("top"))

        if(top < 0){
            $("#phones").css({"top" : topPos + 'px'});
        }
        else{
            $("#phones").css({"top" : -300 + 'px'});
        }

    });
});


/**articles on every page*/
$(document).ready(function(){
	var number = 22;
	var pp = $(".articles .item");
    var io = $(".articles");
    var visible = Math.floor(($('.articles').outerWidth())/($('.articles .item').outerWidth(true) - number));
	$(".articles .item").css({'min-width': ($(".articles").outerWidth(true)/visible) - number});
    //console.log(visible)
    io.width((pp.outerWidth(true) + number - 5) * visible);
	
    
    $("#eee .prev").click(function(){
        var pp = $(".eee .item");
        var dw = $(".items-move");
		console.log(dw.css("margin-left"))
        if(parseInt(dw.css("margin-left")) < 0){
            dw.animate({
                marginLeft: "+=" + (pp.outerWidth(true) + number)
            });
        }
    });
    $("#eee .next").click(function(){ 
        var pp = $(".eee .item");
        var dw = $(".items-move");
        var right_max_pos = pp.outerWidth(true) * (pp.length - visible);
		console.log(parseInt(dw.css("margin-left")));
        console.log(parseInt(right_max_pos));
        if(parseInt(dw.css("margin-left"))>parseInt(right_max_pos * -1)){
            dw.animate({
                marginLeft: "-=" + (pp.outerWidth(true) + number)
            });
        }
    });
});


/*phone icon click*/
$(document).ready(function menu(){
	var topPos = $("#header").outerHeight(true)-2;
	$('#call').click(function(){
		$('#contact-menu').toggleClass('active');
	});
	
});

/* menu buttons color */
$(document).ready(function menu(){
	$('#header .wrap > div').click(function(){
		$(this).toggleClass('colored');
	});
});

/*top menu fixed*/
function fixed_header() {
    var topPos = $("#header").outerHeight(true);
    if ($(window,'body').scrollTop() > 0) {
        $("#header").addClass("fixed");
        $('#main').css({'marginTop': topPos - 5});
    } else {
        $("#header").removeClass("fixed");
        $('#main').css({'marginTop': 0})
    }
}

/*top menu fixed*/
$(window).scroll(function(){
    fixed_header();
});


/*side column fixed on desktop articles pages*/
$(document).ready(function(){
    if($(window).outerWidth() > 1120 && $('.side-wrapper').length > 0) {
        var sideLeft = $('.side-wrapper').position().left;
        $('.side-wrapper').css(
            {
                'left': sideLeft
            }
        );
    }
})
$(window).scroll(function(){
    if($(window).outerWidth() > 1120 && $('.side-wrapper').length > 0) {
        var sideWidth = $('.side-wrapper').width();
        var sideLeft = $('.side-wrapper').position().left;
        var artWid = $('.article-block').width();
        /*5 blocks height*/
        var headHei = $('#header').height();
        var banAc = $('.banner-actions').height();
        var unHeadIm = $('.under_header_image').height();
        var statHead = $('.statji-header').height();
        var statPage = $('.statji-page').height();
        var block5height = headHei + banAc + unHeadIm + statHead + statPage;
        //console.log("wst:" + $(window).scrollTop() + ", b5h: " + block5height + ", eee: " + $('#eee').position().top)
        var bottomPos = ($('#main').outerHeight() - block5height);
        $('.article-block').css(
            {
                'max-width': artWid
            }
        );
        $('.side-wrapper').css(
            {
                'top': headHei + 'px',
                'width': sideWidth
            }
        );
        if (($('html,body').scrollTop() + $('#header').height()) > $('.left-right-wrap').position().top) {
            $('.side-wrapper').css(
                {
                    'position': 'fixed'
                }
            );

        }
        else {
            $('.side-wrapper').css(
                {
                    'top': 0,
                    'position': 'relative',
                    'left': 0
                }
            );
        }
        var eeePos = $('#eee').position().top - $('.side-wrapper').height();
        if ($(window).scrollTop() > eeePos) {
            $('.left-right-wrap').css(
                {
                    'align-items': 'flex-end'
                }
            );
            $('.side-wrapper').css(
                {
                    'position': 'static'
                }
            );
        }
        else if (($('html,body').scrollTop() + $('#header').height()) > $('.left-right-wrap').position().top) {
            $('.left-right-wrap').css(
                {
                    'align-items': 'flex-start'
                }
            );
            $('.side-wrapper').css(
                {
                    'position': 'fixed',
                    'left': sideLeft
                }
            );
        }
    }
})

//actions switch
$(document).ready(function(){
	var ahp = $('#actions-inner > div');
	var itemWidth = ahp.outerWidth(true);
	var allItemsWidth = itemWidth * ahp.length;
	$('#actions-inner').width(allItemsWidth);
	ahp.width(33 + '%');

	$('#arrow-next i').click(function(){
		if(parseInt($('#actions-inner').css('marginLeft')) > ((allItemsWidth - 1) * -1)){
			$('#actions-inner').animate({'marginLeft': '-=' + itemWidth},300);
		}
	});

	$('#arrow-prev i').click(function(){
		if(parseInt($('#actions-inner').css('marginLeft')) < 0){
			$('#actions-inner').animate({'marginLeft': '+=' + itemWidth},300);
		}
	});
});

//search form
$(document).ready(function(){
	$('.fa-search').click(function(){
		if($('input[name=q]').val().length>0){
			//$('#search-li form').submit();
            location.href='/search/?q=' + $('input[name=q]').val()
		}
	});
});


//menu children open
$(document).ready(function(){
	$('.sta').click( function(evt) {

        evt.preventDefault();
        evt.stopImmediatePropagation();

	    var li = $(this).parents('li');
        li.toggleClass('closed');


        /*$('.st1 > ul').mouseout(function(){
            li.addClass('closed');
        })*/
	});
	
});



/*$(document).ready(function(){
    $('#top-menu .st1 > a').click(function(e){
        e.preventDefault()
    })
    $('#top-menu .parent > a').click(function(e){
        e.preventDefault()
    })
});*/
/*$(document).ready(function(){
    $('.close-menu-mobile').click(function(){
        $('body').attr('style','');
        $('body').attr('class','');
        $('.uk-offcanvas').removeClass('uk-active');
    })
})*/

$(document).ready(function() {
    var h = $('#panel').height() + $('#header').height();
    $('#top-menu').css({
            'top' : h + 'px'/*,
            'max-height' : 'calc(100% - ' + h + 'px)'*/
        });
});
$(document).ready(function() {
    $('.main-nav__toggle').click(function(){
        $(this).closest('.wrap').toggleClass('main-nav--opened');
        $('#top-menu').toggleClass('uk-active');
        $('body').toggleClass('unscrolled');
    })
});

//$(document).ready(function() {
    //$('li.parent').click(function (e) {
        //e.preventDefault();

        //$(this).toggleClass('closed');
        //var t = $('#vertical-multilevel-menu').outerHeight(true);
        //$('#vertical-multilevel-menu').css({'height': t + 'px'});
    //});
//});

$(document).ready(function() {
    var win = "<div class='overlay hidden'><div class='win'><div class='out'><i class='fa fa-close'></i><div id='vid_inner'></div><div class='vid_arrows'><div class='vid_left'><i class='fa fa-arrow-left'></i></div><div class='vid_right'><i class='fa fa-arrow-right'></i></div></div></div></div></div>";
    $('body').append(win);
    $('.play_button').click(function(){
        $('#vid_inner').append("<iframe width=\"900\" height=\"507\" style='max-width:100%;height:auto' src=\"https://www.youtube.com/embed/" + $(this).data('src') + "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
        $('.overlay').removeClass('hidden');
        $('.out .fa-close').click(function(){
            $('#vid_inner').empty();
            $('.overlay').addClass('hidden');
        })
    })
});

/**laps on main page*/
$(document).ready(function(){
    var ld = $(".laps > div");
    var il = $(".inlay");
    ld.click(function(){
        ld.removeClass("active");
        $(this).addClass("active");
        var ind = $(this).index();
        il.removeClass("active");
        il.eq(ind).addClass("active");
    });
});



/*function vid_open(){
    if ($(".youtube").length) {
        "use strict";
        $(function () {
            $(".youtube").each(function () {
                $(this).css('background-image', 'url(https://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');
                if ($(this).children('div').hasClass('play') === false) {
                    $(this).append($('<div/>', {'class': 'play'}));
                }
                $(document).delegate('#' + this.id, 'click', function () {
                    var iframe;
                    var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
                    if ($(this).data('params')) iframe_url += '&' + $(this).data('params');
                    iframe = $('<iframe/>', {
                        'frameborder': '0',
                        'src': iframe_url,
                        'width': $(this).width(),
                        'height': $(this).height()
                    });
                    console.log($(this).prev('iframe').length);
                    if($(this).prev('iframe').length == 0) {
                        $(this).prepend(iframe);
                    }
                });
            });
            $('.play').click(function () {
                $(this).hide();
            });
        });

    }
}*/



function ytb() {
    var win = "<div class='overlay hidden'><div class='win'><div class='out'><i class='fa fa-close'></i><div id='vid_inner'></div><div class='vid_arrows'><div class='vid_left'><i class='fa fa-arrow-left'></i></div><div class='vid_right'><i class='fa fa-arrow-right'></i></div></div></div></div></div>";
    if(!$('.overlay').length) {
        $('body').append(win);
    }
    $('.play').click(function () {

        if($(this).parents('div').hasClass('youtube')) {
            $('#vid_inner').append("<iframe width=\"900\" height=\"507\" style='max-width:100%;height:auto' src=\"" + $(this).parents('div').data('src') + "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
        }
        else{
            //$('#vid_inner').append("<video width=\"900\" height=\"507\" style='max-width:100%;height:auto' controls autoplay><source src=\"" + $(this).parents('div').data('src') + "\" type=\"video/mp4; codecs='avc1.4D401E, mp4a.40.2'\"/><source src=\"" + $(this).parents('div').data('src').replace('mp4', 'webm') + "\" type=\"video/webm; codecs='vp8, vorbis'\"/></video>");
            var src = $(this).parents('div').data('src').replace('mp4', 'webm');
            window.open(
                src,
                '_blank'
            );
            return
        }
        $('.overlay').removeClass('hidden');
        $('.out .fa-close').click(function () {
            $('#vid_inner').empty();
            $('.overlay').addClass('hidden');
        })
    })
}

//youtube in popup
$(document).ready(function() {
    //ytb();
});

$(document).ready(function(){
   $('#all_otz').click(function(){
       $.ajax({
           type: 'get',
           url: '/',
           data: 'num_otz=' + 20 + '&r=' + Math.random(),
           dataType: "html",
           beforeSend: function () {
               //$(elementButton).text('').attr({"class":class_name+"_loading"});
           },
           complete: function (data) {
               /*var ti = $(data).find('#video_feed_block').html();
               console.log($(data).find('#video_feed_block').html())
               $('#video_feed_block').html(ti);*/
           },
           success: function (data) {
               //console.log($(data).find('#video_feed_block > div').length)
               $('#video_feed_block').html($(data).find('#video_feed_block').html());
               //vid_open();
               ytb();
               $('#all_otz').hide();
           }
       });
   });
});



function send_phone_ajax(tel){
    $.ajax({
        type: 'get',
        url: '/ajax/send_phone_ajax.php',
        data: 'ajax=Y&header_phone=' + tel + '&count=' + Math.round(Math.random()*1000) + '&adr=' + document.URL,
        dataType: "json",
        success: function (data) {


            $('#res_form').text(data);

            // pixel fb
            fbq('track', 'Contact',
                {
                    content_name: 'zapis na priem',
                    contents: [{
                        id: Math.round(Math.random()*1000),
                        phone: tel,
                    }]
                }
            );


        }
    });
}
$(document).ready(function(){
    $('#send_header_phone').click(function(){
        var tel = "";
        if($('[name=header_phone]').val().length == 18){
            tel = $('[name=header_phone]').val();
            send_phone_ajax(tel);
        }
    })
})