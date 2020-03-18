document.addEventListener("DOMContentLoaded", () => {
    // big menu open close
    var expand = document.getElementById('dropdownMenuButton1');
    expand.onclick = function () {
        if (expand.getAttribute('aria-expanded') == "true") {
            expand.setAttribute('aria-expanded', 'false');
        }
        else {
            expand.setAttribute('aria-expanded', 'true');
        }
    }


    var expand1 = document.getElementById('dropdownMenuButton4');
    expand1.onclick = function () {
        if (expand1.getAttribute('aria-expanded') == "true") {
            expand1.setAttribute('aria-expanded', 'false');
        }
        else {
            expand1.setAttribute('aria-expanded', 'true');
        }
    }



    // mobile menu open close
    var expandMob = document.getElementById('mob-toggler');
    var before = document.getElementById('mob-menu-before');

    expandMob.onclick = function () {
        if (before.getAttribute('aria-expanded') == "true") {
            before.setAttribute('aria-expanded', 'false');
            document.getElementById('to-close').style.display = "none";
            document.getElementById('to-open').style.display = "block";
        }
        else {
            before.setAttribute('aria-expanded', 'true');
            document.getElementById('to-close').style.display = "block";
            document.getElementById('to-open').style.display = "none";
        }
    }



    //modal search open
    var showSearch = document.querySelectorAll('.fa-search')[0];
    var searchModal = document.querySelectorAll('#modal-search')[0];
    var searchClose = document.getElementById('close-search');
    showSearch.onclick = function () {
        searchToggle();
    }
    searchClose.onclick = function () {
        searchToggle();
    }


    function searchToggle(){
        if (searchModal.classList.contains('fade')) {
            searchModal.setAttribute('class', 'modal');
        }
        else {
            searchModal.setAttribute('class', 'modal fade');
        }
    }



    // class lightbox to open
    var refs = document.querySelectorAll('[class=lightbox]');

    for (var j=0; j < refs.length; j++) {
        var t = refs[j].href;
        refs[j].setAttribute("onclick", "openit(" + j + ")");
        refs[j].setAttribute("data-href", t);
        refs[j].href = "javascript: void(0)";
    }



    // suggest
    var inp = document.getElementById('input-name');
    inp.oninput = function() {
        get_result(inp.value);
    };
});


//закроет модальное окно
function cls(){
    document.getElementById('modal-lightbox').remove();
}


// добавит модальное окно по картинку типа лайтбокса
function openit(ind) {
    var refs = document.querySelectorAll('[class=lightbox]');
    if(typeof document.getElementById('modal-lightbox') !== 'undefined') {
        document.body.insertAdjacentHTML('beforeend', '<div id=\"modal-lightbox\">' +
            '<div id=\"m-cls\" class=\"close\" onclick=\"cls()\">&times;</div><div id=\"imageHolder\"><img id=\"image\" width=\"800\"></div></div>');
    }
    var y = refs[ind].getAttribute("data-href");
    document.getElementById('image').setAttribute('src', y);
    document.getElementById('modal-lightbox').style.display = "block";
}




document.addEventListener("DOMContentLoaded", () => {


    // 2 buttons in footer 2 maps toggle
    var but = document.querySelectorAll('.two-buttons-in-footer button');
    for (let i = 0, len = but.length; i < len; i++)
    {
        but[i].onclick = function(){
            document.querySelectorAll('.map')[0].setAttribute('class', 'map');
            document.querySelectorAll('.map')[1].setAttribute('class', 'map');
            document.querySelectorAll('.two-buttons-in-footer .btn')[0].setAttribute('class', 'btn btn-fourth');
            document.querySelectorAll('.two-buttons-in-footer .btn')[1].setAttribute('class', 'btn btn-fourth');
            document.querySelectorAll('.map')[i].setAttribute('class', 'map active');
            document.querySelectorAll('.two-buttons-in-footer .btn')[i].setAttribute('class', 'btn btn-fourth active');
        }
    }

});




document.addEventListener("DOMContentLoaded", () => {
    if(document.querySelectorAll('[data-target="#modal-form"]').length > 0){
        document.querySelectorAll('[data-target="#modal-form"]')[0].onclick = function () {
            document.getElementById('modal-form').style.display = 'block';
        }
        document.querySelectorAll('.uk-close')[0].onclick = function () {
            document.getElementById('modal-form').style.display = 'none';
        }
    }
});




//вместо 2-х подгрузить все
$(document).ready(function () {
    $('#all_otz').click(function () {
        $.ajax({
            type: 'post',
            url: '//www.brtclinic.ru',
            data: 'num_otz=' + 20 + '&r=' + Math.random(),
            dataType: "html",
            beforeSend: function () {
            },
            complete: function (data) {
            },
            success: function (data) {
                $('#video_feed_block').html($(data).find('#video_feed_block').html());
                ytb();
                $('#all_otz').hide();
            }
        });
    });
});

function ytb() {
    var win = "<div class='overlay hidden'><div class='win'><div class='out'><i class='fa fa-close'></i><div id='vid_inner'></div><div class='vid_arrows'><div class='vid_left'><i class='fa fa-arrow-left'></i></div><div class='vid_right'><i class='fa fa-arrow-right'></i></div></div></div></div></div>";
    if (!$('.overlay').length) {
        $('body').append(win);
    }
    $('.play').click(function () {
        if ($(this).parents('div').hasClass('youtube')) {
            $('#vid_inner').append("<iframe width=\"900\" height=\"507\" style='max-width:100%;height:auto' src=\"https://www.youtube.com/embed/" + $(this).data('src') + "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
        }
        else {
            $('#vid_inner').append("<iframe width=\"900\" height=\"507\" style='max-width:100%;height:auto' src=\"" + $(this).data('src') + "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>");
        }
        $('.overlay').removeClass('hidden');
        $('.out .fa-close').click(function () {
            $('#vid_inner').empty();
            $('.overlay').addClass('hidden');
        })
    })
}

//youtube in popup
$(document).ready(function () {
    ytb();
});



function get_result(q) {
    var i = 0;
    $.ajax({
        type: "POST",
        url: "//www.brtclinic.ru/search/ajax.php",
        data: "q=" + q,
        dataType: 'json',
        success: function (json) {
            $('.autocomplete-suggestions').html('');
            $.each(json, function (index, element) {
                $('.autocomplete-suggestions').append('<div class="autocomplete-suggestion"><a href="' + element.URL + '" class="live-search__item"><span class="live-search__item-inner"><span class="live-search__item-name"><span class="live-search__item-hl">' + element.TITLE + '</span></span></span></a></div>');
                i = i + 1;
                if (i > 19 && $('.all-searches').length == 0) {
                    $('.autocomplete-suggestions').append('<div class="all-searches"><a href="/search/?q=' + q + '">Все результы</a></div>')
                }
            });
            $('.autocomplete-suggestions').show();
            $('.autocomplete-suggestions').prepend('<button type="button" class="close" onclick="close_search()">×</button>');
            if (json == "") {
                $('.autocomplete-suggestions').append('<div class="not-found">Не найдено</div>')
            }
        },
        fail: function (json) {
            $('.autocomplete-suggestions').append('<div class="not-found">Ошибка</div>');
        }
    });
}




$(document).ready(function () {
    if ($(".slick").length) {
        $(".slick").slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }
});


/*top menu fixed*/
function fixed_header() {


    var topPos = $("#one").outerHeight(true);
    if ($(window, 'body').scrollTop() > 0) {
        $("#one").addClass("fixed");
        $("#two").addClass("fixed");
        $('#two').css({'top': topPos});
        $('#main').css({'marginTop': topPos - 5});
    } else {
        $("#one").removeClass("fixed");
        $("#two").removeClass("fixed");
        $('#two').css({'top': 0});
        $('#main').css({'marginTop': 0})
    }


}

/*top menu fixed*/
var R = setTimeout(function () {
    $(window).scroll(function () {
        fixed_header();
    });
});



function send_phone_ajax(){
    if(window.jQuery) {
        $('#phone_send').click(function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();

            if ($('#phone_inp').val().length) {

                var ph = $('#phone_inp').val().replace(/[^0-9.]/g, "");

                if(ph.length == 11) {
                    $('#phone_inp').removeClass('error')
                    var tel = $('#phone_inp').val();
                    $.ajax({
                        type: 'get',
                        url: '/ajax/',
                        data: 'ajax=Y&header_phone=' + tel + '&count=' + Math.random() + '&adr=' + document.URL,
                        dataType: "json",
                        success: function (data) {
                            $('form#bottom').text(data);
                        }
                    });
                }
                else{
                    $('#phone_inp').addClass('error')
                }
            }

        });
    }
}
document.addEventListener("DOMContentLoaded", () => {
    send_phone_ajax();
});