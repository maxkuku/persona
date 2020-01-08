$(document).ready(function(){
    var selector = '';
});

setTimeout(function(){
    window.hei = $('.wp-tiles-container').height();
    $('.tile-my-wrap').after('<a id="show_more" rel="noindex">Показать еще</a>');
    $('#show_more').click(function(){

        var lin = $('.tile-my-wrap > div').length;
        var allH = window.hei * lin;

        if($('.tile-my-wrap').height() < allH){
            $('.tile-my-wrap').animate({
                'height' : '+=' + window.hei
            })
        }
        else{
            $('#show_more').hide();
        }
    })
},30000)

/*function getIms used nowhere*/
function getIms(i) {
    var burl = "https://presswall-presswall.ru/wp-json/wp/v2/media/" + i;
    var dataDiv = $('.faq-col').eq(0);
    $.ajax({
        url: burl,
        data: Math.random(),
        type: 'GET',
        async: false,
        processData: false,
        beforeSend: function (xhr) {
            if (xhr && xhr.overrideMimeType) {
                xhr.overrideMimeType('application/json;charset=utf-8');
            }
        },
        dataType: 'json',
        success: function (data) {
            //console.log(data);
            var theUl = $('.faq-col').eq(0);
            var arr = [];
            for (var key in data) {
                arr['alt'] = data[key]['alt_text'];
                arr['src'] = data[key]['source_url'];
                arr['title'] = data[key]['title']['rendered'];
            }
            console.log(arr);
        },
        error: function(e) {
            console.log('Error: '+e);
        }
    });
}

$(document).ready(function(){
    $('.faq__question').click(function(event) {
        event.preventDefault();
        $(this).toggleClass('faq__question_active');

        if ( $(this).hasClass('faq__question_active') ) {
            $(this)
                .next('.faq__answer')
                .slideDown(300);
        } else {
            $(this)
                .next('.faq__answer')
                .slideUp(300);
        };
    });
});
$(document).ready(function (){
    $('#post-17 p').click(function(){
        $(this).prev('h2').toggleClass('active');
    })
});
$(document).ready(function () {


    $('.service-slider').owlCarousel({
        items: 4,
        loop: 1,
        nav: 1,
        dots: 1,
        autoplay: 1,
        autoplayHoverPause: 1,
        autoplayTimeout: 2000,

        responsive: {
            0: {
                items: 0,
                mouseDrag: false,
                touchDrag: false,
                pullDrag: false,
                freeDrag: false,
            },
            310: {
                items: 1,
                margin: 0,
                smoothHeight: false
            },
            1000: {
                items: 4,
                margin: 0,
            }
        }
    });


    $('.page-id-70 .service-slider').owlCarousel({
        items: 6,
        loop: 1,
        nav: 1,
        dots: 0,
        autoplay: 1,
        autoplayHoverPause: 1,
        autoplayTimeout: 2000,

        responsive: {
            0: {
                items: 0,
                mouseDrag: false,
                touchDrag: false,
                pullDrag: false,
                freeDrag: false,
            },
            310: {
                items: 1,
                margin: 0,
                smoothHeight: false
            },
            1000: {
                items: 6,
                margin: 0,
            }
        }
    });


});

$(document).ready(function () {
    var selector = $("input[type='tel']");
    var im = new Inputmask("+7 (999) 999-99-99");
    im.mask(selector);
});


$(document).ready(function () {
    $('.gallery-item a').magnificPopup({type: 'image'});
});




$(document).ready(function () {
    $('.menu-toggle').click(function () {
        $('.menu-toggle svg').toggle();
        if (parseInt($('#mobilemenu').css('left')) < 0) {
            $('#mobilemenu').css({'left': 0});
            $('html, body').css({'overflow-y': 'hidden'});
        } else {
            $('#mobilemenu').css({'left': '-100%'});
            $('html, body').css({'overflow-y': 'auto'});
        }
    })
    $('.back').click(function () {
        if (parseInt($('#mobilemenu').css('left')) < 0) {
            $('#mobilemenu').css({'left': 0});
            $('html, body').css({'overflow-y': 'hidden'});
        } else {
            $('#mobilemenu').css({'left': '-100%'});
            $('html, body').css({'overflow-y': 'auto'});
        }
    });
    $('#mobilemenu .icon').click(function (e) {
        if (!$(this).parents('a').is(e.target)) {
            e.preventDefault();
        }
        $(this).closest('li').find('.sub-menu').toggle();
        $(this).toggleClass('icon-angle-down icon-angle-right')
    });
});
$(document).ready(function () {
    $(window).scroll(function () {
        var oHeight = $('.top-header').outerHeight(true) + 15;
        var obj = $('.top-conts:last-child');
        var minus = $('.buttons-wrap').outerHeight(true);
        if ($(this).scrollTop() > (oHeight - minus)) {
            obj.addClass('fixed');
        } else {
            obj.removeClass('fixed');
        }
    });


    $('input[name="your-name"]').attr("placeholder", "Ваше имя");
    $('input[type="tel"]').attr("placeholder", "Введите ваш телефон");
    $('textarea').attr("placeholder", "Ваше сообщение");

});


$(document).ready(function () {
    $('.service-slider').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Загрузка #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">Ошибка загрузки #%curr%</a>',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small>presswall-presswall.ru</small>';
            }
        }
    });
});


$(document).ready(function () {
    $('.pics-block').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Загрузка #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">Ошибка загрузки #%curr%</a>',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small>presswall-presswall.ru</small>';
            }
        }
    });
});


$(document).ready(function () {
    $('.wp-tiles-loaded').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Загрузка #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">Ошибка загрузки #%curr%</a>',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small>presswall-presswall.ru</small>';
            }
        }
    });
});


$(document).ready(function () {
    $('.image-ballery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Загрузка #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">Ошибка загрузки #%curr%</a>',
            titleSrc: function (item) {
                return item.el.attr('title') + '<small>presswall-presswall.ru</small>';
            }
        }
    });
});

$(document).ready(function () {
    $('input[name="checkbox-509[]"]').attr('checked', true);
    if ($('input[name="checkbox-41[]"]').length) {
        $('input[name="checkbox-41[]"]').attr('checked', true);
    }

})

function scrollToTop() {

    var _isScrolling = false;
    // Append Button
    $('body').append($('<a />').addClass('scroll-to-top').attr({
        'href': '#',
        'id': 'scrollToTop'
    }));
    $('#scrollToTop').click(function (e) {
        e.preventDefault();
        $('body, html').animate({scrollTop: 0}, 500);
        return false;
    });
    // Show/Hide Button on Window Scroll event.
    $(window).scroll(function () {
        if (!_isScrolling) {
            _isScrolling = true;
            var bottom = 23,
                scrollVal = $(window).scrollTop(),
                windowHeight = $(window).height();

            var footerOffset = 0;
            if ($('footer').get(0)) {
                footerOffset = $('footer').offset().top;
            }
            if (scrollVal > 150) {
                $('#scrollToTop').stop(true, true).addClass('visible');
                _isScrolling = false;
            }
            else {
                $('#scrollToTop').stop(true, true).removeClass('visible');
                _isScrolling = false;
            }
            CheckScrollToTop();
        }
    });

}

function CheckScrollToTop() {
    var bottom = 23,
        scrollVal = $(window).scrollTop(),
        windowHeight = $(window).height();
    if ($('footer').length)
        var footerOffset = $('footer').offset().top;

    if (scrollVal + windowHeight > footerOffset) {
        $('#scrollToTop').css('bottom', bottom + scrollVal + windowHeight - footerOffset);
    }
    else if (parseInt($('#scrollToTop').css('bottom')) > bottom) {
        $('#scrollToTop').css('bottom', bottom);
    }
}
scrollToTop();
CheckScrollToTop();

$(document).ready(function(){
    if($('.folio button').length) {
        $('.folio button').click(function () {
            var ind = $(this).index();
            $('.folio button').removeClass('active');
            $('.gals-wrap .switch').removeClass('active');
            $('.folio button').eq(ind).addClass('active');
            $('.gals-wrap .switch').eq(ind).addClass('active');
        });
    }
});


$(document).ready(function(){
    $(".mfp-image-holder").bind('click', function(e){
        console.log('click')
        if ($(e.target).is('.mfp-close')) return;
        if ($(e.target).is('.mfp-content')) return;
        return false;
    });
});


/*if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/worker.js');
}

// link to a image file
var iconUrl = 'https://presswall-presswall.ru/images/2000px-Google_Chrome_icon.svg.png';

// create the <img> html element
// on first load it will request the image
// second time it will load it from cache directly thanks to the service worker
var imgElement = document.createElement('img');
imgElement.src = iconUrl;*/
