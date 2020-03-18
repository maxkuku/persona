$(document).ready(function () {



    $('.burger-div img').click(function () {
        $('.burger-div img').toggle();
        $('.sidebar').toggleClass('closed');
        $('.carousel').carousel({
            pause: true,
            interval: false
        }).carousel(0);


    });
});


$(document).ready(function (e) {
    $('.search.top-menu').hover(function(){
        $(this).find('input').addClass('open')
    }, function(){
        $(this).find('input').removeClass('open')
    });
});

$(document).ready(function (e){
    $('.know_more').click(function(){
        $(this).next('p').toggle()
        $(this).children('i').toggleClass('fa-caret-up')
    })
});


/* advert hrefs on mobile company-about page */
$(document).ready(function (e){
    $('.mob .adv-href').click(function(evt) {
        evt.preventDefault();
        var ind = $(this).index();
        var href = $(this).attr('href');
        $('.mob .adv-href').removeClass('active');
        $('.mob .adv-href').eq(ind).addClass('active');
        $('.mob .sign').removeClass('active');
        $('.mob .sign').eq(ind).addClass('active');
        $('.mob .sign').eq(ind).find('.likeh3').wrap("<a href='" + href + "'></a>")
    });
});

/*$(document).ready(function (e) {
    $('.triple a').click(function(ev){
        $(this).parent().addClass('click');
        $('body').addClass('click');
        var h = $(this).attr('href');
        ev.preventDefault();
        $(this).parents('.triple').addClass('active');
        setTimeout(function(){
            location.href=h
        },500)
    })
});*/


// JavaScript Document
$(document).ready(function (e) {
    $("#item-proposition .item-images a").on('click', function (e) {
        e.preventDefault();
        if (!$(this).hasClass('active')) {

            $.each($("#item-proposition .item-images a"), function () {
                $(this).removeClass('active');
            });
            $(this).addClass('active');
            var src = $(this).find('img').attr('src');
            $("#item-proposition .main-img").attr('src', src);
            $("#item-proposition .main-img").attr('data-zoom-image', src);

            $('.zoomWindow').css('background-image', 'url(' + src + ')');
        }
    });

    function basket(href, e) {
        e.preventDefault();
        //e.stopPropagation();
        $('[href="' + href + '"]').html('<img style="width:36px;height:36px;margin:auto;" src="/design3/images/cloader.gif" />');
        window.setTimeout(function () {
            $.ajax({
                url: href,
                method: 'get',
                success: function (data) {
                    if ($('#header_basket').length == 0) {
                        $('.mini-basket-in').append($(data).find('#header_basket'));
                    }
                    else {
                        $('#header_basket').replaceWith($(data).find('#header_basket'));
                    }

                    if ($('#basket').length == 0) {
                        $('.basket-container').append($(data).find('#basket'));
                    }
                    else {
                        $('#basket').replaceWith($(data).find('#basket'));
                    }

                    $('.add-to-basket').replaceWith($(data).find('.add-to-basket').eq(0));
                }
            });

        }, 100);

    }

    $(document).on('click', '.add-to-basket', function (e) {
        basket($(this).attr('href'), e);
    });
    $('.add-to-basket .btn-success').on('click', function (e) {
        e.preventDefault();
    });
    $(document).on('click', '.gray-buy_button', function (e) {
        $(this).addClass('active');
        basket($(this).attr('href'), e);
    });


    /*$(document).on('click tap', '.count_plus, .count_minus', function () {
        var num = parseInt($(this).parent().find('.basket_count').text());
        var pos_id = $(this).attr('id').substr(7);
        var minus_plus = '';
        if ($(this).hasClass('count_plus')) {
            $(this).parent().find('.basket_count').text(num+1);
        }
        else {
            if (num > 1) {
                minus_plus = '-';
                $(this).parent().find('.basket_count').text(num-1);
            }
            else {
                return false;
            }
        }
        $(this).parent().parent().find('input[id="element_1_' + pos_id + '"]').val(num);


        $.ajax({
            url: "/cms/admin/basket.php?pl_plugin_order[1_" + pos_id + "]=" + minus_plus + 1,
            type: 'get',
            async: true,
            success: function (data) {
                $("#tr_" + pos_id).replaceWith($(data).find("#tr_" + pos_id));
                $("#tr_itog").replaceWith($(data).find("#tr_itog"));
                $("#header_basket").replaceWith($(data).find("#header_basket"));
            }
        });
    });*/
    $(document).on('click', '.remove_from_basket', function (e) {
        e.preventDefault();
        var id = $(this).attr('id').substr(4);
        var url = $(this).attr("href");
        $.ajax({
            url: url,
            type: 'get',
            async: false,
            success: function (data) {
                $("#tr_" + id).remove();
                var tr_itog = $.trim($(data).find("#tr_itog").text());
                if (tr_itog == '') {
                    $("#basket_table").html("<tr><td>Ваша корзина пуста, вы будете перенаправлены на главную страницу через 3 секунды</td></tr>");
                    setTimeout(function () {
                        window.location.href = "/"
                    }, 3000);
                    $("#header_basket").remove();
                }
                else {
                    $("#tr_itog").replaceWith($(data).find("#tr_itog"));
                    $("#header_basket").replaceWith($(data).find("#header_basket"));
                }

            }
        });
    });



    $(document).on('click', '.hits-main', function (e) {
        e.preventDefault();
    });













    function headerSearch() {
        var searchWords = $('.header-search input').val();
        if (searchWords.length < 3) {
            $('.search-results').css('display', 'none');
            $('.results-container').html('');
            return false;
        }

        $.ajax({
            type: 'post',
            url: '/ajax/header_search.php',
            data: {search_words: searchWords},
            dataType: 'html',
            beforeSend: function () {

            },
            complete: function () {

            },
            success: function (data) {
                $('.search-results .results-container').html(data);
                $('.search-results').css('display', 'block');
            }
        });
    }

    /*****************  Tooltip ************/

    $('.icon-wave, .icon-dish').on('mouseover', function (event) {
        //	removeTooltip(event);
        if ($(this).hasClass('icon-wave')) {
            createTooltip(event, 'wave');
        }
        else {
            createTooltip(event, 'dish');
        }
        //alert('good');
    });

    $('.icon-wave, .icon-dish').on('mouseout', function (event) {
        //	removeTooltip(event);
        removeTooltip(event);
        //alert('good');
    });

    function removeTooltip(event) {
        $('.tooltp').remove();
    };

    function createTooltip(event, type) {
        if (type == 'dish') {
            $('<div class="tooltp">можно использовать в посудомоечной машине</div>').appendTo('body');
        }
        else if (type == 'wave') {
            $('<div class="tooltp">можно использовать в микроволновой печи</div>').appendTo('body');
        }

        positionTooltip(event);
    };


    function positionTooltip(event) {
        var tPosX = event.pageX - 10;
        var tPosY = event.pageY - 40;
        $('div.tooltp').css({'top': tPosY, 'left': tPosX});
        $('div.tooltp').css({
            'position': 'absolute',
            'color': 'green',
            'background': '#FFFFFF',
            'border': '2px solid #E6E6E6',
            'height': '30px',
            'line-height': '30px',
            'text-align': 'center',
            'border-radius': '6px',
            'width': '340px'

        });
    };

    function headerSearch() {


        var searchWords = $('.header-search input').val();
        if (searchWords.length < 3) {
            $('.search-results').css('display', 'none');
            $('.results-container').html('');
            return false;
        }


        $.ajax({
            type: 'post',
            url: '/ajax/header_search.php',
            data: {search_words: searchWords},
            dataType: 'html',
            beforeSend: function () {

            },
            complete: function () {

            },
            success: function (data) {
                $('.search-results .results-container').html(data);
                $('.search-results').css('display', 'block');
            }
        });
    }

    /* -------------- Basket Nums ---------------- */
    /* --------------- moved to detail card -------*/


    var headerSearchTimeout;
    $('.header-search input').on('keyup', function () {
        clearTimeout(headerSearchTimeout);
        headerSearchTimeout = setTimeout(function () {
            headerSearch();
        }, 500);
    });

    $('.header-search input').on('focus', function () {
        headerSearch();
    });
    $('.header-search input').on('blur', function () {
        setTimeout(function () {
            $('.search-results').css('display', 'none');
        }, 200);
    });


    /**fixed top menu & bottom call line*/

    /*function ch_fx() {
        var top = $('.menu-line').height();
        $('.inner-body').css({'padding-top': top + 'px'})
        $(".inner-body .menu-line").addClass("fixed");
    }


    $(window).scroll(function () {
        ch_fx();
    });

    $(document).ready(function () {
        ch_fx();
    });*/


});



$(document).ready(function(){
    $('.qviewwrap').click(function () {



        var id = $(this).attr('id').substr(1);
        var url = '' + $(this).closest('.hits-main').attr('href');
        //console.log(url)

        $.ajax({
            url: url,
            type: 'post',
            data: 'ajax=1',
            dataType: 'html',
            async: true,
            success: function (data) {
                $("#lean_overlay").show()
                $("#lean_overlay").append("<div class='popup' style='height:500px'><a class='modal_close'></a><div class='wrap'>" + $(data).find('#item-section').html() + "</div></div>");


                $('.modal_close').click(function(){
                    $("#lean_overlay .popup").remove();
                    $("#lean_overlay").hide();
                });

            }
        });


    });

    /*$('.modal_close').click(function(){
        $("#lean_overlay .popup").remove();
        $("#lean_overlay").hide();
    });*/

})


$(document).ready(function(){
    addEventListener('touchstart', this.callPassedFuntion, { passive: false });
});

/* banner 1-st to blink and change like video */
$(document).ready(function () {
    setTimeout(function(){
    var images = [];

    images[0] = "http://porcelain.lamaree.ru/images/banners/nov1.jpg";
    images[1] = "http://porcelain.lamaree.ru/images/banners/nov2.jpg";
    images[2] = "http://porcelain.lamaree.ru/images/banners/nov3.jpg";

    var loop;
    var i = 0;

    //var counter = $("#counter");

    if ($('a[data-id="banner_id_15"]').length) {
        //console.log('length')
        var image = $('a[data-id="banner_id_15"]').find('img');
        loop = setInterval(function () {
            if (i < images.length - 1) {
                i++;
                $(image).attr('src', images[i]);
            } else {
                i = 0;
                $(image).attr('src', images[i]);
            }
            //counter.html(i);
        }, 1000);

    }
    },100);
});

/* on cooper page images scroll sides */
$(document).ready(function () {
    if ($('#cooper').length && !$('body').hasClass('mob')) {

        $(document).scrollTop(0);

        var side = $('.sidebar').outerWidth(true);

        window.l2 = parseInt($('#div2').css('left') + $('#div2').outerHeight());
        window.l4 = parseInt($('#div4').css('left') + $('#div4').outerHeight());
        window.l8 = parseInt($('#div8').css('left') + $('#div8').outerHeight());
        window.l9 = parseInt($('#div9').css('left') + $('#div9').outerHeight());
        window.r3 = parseInt($('#div3').css('right') + $('#div3').outerHeight());
        window.r6 = parseInt($('#div6').css('right') + $('#div6').outerHeight());
        window.r5 = parseInt($('#div5').css('right') + $('#div5').outerHeight());
        window.r7 = parseInt($('#div7').css('right') + $('#div7').outerHeight());
        window.op1 = 0;
        window.op2 = 0;


        $('#div1').css({'opacity': window.op1});

        window.ishDiv1posTop = $('#div1').position().top;
        window.scroll_amount = $('html').scrollTop() || $('body').scrollTop();

        $(window).scroll(function () {
            var scroll = $('html').scrollTop() || $('body').scrollTop();



            var slow_rate = scroll * .2;
            var slow_mid_rate = scroll * .4;
            var mid_rate = scroll * .6;
            var high_mid_rate = scroll * .8;
            var high_rate = scroll * .6;

            var scrolled_val = $(document).scrollTop().valueOf();



            $('#div2').css({'left': 'calc(' + window.l2 + 'px + ' + slow_rate * .5 * -1 + '%)'});
            $('#div4').css({'left': 'calc(' + window.l4 + 'px + ' + slow_mid_rate * .5 * -1 + '%)'});
            $('#div8').css({'left': 'calc(' + window.l8 + 'px + ' + mid_rate * .5 * -1 + '%)'});
            $('#div9').css({'left': 'calc(' + window.l9 + 'px + ' + high_mid_rate * .5 * -1 + '%)'});
            $('#div3').css({'right': 'calc(' + window.r3 + 'px + ' + slow_rate * .5 * -1 + '%)'});
            $('#div6').css({'right': 'calc(' + window.r6 + 'px + ' + mid_rate * .5 * -1 + '%)'});
            $('#div5').css({'right': 'calc(' + window.r5 + 'px + ' + slow_mid_rate * .5 * -1 + '%)'});
            $('#div7').css({'right': 'calc(' + window.r7 + 'px + ' + high_mid_rate * .5 * -1 + '%)'});


            var div1op = window.op1 + scroll / 700
            $('#div1').css({'opacity': div1op});


            if(scroll > 700) {
                $('#div1').css({'top': window.ishDiv1posTop - scroll + 700 + 'px'})
            }


            $('.cooper-block .cont').css({'opacity': window.op2 + scroll / 700});

            if (scroll > 2000) {
                $('#div1').hide()
            }
            else {
                $('#div1').show()
            }

        });
    }

    if ($('#cooper').length && $('body').hasClass('mob')){
        $(window).scroll(function () {
            window.opS = 1;
            var scroll = $('html').scrollTop() || $('body').scrollTop();
            var divSop = ((window.opS + scroll / 700) * -1) + 2;
            $('#cooper').css({'opacity': divSop});
        });
    }
});

/* delivery regions map */
$(document).ready(function () {

    if ($('.mapster').length) {
        $('#front').hover(function () {
            $('.under p').text('350 рублей');
        }, function () {
            $('.under p').text();
        });
        $('#mid').hover(function () {
            $('.under p').text('от 650 рублей');
        }, function () {
            $('.under p').text();
        })
    }

});

/* lean modal for callback */
$(document).ready(function () {


    $("[rel*=leanModal]").leanModal({top: 200, overlay: 0.4, closeButton: ".modal_close"});
    $("[rel*=leanModal]").click(function () {
        //$('#lean_overlay').append($('#callback'));
        $('#callback').show();
        $('.modal_close').click(function () {
            $('#callback').hide();
        });
    })


    $('.modal_close').click(function () {
        $('#callback').hide();
    });


    $('#callback [name=user_f_1]').bind("keyup click tap", function () {
        if ($(this).val().length > 0) {
            $(this).css({'background': '#F7F7F7'});
            $(this).addClass('good_input');
        } else {
            $(this).removeClass('good_input');
        }
    });

    $('#callback [name=user_f_2]').bind("keyup click tap", function () {
        if ($(this).val().length > 5) {
            $(this).css({'background': '#F7F7F7'});
            $(this).addClass('good_input');
        } else {
            $(this).removeClass('good_input');
        }
    });

    $('#callback [type=submit]').click(function (e) {
        e.preventDefault();
        if ($('#callback [name=user_f_1]').hasClass('good_input')) {
            if ($('#callback [name=user_f_2]').hasClass('good_input')) {
                $('#callback form').submit();
            }
            else {
                $('#callback [name=user_f_2]').css({'background': '#f5deee'});
            }
        }
        else {
            $('#callback [name=user_f_1]').css({'background': '#f5deee'});
        }
    })


});

/* phone inputmask */
$(document).ready(function(){

    if(document.URL.indexOf("cooper") < 0)
        $("#fphone").mask("+7(999) 999-99-99");
});