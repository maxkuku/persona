// function get url parameter
// var tech = getUrlParameter('technology');
// var blog = getUrlParameter('blog');
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};




function sortProductsPriceAscending()
{
    var products = $('.items-block > div.catalog-item');
    products.sort(function(a, b){
        return $(a).find('.catalog-item').data("price")-$(b).find('.catalog-item').data("price")});
    $(".items-block").html(products);

}

function sortProductsPriceDescending()
{
    var products = $('.items-block > div.catalog-item');
    products.sort(function(a, b){
        return $(b).find('.catalog-item').data("price") - $(a).find('.catalog-item').data("price")});
    $(".items-block").html(products);

}

function ProductsFilter(a) {

        var products = $('.items-block > div.catalog-item');
        $.each(products, function () {
            if ($(this).find('.catalog-item-name').text().indexOf(a) > -1) {
                $(this).prependTo($(".items-block"));
            }
            else {
                $(this).remove()
            }
        });

}



$(document).ready(function(){
    if(document.URL.indexOf('catalog') > 0){
        var sortby = getUrlParameter('sortby');
        var sort = getUrlParameter('sort');
        if(document.URL.indexOf('sort')>0) {
            if (sortby == 'name') {
                ProductsFilter(sort);
            }
            else {
                if (sortby && sort == "DESC") {
                    sortProductsPriceDescending()
                }
                else {
                    sortProductsPriceAscending()
                }
            }
        }
    }
})


$(document).ready(function(){
    $('.mob .catalog-filter-heading').click(function(){
        $('.catalog-nav-and-filter .catalog-filter').toggleClass('mobopen');
    })
    $('.mob .catalog-sort-heading').click(function(){
        $('.sorting').toggleClass('mobopen');
    })
});


function add_rating(item_id) {
    $.ajax({
        type: 'get',
        url: '/ajax/add_rating.php',
        data: 'id=' + item_id + '&count=' + Math.random(),
        dataType: "html",
        success: function (data) {


            console.log('rating num: ' + data);


        }
    });
}

function add_into_basket(id){
    var count = 1;
    $.ajax({
        type: 'post',
        url: '/cms/admin/basket.php',
        data: 'pl_plugin_order[1_' + id + ']= ' + count + '',
        dataType: "html",
        beforeSend: function () {
            window.startTime = Date.now();
        },
        complete: function () {

        },
        success: function (data) {
            //console.log('add ' + id);
            $('.mini-basket-top-panel').replaceWith($(data).find('.mini-basket-top-panel'));
            $('#mini-basket').replaceWith($(data).find('#mini-basket'));
            //$('.cart-items').replaceWith($(data).find('.cart-items'));
            //$('.cart-total').replaceWith($(data).find('.cart-total'));
        }
    });
}

function set_in_basket(item_id) {
    var ids = item_id.split(',');
    ids.map(add_into_basket);
}


function rem_rating(item_id) {
    $.ajax({
        type: 'get',
        url: '/ajax/rem_rating.php',
        data: 'id=' + item_id + '&count=' + Math.random(),
        dataType: "html",
        success: function (data) {
            console.log('return: ' + data);
        },
        fail: function (err) {
            console.log('return: ' + err);
        }
    });
}


function millisecondsToTime(milli)
{
    var milliseconds = milli % 1000;
    var seconds = Math.floor((milli / 1000) % 60);
    var minutes = Math.floor((milli / (60 * 1000)) % 60);

    return minutes + ":" + seconds + "." + milliseconds;
}





    function add_to_basket(src, item_id, count, thisBtn) {
        $.ajax({
            type: 'post',
            url: '/cms/admin/basket.php',
            data: 'pl_plugin_order[1_' + item_id + ']= ' + count + '',
            dataType: "html",
            beforeSend: function () {
                //$(elementButton).text('').attr({"class":class_name+"_loading"});
                window.startTime = Date.now();
            },
            complete: function () {

            },
            success: function (data) {

                if (src == 'catalog') {
                    thisBtn.addClass('btn-green');
                    thisBtn.removeClass('btn-blue');
                    thisBtn.text('уже в корзине');
                }
                if (src == 'item') {
                    thisBtn.addClass('btn-green');
                    thisBtn.removeClass('btn-blue');
                    thisBtn.text('уже в корзине');
                }
                if (src == 'item_plus_minus cart') {
                    $('.cart-items').replaceWith($(data).find('.cart-items'));
                    $('.cart-total').replaceWith($(data).find('.cart-total'));

                }
                if (src == 'main-page') {
                    $('.main-page-products-list').replaceWith($(data).find('.main-page-products-list'));
                }
                if (src == 'saved_items') {
                    $('.saved-items').replaceWith($(data).filter('.saved-items'));
                }
                $('#mini-basket').replaceWith($(data).find('#mini-basket'));
                $('.top-panel').replaceWith($(data).filter('.top-panel'));
                var endTime = Date.now();
                var diff = parseInt(endTime) - parseInt(window.startTime);
                console.log(millisecondsToTime(diff));
            }
        });
    }

    function add_to_favorites(item_id, action) {


        var favoritesNumber = parseInt($('.favorites-link-number').first().text());
        if (isNaN(favoritesNumber)) {
            favoritesNumber = 0;
        }
        if (action == 'add_to_favorites') {
            favoritesNumber += 1;
        }
        else {
            favoritesNumber -= 1;
        }
        if (favoritesNumber == 0) {
            favoritesNumber = '';
        }
        $.each($('.favorites-link-number'), function () {
            $(this).text(favoritesNumber);
        })

        $.ajax({
            type: 'post',
            url: 'https://shop.lamaree.ru/ajax/favorite_items.php',
            data: {'action': action, 'item_id': item_id},

            success: function (data) {

                if (action == 'add_to_favorites') {
                    $('#fav_' + item_id).addClass('remove');
                    $('#sav_' + item_id).addClass('remove');
                }
                else {

                    $('#fav_' + item_id).removeClass('remove');
                    $('#sav_' + item_id).removeClass('remove');

                    if ($('.saved-items').length) {

                        $.ajax({
                            type: 'post',
                            success: function (data) {
                                $('.saved-items').replaceWith($(data).filter('.saved-items'));
                            }
                        });
                    }

                }
            }
        });
    }


function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};

function scroll() { /* a = classname */
    $("html, body").stop().animate({scrollTop: $('.order-form-container').position().top}, 500, 'swing');
}

function scroll_addr() {
    $("html, body").stop().animate({scrollTop: $('.address-inputs').eq(1).position().top}, 500, 'swing');
}

function scroll_date1() {
    $("html, body").stop().animate({scrollTop: $('[name=user_f_9]').position().top}, 500, 'swing');
}

function scroll_date2() {
    $("html, body").stop().animate({scrollTop: $('[name=user_f_9_2]').position().top}, 500, 'swing');
}


function dateCheck(from,to,check) { // dates in mm/dd/yyyy   !!!!
                                    // to check dates between

    var fDate,lDate,cDate;
    fDate = Date.parse(from);
    lDate = Date.parse(to);
    cDate = Date.parse(check);

    if((cDate <= lDate && cDate >= fDate)) {
        return true;
    }
    return false;
}


function checkOrderForm() {
    var result = true;
    var delivery = $('.order-form-container input[name="user_f_11"]').val(); //(1 - no delivery)

    if ($.trim($('.order-form input[name="user_f_1"]').val()) == '') {
        $('.order-form input[name="user_f_1"]').addClass('error');
        scroll();
        result = false;
    }
    else {
        if ($('.order-form input[name="user_f_1"]').hasClass('error')) {
            $('.order-form input[name="user_f_1"]').removeClass('error');
        }
    }


    if(delivery < 1) { // если не самовывоз
        if ($('[name="user_f_4_5"] option:selected').val() == 0) {
            $('[name="user_f_4_5"]').addClass('error');
            scroll();
            result = false;
        }
        else {
            if ($('[name="user_f_4_5"]').hasClass('error')) {
                $('[name="user_f_4_5"]').removeClass('error');
            }
        }
    }


    var dayArr = $('.order-form input[name="user_f_9"]').val().split('.');
    var dGet = '20' + dayArr[2] + '.' + dayArr[1] + '.' + dayArr[0];
    var d = new Date(dGet);
    var isWeekend = (d.getDay() === 0);


    if (isWeekend) {
        $('.order-form input[name="user_f_9"]').addClass('error');
        scroll_date1()
        result = false;
    }
    else {
        if ($('.order-form input[name="user_f_9"]').hasClass('error')) {
            $('.order-form input[name="user_f_9"]').removeClass('error');
        }
    }


    if ($.trim($('.order-form input[name="user_f_2"]').val()) == '' || !isValidEmailAddress($('.order-form input[name="user_f_2"]').val())) {
        $('.order-form input[name="user_f_2"]').addClass('error');
        scroll();
        result = false;
    }
    else {
        if ($('.order-form input[name="user_f_2"]').hasClass('error')) {
            $('.order-form input[name="user_f_2"]').removeClass('error');
        }
    }


    if (!$('.order-form input[name="user_f_12"]').is(':checked')) {
        $('.order-form input[name="user_f_12"] + div').addClass('error');
        scroll();
        result = false;
    }
    else {
        if ($('.order-form input[name="user_f_12"] + div').hasClass('error')) {
            $('.order-form input[name="user_f_12"] + div').removeClass('error');
        }
    }


    if ($('[name=user_f_5]').val().replace(/\D+/g, '').length != 11) {
        $('.order-form input[name="user_f_5"]').addClass('error');
        scroll();
        result = false;
    }
    else {
        if ($('.order-form input[name="user_f_5"]').hasClass('error')) {
            $('.order-form input[name="user_f_5"]').removeClass('error');
        }
    }

    // забанить имейл
    if (
        $('.order-form input[name="user_f_2"]').val() === 'alex.ru@bk.ru'
        || $('.order-form input[name="user_f_2"]').val() === 'fhhj@mail.ru') {

        $('.order-form input[name="user_f_2"]').addClass('error');
        return false;

    }


    if (delivery == '0') {
        var adr;

        if (!$('input[name="user_f_4"]').length) {
            if (!$('.no-address').length) {
                alert('<p class="no-address" style="color: red; margin: 30px 0 0 0; ">Вы не добавили ни одного адреса доставки, добавьте и укажите пожалуйста адрес доставки</p>');
                result = false;
            }
        }
        else {
            $('.no-address').remove();
        }
        if ($('input[name="user_f_4"]').attr('type') == 'radio') {
            adr = $('input[name="user_f_4"]:checked').val();
        }
        else {
            adr = $('input[name="user_f_4"]').val();
        }
        if ($.trim(adr) == '') {
            $('.order-form input[name="user_f_4"]').addClass('error');
            scroll_addr();
            result = false;
        }
        else {
            if ($('.order-form input[name="user_f_4"]').hasClass('error')) {
                $('.order-form input[name="user_f_4"]').removeClass('error');
            }
        }


        if ($.trim($('.metromenu').val()) == '') {
            $('.metromenu').addClass('error');
            scroll_addr();
            result = false;
        }
        else {
            if ($('.metromenu').hasClass('error')) {
                $('.metromenu').removeClass('error');
            }
        }


        /*if ($('[name=user_f_9]') == '') {
         $('[name=user_f_9]').addClass('error');
         scroll_date();
         result = false;
         }
         else {
         if ($('.order-form input[name="user_f_4"]').hasClass('error')) {
         $('.order-form input[name="user_f_4"]').removeClass('error');
         }
         }*/


        // забанить имейл
        if (
            $('.order-form input[name="user_f_2"]').val() === 'alex.ru@bk.ru'
            || $('.order-form input[name="user_f_2"]').val() === 'fhhj@mail.ru') {

            $('.order-form input[name="user_f_2"]').addClass('error');
            return false;

        }


        // минимальная сумма доставки 2000
        var minSum = 2000;
        var orderSum = parseInt($('.mini-basket-sum a').text());

        if(dateCheck("12/23/2019", "12/28/2019", new Date())) {
            minSum = 3000;
            console.log(dateCheck("12/23/2019", "12/28/2019", new Date()) + " " + new Date())
        }


        if (orderSum < minSum) {
            $('.order-form .minimal-sum').css('display', 'block');
            result = false;
        }
        else {
            $('.order-form .minimal-sum').css('display', 'none');
        }

    }


    return result;
}


$(document).ready(function(){ // datetimepicker specific
    $('#datetimepicker2').datetimepicker(
        { format: 'DD.MM.YY' }).on('dp.change', function (e) {

        var vat = $('[name="user_f_9_3"] option:selected').val();
        var tal = $('[name="user_f_9_3"] option:selected').text();
        var rvat, rtal;

        //console.log(e.date)

        if(dateCheck("12/23/2019", "12/28/2019", new Date(e.date))){

            rvat = vat.replace('19', '21');
            rtal = tal.replace('19', '21');

        }
        else{

            rvat = vat.replace('21', '19');
            rtal = tal.replace('21', '19');

        }

        //console.log(rtal)

        $('[name="user_f_9_3"] option:selected').val(rvat)
        $('[name="user_f_9_3"] option:selected').text(rtal)

    });
});

if(dateCheck("12/15/2019", "01/08/2020", new Date())){
    //$('.numberCircle').addClass('snow');
    /*$('#headerLogo').addClass('snow');
    $('#mainPage').addClass('snow');
    $('.carousel').addClass('snow');*/

    if($('.carousel-inner').length) {
        $('.carousel-inner').addClass('snow');
    }
    else{
        $('.carousel').addClass('snow');
    }

}


function checkActiveDelivery() {

    var minSum = 2000;

    if(dateCheck("12/23/2019", "12/28/2019", new Date())) {
        minSum = 3000;
        console.log(dateCheck("12/23/2019", "12/28/2019", new Date()) + " " + new Date())
    }


    $('.minimal-sum').css('display', 'none');
    var total_sum_without_delivery = parseFloat($('.order-basket .total-sum-without-delivery').text());

    if ($('.delivery-inputs .active').hasClass('delivery-input1')) {
        $('.order-form .input-like-div.del.first').trigger('click');
        //$('.order-form select[name="user_f_9"]').find("option").eq(0).attr('disabled', 'disabled');
        //$('.order-form select[name="user_f_9"]').find("option").eq(0).attr('selected', 'selected');
        $.each($('.delivery'), function () {
            $(this).css('display', 'block');
        });
        $.each($('.no-delivery'), function () {
            $(this).css('display', 'none');
        });

        $('.order-form-container input[name="user_f_11"]').val('0');

        if (total_sum_without_delivery < 8000) {
            $('.order-basket .total-sum span').text(total_sum_without_delivery + 350);
        }
        else {
            $('.order-basket .total-sum span').text(total_sum_without_delivery);
        }

        if (total_sum_without_delivery < minSum) {
            $('.minimal-sum').css('display', 'block');

        }
        else {
            $('.minimal-sum').css('display', 'none');
        }
    }
    else {

        $('.order-form .minimal-sum').css('display', 'none');
        $.each($('.delivery'), function () {
            $(this).css('display', 'none');
        });
        $.each($('.no-delivery'), function () {
            $(this).css('display', 'block');
        });
        $('.order-form-container input[name="user_f_11"]').val('1');
        $('.order-basket .total-sum span').text(total_sum_without_delivery);
    }
}

function headerSearch() {
    var searchWords = $('.popup-search input').val();
    if (searchWords.length < 3) {

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
            $('.popup-search-results').html(data);
            $('.popup-search-results').css('display', 'block');
        }
    });
}

function checkLoginForm(f) {
    var user_email = f.find('input[name="user_email"]').val();
    var user_pass = f.find('input[name="user_pass"]').val();
    var res = true;
    if (!isValidEmailAddress(user_email)) {
        if (!f.find('input[name="user_email"]').hasClass('error')) {
            f.find('input[name="user_email"]').addClass('error');
        }
        res = false;
    }
    else {
        if (f.find('input[name="user_email"]').hasClass('error')) {
            f.find('input[name="user_email"]').removeClass('error');
        }
    }
    if ($.trim(user_pass).length == 0) {
        if (!f.find('input[name="user_pass"]').hasClass('error')) {
            f.find('input[name="user_pass"]').addClass('error');
        }
        res = false;
    }
    else {
        if (f.find('input[name="user_pass"]').hasClass('error')) {
            f.find('input[name="user_pass"]').removeClass('error');
        }
    }
    if (res == false) {
        f.find('.error-message').css('display', 'block');
        f.find('.wave-container').css('display', 'none');
    }
    else {
        f.find('.error-message').css('display', 'none');
        f.find('.wave-container').css('display', 'block');
    }
    return res;
}

function checkRegisterForm(f) {
    var su_name = f.find('input[name="su_name"]').val();
    var su_pers_phone = f.find('input[name="su_pers_phone"]').val();
    var su_email_reg = f.find('input[name="su_email_reg"]').val();
    var su_pass1 = f.find('input[name="su_pass1"]').val();
    var su_pass2 = f.find('input[name="su_pass2"]').val();
    var res = true;


    // user_name
    if ($.trim(su_name).length == 0) {
        if (!f.find('input[name="su_name"]').hasClass('error')) {
            f.find('input[name="su_name"]').addClass('error');
        }
        res = false;
    }
    else {
        if (f.find('input[name="su_name"]').hasClass('error')) {
            f.find('input[name="su_name"]').removeClass('error');
        }
    }
    //user_phone
    if ($.trim(su_pers_phone).length < 14) {
        if (!f.find('input[name="su_pers_phone"]').hasClass('error')) {
            f.find('input[name="su_pers_phone"]').addClass('error');
        }
        res = false;
    }

    else {
        if (f.find('input[name="su_pers_phone"]').hasClass('error')) {
            f.find('input[name="su_pers_phone"]').removeClass('error');
        }
    }

    //email
    if (!isValidEmailAddress(su_email_reg)) {
        if (!f.find('input[name="su_email_reg"]').hasClass('error')) {
            f.find('input[name="su_email_reg"]').addClass('error');
        }
        res = false;
    }
    else {
        if (f.find('input[name="su_email_reg"]').hasClass('error')) {
            f.find('input[name="su_email_reg"]').removeClass('error');
        }
    }

    // user_pass
    if (su_pass1.length == 0 || su_pass2.length == 0 || su_pass1 != su_pass2) {
        if (!f.find('input[name="su_pass1"]').hasClass('error')) {
            f.find('input[name="su_pass1"]').addClass('error');
        }
        if (!f.find('input[name="su_pass2"]').hasClass('error')) {
            f.find('input[name="su_pass2"]').addClass('error');
        }
        res = false;
    }
    else {
        if (f.find('input[name="su_pass1"]').hasClass('error')) {
            f.find('input[name="su_pass1"]').removeClass('error');
        }
        if (f.find('input[name="su_pass2"]').hasClass('error')) {
            f.find('input[name="su_pass2"]').removeClass('error');
        }
    }


    if (res == false) {
        f.find('.error-message').css('display', 'block');
        f.find('.wave-container').css('display', 'none');
    }
    else {
        f.find('.error-message').css('display', 'none');
        f.find('.wave-container').css('display', 'block');
    }
    return res;
}

function ajax_login(email, password) {
    var pageUrl = window.location;

    $.post(pageUrl, {su_email: email, su_pass: password}, onSuccess, "html").fail(function () {
        location.reload()
    });

    function onSuccess(data) {
        if ($(data).find('.header-nav-search-personal .header-login-button').length) {
            // неверные данные авторизации
            $('.login-modal .error-message p').text('Неверный логин или пароль');
            $('.login-modal .error-message').css('display', 'block');
            $('.login-modal .wave-container').css('display', 'none');
        }
        else {
            // авторизация прошла успешно
            location.reload();
        }
    };
};

function ajax_registr(user_name, user_phone, user_email, user_pass, user_pass2) {
    var pageUrl = window.location;

    $.post(pageUrl, {su_email: email, su_pass: password}, onSuccess, "html").fail(function () {
        location.reload()
    });

    function onSuccess(data) {
        if ($(data).find('.header-nav-search-personal .header-login-button').length) {
            // неверные данные авторизации
            $('.login-modal .error-message p').text('Неверный логин или пароль');
            $('.login-modal .error-message').css('display', 'block');
            $('.login-modal .wave-container').css('display', 'none');
        }
        else {
            // авторизация прошла успешно
            location.reload();
        }
    };
};

function subscribeEmail(email, action) {
        if (email == '' || action == '') {
            return false;
        }
        else {
            var res = false;
            $.ajax({
                type: 'post',
                url: 'https://shop.lamaree.ru/ajax/subscribe.php',
                data: {'email': email, 'action': action},
                dataType: 'html',
                beforeSend: function () {

                },
                complete: function () {

                },
                success: function (data) {
                    if (data == 'success') {
                        res = true;
                    }
                }
            });

            return true;
        }
    }



// JavaScript Document
$(document).ready(function () {

    $('body').on('click tap', '.delivery-inputs div', function () {
        if ($(this).hasClass('active')) {
            return false;
        }


        if ($(this).index() == 1) {
            $("[name=user_f_11]").val(1);
            $("[name=user_f_9]").removeAttr('required');
            $("[name=user_f_9_2]").attr('required', 'required');
            $('.date-inputs .input-heading font').remove();
            $("[name=user_f_9_2]").parents('div').prev('.input-heading').append('<font color=red>*</font>');
        }
        else {
            $("[name=user_f_11]").val(0);
            $("[name=user_f_9_2]").removeAttr('required');
            $("[name=user_f_9]").attr('required', 'required');
            $('.date-inputs .input-heading font').remove();
            $("[name=user_f_9]").parents('div').prev('.input-heading').append('<font color=red>*</font>');
        }

        $('.delivery-inputs div.active').removeClass('active');
        $(this).addClass('active');
        checkActiveDelivery();
    });

    if ($('body').find('.order-form').length) {
        checkActiveDelivery();
    }

    $('body').on('click tap', '.personal-toggle-inputs div', function () {
        if ($(this).hasClass('active')) {
            return false;
        }
        $('.personal-toggle-inputs div.active').removeClass('active');

        if ($(this).hasClass('personal-toggle0')) {
            $('.personal-form').css('display', 'block');
            $('.order-history').css('display', 'none');
        }
        else {
            $('.personal-form').css('display', 'none');
            $('.order-history').css('display', 'block');
        }


        $(this).addClass('active');

    });

    /*$('.catalog-item').on('mouseover', function () {
     var thisItemImage = $(this).find('.catalog-item-img').attr('src');

     //$(this).css('background-image', 'url(' + thisItemImage + ')');
     $(this).css('box-shadow', '0 30px 80px 0 rgba(0, 0, 0, 0.4)');
     $(this).css('z-index', '1');

     $(this).find('.catalog-item-container').css('border', 'solid 4px #f0e2c0');
     $(this).find('.catalog-item-btns').css('display', 'block');
     $(this).find('.catalog-item-img').css('width', '248px');
     })

     $('.catalog-item').on('mouseout', function () {
     //$(this).css('background-image', 'none');
     $(this).css('box-shadow', 'none');
     $(this).css('z-index', '0');

     $(this).find('.catalog-item-container').css('border', 'solid 4px white');
     $(this).find('.catalog-item-btns').css('display', 'none');
     $(this).find('.catalog-item-img').css('width', '248px');
     ;
     })*/


    function check() {
        var check = false;
        (function (a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    };

    //console.log("check = " + check());


    if (check() === false) {
        var mainCatTimeout;
        $('body').on('mouseenter', '#catalog-menu>ul>li', function (e) {
            var th = $(this);
            $.each($('#catalog-menu .sub-cats'), function () {
                $(this).css('display', 'none');
            });
            /*$.each($('#catalog-menu .opener'), function(){
             $(this).toggleClass('opened closed');
             });*/

            $(this).find('.sub-cats').css('display', 'block');
            $(this).find('.opener').toggleClass('closed opened');
            clearTimeout(mainCatTimeout);

        });


        $('body').on('mouseleave', '#catalog-menu>ul>li', function () {
            var th = $(this);
            mainCatTimeout = setTimeout(function () {
                th.find('.sub-cats').css('display', 'none');
                th.find('.opener').toggleClass('opened closed');
            }, 300);
        });

    }
    else { // for mobiles
        $('.opener').click(function () {
            var th = $(this);
            if (th.hasClass('opened')) {
                th.next('.sub-cats').css('display', 'none');
                th.toggleClass('opened closed');
            }
            else {
                th.next('.sub-cats').css('display', 'block');
                th.toggleClass('closed opened');
            }
        })
    }


    function sort_price_asc() {
        var myArray = $(".catalog-items-container .catalog-item");
        var count = 0;
        var cont = $(".catalog-items-container");

        myArray.sort(function (a, b) {


            a = parseInt($(a).data("price"), 10);
            b = parseInt($(b).data("price"), 10);
            count += 2;
            // compare
            if (a > b) {
                return 1;
            } else if (a < b) {
                return -1;
            } else {
                return 0;
            }
        });


        cont.empty();
        cont.append(myArray);

        return true;

    }


    var panelCatTimeout;
    $('body').on('mouseenter', '.top-panel-catalog-menu>ul>li', function () {
        $.each($('.top-panel-catalog-menu .sub-cats'), function () {
            $(this).css('display', 'none');
        });
        $(this).find('.sub-cats').css('display', 'block');
        clearTimeout(panelCatTimeout);
    });
    $('body').on('mouseleave', '.top-panel-catalog-menu>ul>li', function () {
        var th = $(this);
        panelCatTimeout = setTimeout(function () {
            th.find('.sub-cats').css('display', 'none');
        }, 300);
    });


    $('body').on('click tap', '.catalog-item-add-to-basket.btn-blue', function (e) {
        e.preventDefault();

        if ($(this).hasClass('btn-green')) {
            return false;
        }
        var item_id = $(this).attr('id').substr(3, 20);
        var count = $(this).attr('data-quan') || 1;
        var thisBtn = $(this);

        add_to_basket('catalog', item_id, count, thisBtn);

    });

    $('body').on('click tap', 'button[id*="plus"]', function (e) {
        e.preventDefault();
        var cur = parseInt($(this).prev('input').val());
        var nex = cur + 1;
        $(this).parent('div').find('input').val(nex);
        $(this).parent('div').find('.catalog-item-add-to-basket').attr('data-quan', nex);
    });


    $('body').on('click tap', 'button[id*="minus"]', function (e) {
        e.preventDefault();
        var cur = parseInt($(this).next('input').val());
        if (cur > 1) {
            var nex = cur - 1;
            $(this).parent('div').find('input').val(nex);
            $(this).parent('div').find('.catalog-item-add-to-basket').attr('data-quan', nex);
        }
    });


    $('body').on('click tap', '.saved-item-add-to-basket', function (e) {
        e.preventDefault();

        if ($(this).hasClass('btn-green')) {
            return false;
        }
        var item_id = $(this).attr('id').substr(3, 20);
        var count = parseInt($(this).parent().find('.amount-buttons .amount').text());
        var thisBtn = $(this);

        add_to_basket('saved_items', item_id, count, thisBtn);

    });
    $('body').on('click tap', '.main-page-products-list .add-to-basket', function (e) {
        e.preventDefault();
        if ($(this).hasClass('btn-green')) {
            return false;
        }
        var item_id = $(this).attr('id').substr(3, 20);
        var count = 1;
        var thisBtn = $(this);
        add_to_basket('main-page', item_id, count, thisBtn);

    });
    $('body').on('click tap', '.history-item .add-to-basket', function (e) {
        e.preventDefault();
        if ($(this).hasClass('btn-green')) {
            return false;
        }
        var item_id = $(this).attr('id').substr(3, 20);
        var count = parseInt($(this).parent().find('.amount').text());
        var thisBtn = $(this);

        add_to_basket('history', item_id, count, thisBtn);
    });
    $('body').on('click tap', '#catalog-item .add-to-basket', function (e) {
        e.preventDefault();

        if ($(this).hasClass('btn-green')) {
            return false;
        }
        var item_id = $(this).attr('id').substr(3, 20);
        var count = parseInt($(this).parent().find('.amount').text());
        var thisBtn = $(this);
        //alert(item_id + ' ' + count);
        add_to_basket('item', item_id, count, thisBtn);

    });

    var itemAmountTimeout;
    var initialAmount;
    $('body').on('click', '.amount-buttons .plus, .amount-buttons .minus', function () {
        var t = $(this);
        var item_id = $(this).parent().attr('id').substr(3, 20);
        clearTimeout(itemAmountTimeout);
        var amount = parseInt($(this).parent().find('.amount').text());

        if (!$.isNumeric(initialAmount)) {
            initialAmount = amount;
        }


        if ($(this).hasClass('plus')) {
            amount = amount + 1;
        }
        else {
            if (amount != 1) {
                amount = amount - 1;
            }
        }
        $(this).parent().find('.amount').text(amount);

        if (!$('#itemid_' + item_id).length) {
            initialAmount = '';
            return false;
        }
        else {
            itemAmountTimeout = setTimeout(function () {
                var delta = amount - initialAmount;

                initialAmount = '';
                if ($('#cart').length) {
                    add_to_basket('item_plus_minus cart', item_id, delta, t);
                }
                else if ($('#catalog-item').length) {
                    add_to_basket('item_plus_minus catalog_item', item_id, delta, t);
                }
                else if ($('.saved-items').length) {
                    add_to_basket('saved_items', item_id, delta, t);
                }

            }, 1000);
        }

    });
    if (window.screen.availWidth > 568)
        $('.top-panel .numberCircle').show();
    if (window.screen.availWidth < 770) {
        $('.carousel').css({'z-index': 8});
    }



    var miniBasketTimeout;
    $('body').on('mouseenter click tap', '.mini-basket-sum, .mini-basket-top-panel', function () {
        if ($('body').find('.no-items').length) {
            //console.log('return')
            return false;
        }
        $('.popup-basket').show();
        clearTimeout(miniBasketTimeout);
        if (window.screen.availWidth < 770) {
            $('.carousel').css({'z-index': 28});
        }
        if (window.screen.availWidth < 568)
         $('.top-panel .numberCircle').hide();
    });







    addEventListener('touchstart', this.callPassedFuntion, { passive: false });


    $('body').on('mouseenter', '.popup-basket', function () {
        clearTimeout(miniBasketTimeout);

    });

    var miniBasketTimeout = setTimeout(function () {
        $('.popup-basket').css('display', 'none');
    })



    $('.mob .mini-basket-top-panel').on('click tap', function () {
        $('.popup-basket').show();
    });


    $('body').on('mouseleave', '.mini-basket-sum, .popup-basket', function () {
        miniBasketTimeout = setTimeout(function () {
            $('.popup-basket').css('display', 'none');

            if (window.screen.availWidth > 568)
                $('.top-panel .numberCircle').show();


            if (window.screen.availWidth < 770) {
                $('.carousel').css({'z-index': 8});
            }

        }, 500);


    });


    $('body').on('click tap', '.item-delete .icon-delete', function (e) {
        e.preventDefault();
        var href = $(this).parent().attr('href');

        var item_id = href.substr(href.indexOf('[') + 3, 4);
        $.ajax({
            type: 'post',
            url: href,
            beforeSend: function () {
                window.startDel = Date.now();
            },
            complete: function () {

            },
            success: function (data) {
                $('#mini-basket .mini-basket-sum').replaceWith($(data).find('#mini-basket .mini-basket-sum'));
                $('.popup-basket').html($(data).find('.popup-basket').html());
                $('.top-panel-basket').replaceWith($(data).find('.top-panel-basket'));
                $('#id_' + item_id).removeClass('btn-green').addClass('btn-blue').text('в корзину');

                if ($('.amount-buttons').length) {
                    $('.amount-buttons .amount').text('1');
                }

                if ($(data).find('.no-items').length) {
                    $('.popup-basket').css('display', 'none');
                }
                if ($('.cart-items').length) {
                    $('.cart-items').replaceWith($(data).find('.cart-items'));
                }
                var endDel = Date.now();
                var diffD = parseInt(endDel) - parseInt(window.startDel);
                console.log(millisecondsToTime(diffD));
            }
        });
    });

    $('body').on('change', '.cart-total select', function (e) {
        var subtotal_sum = parseFloat($(this).parent().find('.subtotal-sum').text());
        var total_sum;
        if ($(this).val() == 0) {
            total_sum = subtotal_sum;
        }
        else {
            if(subtotal_sum < 8000) {
                total_sum = subtotal_sum + 350;
            }
        }
        $(this).parent().find('.total-price span').text(total_sum);
    })
    $('body').on('click tap', '.cart-total .btn-blue', function (e) {
        e.preventDefault();
        $('.cart-total form').submit();
    })


    $('body').on('click tap', '.input-toggle .input', function () {
        if ($(this).hasClass('active')) {
            return false;
        }
        else {
            $.each($(this).parent().find('.input'), function (e) {
                $(this).removeClass('active');
            });
            $(this).addClass('active');
        }
    });








    $('body').on('click tap', '.order-form-submit', function (e) {

        e.preventDefault();





                if (checkOrderForm()) {

                    var total_sum_without_delivery = parseFloat($('.order-basket .total-sum-without-delivery').text());

                    if(total_sum_without_delivery > 2000) {
                        var date_form = "";
                        var timeT = "";
                        if ($('.delivery-inputs .active').hasClass('delivery-input1')) {

                            checkActiveDelivery();

                            $([name = 'user_f_11']).val(0);

                            var reg_text = "";
                            //var region = parseInt($('.order-form input[name="user_f_4_5"]:checked').val());
                            var region = parseInt($('.order-form [name="user_f_4_5"] option:selected').val());
                            if(region === 1) {
                                reg_text = "Москва, ";
                            }
                            else {
                                reg_text = "МО, ";
                            }

                            var address = reg_text + $('.order-form input[name="user_f_4"]').val();
                            var address_2 = $('.order-form input[name="user_f_4_2"]').val();
                            var address_3 = $('.order-form input[name="user_f_4_3"]').val();
                            var address_4 = $('.order-form input[name="user_f_4_4"]').val();
                            var metro = $('.order-form select[name="metro-stations"] option:selected').data('subtext');


                            if ($('.order-form input[name="user_f_4"]').attr('type') !== 'radio') {





                                if ($.trim(address_2) != '') {
                                    address += ', д.' + address_2;
                                }
                                if ($.trim(address_3) != '') {
                                    address += ', кв.' + address_3;
                                }
                                if ($.trim(address_4) != '') {
                                    address += ', под.' + address_4;
                                }
                                if ($.trim(metro) != '') {
                                    address += ', метро ' + metro;
                                }

                                $('input[name="user_f_4"]').val(address);
                                $('input[name="user_f_11"]').val(0);

                                date_form = $('[name="user_f_9"]').val();









                                timeT = $('[name="user_f_9_3"] option:selected').val();
                                var resDateTime = "";
                                $('[name=user_f_9]').attr('type', 'text');
                                resDateTime = date_form + " " + timeT;
                                $('[name=user_f_9]').val(resDateTime.substring(0, 20));


                            }

                        }
                        else {
                            $('[name=user_f_4]').val('Самовывоз');
                            date_form = $('[name="user_f_9_2"]').val();

                            var d = date_form.replace(/(\d+)-(\d+)-(\d+)/, '$3.$2.$1');
                            var newDate = new Date();

                            timeT = newDate.getHours() + ":" + newDate.getMinutes()

                            $('[name=user_f_9]').attr('type', 'text');
                            $('[name=user_f_9]').val(d);


                            $('[name=user_f_9_2]').attr('type', 'text');
                            $('[name=user_f_9_2]').val(d);


                            $("[name = 'user_f_11']").val(1);

                        }
                        $('.order-form form').submit();
                    }
                    else{
                        alert("Минимальная сумма заказа 2000 руб.")
                    }

                }

    });









    /*$('body').on('submit', '.order-form form', function(e){
     e.preventDefault();
     if(checkOrderForm()){



     var form = new Object();
     form['pl_plugin_ident'] = $(".order-form input[name='pl_plugin_ident']").val();
     var pl_plugin_order = new Object();
     var tovary = $('.order-basket-items .item');
     $.each(tovary, function(i, e){
     var name = '1' + $(e).attr('id').substr(6,20);
     var kolvo = parseInt($(e).find('.item-amount').text());
     pl_plugin_order[name] = kolvo;
     });

     if($('.payment-inputs .input.active').hasClass('payment-input0')){
     $('.order-form input[name="user_f_12"]').val('0');
     }
     else if($('.payment-inputs .input.active').hasClass('payment-input1')){
     $('.order-form input[name="user_f_12"]').val('1');
     }
     else if($('.payment-inputs .input.active').hasClass('payment-input2')){
     $('.order-form input[name="user_f_12"]').val('2');
     }



     var name = $('.order-form input[name="user_f_1"]').val();
     var email = $('.order-form input[name="user_f_2"]').val();
     var phone = $('.order-form input[name="user_f_5"]').val();
     var address = $('.order-form input[name="user_f_4"]').val();
     var address_2 = $('.order-form input[name="user_f_4_2"]').val();
     var address_3 = $('.order-form input[name="user_f_4_3"]').val();
     var address_4 = $('.order-form input[name="user_f_4_4"]').val();
     var metro = $('.order-form select[name="metro-stations"]').val();
     var date = $('.order-form select[name="user_f_9"]').val();
     var time = $('.order-form select[name="user_f_9_3"]').val();
     var payment = $('.order-form input[name="user_f_12"]').val();
     var delivery = $('.order-form-container input[name="user_f_11"]').val();
     var commentary = $('.order-form input[name="user_f_6"]').val();


     var pickup = '';
     if(delivery == 1){

     if($('.order-form input[name="user_f_4"]').attr('type') != 'radio'){
     if($.trim(address_2) != ''){
     address += ', д.' + address_2;
     }
     if($.trim(address_3) != ''){
     address += ', кв.' + address_3;
     }
     if($.trim(address_4) != ''){
     address += ', под.' + address_4;
     }
     }
     date = date + ' ' + time;
     pickup = '0';
     // в CMS в место доставки есть поле самовывоз, поэтому если доставка 1 - то самовывоз 0, и наоборот
     address += '. Метро: ' + metro;

     }
     else {
     address = 'Самовывоз';
     pickup = '1';
     date = $('.order-form select[name="user_f_9_2"]').val();
     }


     form['pl_plugin_order'] = pl_plugin_order;
     form['order_goods'] = '1';
     form['user_f_1'] = name;
     form['user_f_2'] = email;
     form['user_f_4'] = address;
     form['user_f_5'] = phone;
     form['user_f_6'] = commentary;
     form['user_f_9'] = date;
     form['user_f_12'] = payment;
     form['user_f_11'] = pickup;

     //console.log(commentary);

     $.ajax({
     type: 'post',
     url: '//shop.lamaree.ru/basket/user-input.php',
     data: form,
     success: function(data){
     window.location.href = "//shop.lamaree.ru/basket/order-success.php";
     //$('.order-form-container').hide();
     //$('.catalog-path').after(order_success_message)
     },
     });

     if($('[name=user_f_2]').val().length > 0 && $('[name=user_f_2]').val().indexOf('@') > 0) {

     $('.order-form form').submit();
     }


     }
     });
     */


    $('body').on('change keyup', '.order-form .form-control', function () {
        if ($('.order-form .error').length) {
            checkOrderForm();
        }
    });


    $('body').on('click tap', '.date-inputs .input-like-div', function () {
        if ($(this).hasClass('active')) {
            return false;
        }


        $.each($(this).parent().find('option'), function () {
            $(this).removeAttr('selected');
        });
        if ($(this).hasClass('del')) {
            console.log('del');
            if ($(this).hasClass('first')) {
                $(this).parent().find('option:eq(0)').attr('selected', 'selected');
                $(this).parent().find('option:eq(0)').prop('selected', 'selected');
            }
            if ($(this).hasClass('second')) {
                $(this).parent().find('option:eq(1)').attr('selected', 'selected');
                $(this).parent().find('option:eq(1)').prop('selected', 'selected');
            }
        }
        else {
            if ($(this).hasClass('first')) {
                $(this).parent().find('option:eq(0)').attr('selected', 'selected');
                $(this).parent().find('option:eq(0)').prop('selected', 'selected');
            }
            if ($(this).hasClass('second')) {
                $(this).parent().find('option:eq(1)').attr('selected', 'selected');
                $(this).parent().find('option:eq(1)').prop('selected', 'selected');
            }
        }

        $(this).parent().find('select').change();
    });


    $('body').on('click tap', '.icon-menu', function (e) {
        $('#mainPage').toggleClass('open');
        $('.carousel').toggleClass('open');
        /* для всех, кроме главной */
        $('#headerNav').toggleClass('open');
        $('.top-panel .container').hide();
        //$(window,'body').scrollTop(0)
    });

    $('#headerNav .close-menu').click(function(){
        $('.carousel').toggleClass('open');
        $('#mainPage').toggleClass('open');
        $('#headerNav').toggleClass('open');
        $('.top-panel .container').show();
    })


    $('#catalog-menu .close-menu').click(function(){
        $('.carousel').toggleClass('open');
        $('#mainPage').toggleClass('open');
        $('#headerNav').toggleClass('open');
        $('.top-panel .container').show();
    })


    /*$('body').on('change', '[name=user_f_9]', function() {
     var op = $(this).find('option:selected').val();
     console.log(op);
     //$('select[name=user_f_9] option').attr('selected', false);
     $('option[value="' + op + '"]').attr('selected', 'selected');
     });*/





    $('body').on('click tap', '.close-minibasket', function (e) {
        $('.popup-basket').hide();
        //$('.top-panel').css({'z-index': 10});
        if (window.screen.availWidth < 770) {
            $('.carousel').css({'z-index': 8});
        }
        $('.top-panel .numberCircle').show()
    });


    $('body').on('click tap', '.header-search-btn, .search-button, .icon-magnifier', function (e) {
        e.preventDefault();
        if (!$(this).parent().hasClass('active')) {
            var t = '40px';
            if ($('.top-panel').css('display') == 'block') {
                t = '56px';
            }
            $('.popup-search').animate({
                top: t,
                //  opacity: '1',
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


    $('body').on('click tap', '.top-panel-phone-icon', function (e) {
        location.href = 'tel:+74956407080'
    });


    var headerSearchTimeout;
    $('.popup-search input').on('keyup', function () {
        clearTimeout(headerSearchTimeout);
        headerSearchTimeout = setTimeout(function () {
            headerSearch();
        }, 500);
    });
    $('.login-modal').plainModal({overlay: {fillColor: 'black', opacity: '0.65'}});
    $('.register-modal').plainModal({overlay: {fillColor: 'black', opacity: '0.65'}});
    $('.remember-modal').plainModal({overlay: {fillColor: 'black', opacity: '0.65'}});
    $('.new-address-modal').plainModal({overlay: {fillColor: 'black', opacity: '0.65'}});
    $('body').on('click tap', '.header-login-button, .icon-user-pic', function (e) {
        e.preventDefault();
        if ($('.close-login-modal').length === 0) {
            $('.login-modal').prepend('<span class="close-login-modal">╳ Закрыть</span>');
        }
        $('.login-modal').plainModal('open');
    });

    $('body').on('click tap', '.close-login-modal', function (e) {
        e.preventDefault();
        $('.login-modal').plainModal('close');
    });

    $('body').on('click tap', '.add-new-address-from-order', function (e) {
        e.preventDefault();

        $('.new-address-modal').plainModal('open');
    });
    $('body').on('click tap', ' .have-account a', function (e) {
        e.preventDefault();
        $('.register-modal').plainModal('close');
        setTimeout(function () {
            $('.login-modal').plainModal('open');
        }, 500);
    });

    $('body').on('click tap', '.forgot-password a', function (e) {
        e.preventDefault();
        $('.login-modal').plainModal('close');
        setTimeout(function () {
            $('.remember-modal').plainModal('open');
        }, 500);
    });
    $('body').on('click tap', '.remembered-password a', function (e) {
        e.preventDefault();
        $('.remember-modal').plainModal('close');
        setTimeout(function () {
            $('.login-modal').plainModal('open');
        }, 500);
    });

    $('body').on('click tap', '.no-account a', function (e) {
        e.preventDefault();
        $('.login-modal').plainModal('close');
        setTimeout(function () {
            $('.register-modal').plainModal('open');
        }, 500);
    });

    $('body').on('click tap', '.login-modal .login-submit', function (e) {
        e.preventDefault();
        $(this).parents().find('form#login-form').submit();
    });
    $('body').on('submit', '#login-form', function (e) {
        e.preventDefault();
        user_email = $(this).find('input[name="user_email"]').val();
        user_pass = $(this).find('input[name="user_pass"]').val();
        if (checkLoginForm($(this))) {
            ajax_login(user_email, user_pass);
        }
    });

    $('body').on('click tap', '.register-modal .register-submit', function (e) {
        e.preventDefault();
        var form = $(this).parents().find('form#register-form');
        if (checkRegisterForm(form)) {
            $(this).parents().find('form#register-form').submit();
        }
    });
    $('body').on('submit', '#password-remind-form', function (e) {

        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),

            data: $(this).serialize(),
            success: function (data) {
                if ($(data).find('.remember-password-success').length) {
                    if ($('.remember-modal .password-remind-message').hasClass('error')) {
                        $('.remember-modal .password-remind-message').removeClass('error');
                    }
                    $('.remember-modal .password-remind-message').text($(data).find('.remember-password-success').text());
                    $('.remember-modal input[name="su_email_remind"]').parent().css('display', 'none');
                    $('.remember-modal .remember-submit').css('display', 'none');

                    setTimeout(function () {
                        $('.remember-modal').plainModal('close');
                        setTimeout(function () {
                            $('.login-modal').plainModal('open');
                        }, 500);
                    }, 8000);

                }


                if ($(data).find('.remember-password-error').length) {
                    if (!$('.remember-modal .password-remind-message').hasClass('error')) {
                        $('.remember-modal .password-remind-message').addClass('error');
                        $('.remember-modal .password-remind-message').text($(data).filter('.remember-password-error').text());

                    }
                    if (!$('.remember-modal input[name="su_email_remind"]').hasClass('error')) {
                        $('.remember-modal input[name="su_email_remind"]').addClass('error');
                    }
                }
            },
            error: function (xhr, err) {

            },

            complete: function () {

            }
        });
        return false;

    });

    $('body').on('click tap', '.remember-modal .remember-submit', function (e) {
        e.preventDefault();

        var email = $(this).parents('#password-remind-form').find("input[name='su_email_remind']").val();
        if (isValidEmailAddress(email)) {
            $('#password-remind-form').submit();
        }
        else {
            if (!$('#password-remind-form').find("input[name='su_email_remind']").hasClass('error')) {
                $('#password-remind-form').find("input[name='su_email_remind']").addClass('error');
            }
        }
    });
    /* отключен из-за проблемы ajax cors policy
    $('body').on('submit', '#register-form', function (e) {
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            success: function (data) {
                if ($(data).filter('.register-success').length) {
                    $('.register-modal').plainModal('close');
                    setTimeout(function () {
                        $('.login-modal .successful-register').css('display', 'block');
                        $('.login-modal').plainModal('open');
                    }, 500);
                }
                if ($(data).find('.register-error').length) {


                    $('#register-form .error-message p').text('Введенный вами e-mail занят');
                    $('#register-form .error-message').css('display', 'block');
                    $('#register-form .wave-container').css('display', 'none');
                    if (!$('#register-form input[name="su_email_reg"]').hasClass('error')) {
                        $('#register-form input[name="su_email_reg"]').addClass('error');

                    }
                }

            },
            error: function (xhr, err) {

            },

            complete: function () {
            }
        });
        return false;

    });*/


    $('body').on('click tap', '.personal-form .edit-data', function (e) {
        e.preventDefault();
        if ($(this).hasClass('active')) {
            $(this).parent().find('.actual-data').css('display', 'block');
            $(this).parent().find('.input').css('display', 'none');
            $(this).text('Изменить').removeClass('active');
        }
        else {
            $(this).parent().find('.actual-data').css('display', 'none');
            $(this).parent().find('.input').css('display', 'block');
            $(this).text('Сохранить').addClass('active');
            $(this).parent().find('input').trigger('focus');
        }

    })

    $('body').on('click tap', '.order-history .order-item-names, .order-price span.glyphicon', function (e) {
        if ($(this).hasClass('glyphicon')) {
            e.preventDefault();
            $.each($(this).parent().parent().find('.plain'), function (s) {
                $(this).css('display', 'none');
            })
            $(this).parent().parent().find('.history-items').css('display', 'block');
        }
        else {
            e.preventDefault();
            $.each($(this).parent().find('.plain'), function (s) {
                $(this).css('display', 'none');
            })
            $(this).parent().find('.history-items').css('display', 'block');
        }

    })
    $('body').on('click tap', '.close-history-items', function (e) {
        e.preventDefault();
        $.each($(this).parents('.order').find('.plain'), function (s) {
            $(this).css('display', 'block');
        })
        $(this).parents('.order').find('.history-items').css('display', 'none');
    })
    $('body').on('mouseenter', '.history-items .history-item', function (e) {
        $(this).find('.item-price').css('display', 'none');
        $(this).find('.history-item-btns').css('display', 'block');
    })
    $('body').on('mouseleave', '.history-items .history-item', function (e) {
        $(this).find('.item-price').css('display', 'block');
        $(this).find('.history-item-btns').css('display', 'none');
    })


    $('body').on('click tap', '.personal-form .btn.new-address', function (e) {
        e.preventDefault();

        newAddressInputs = '<div class="form-group-inputs address-inputs">';
        newAddressInputs += '	<div class="col-xs-6">';
        newAddressInputs += '		<div class="input-heading">Улица</div>';
        newAddressInputs += '		<input type="text" name="street" class="input-username form-control" placeholder="" value="" />';
        newAddressInputs += '	</div>';
        newAddressInputs += '	<div class="col-xs-2" style="padding-left:16px">';
        newAddressInputs += '		<div class="input-heading">Дом, корпус</div>';
        newAddressInputs += '			<input type="text" name="home" class="input-username form-control " placeholder="" value="" />';
        newAddressInputs += '		</div>';
        newAddressInputs += '		<div class="col-xs-2" style="padding-left:16px">';
        newAddressInputs += '		<div class="input-heading">Квартира</div>';
        newAddressInputs += '			<input type="text" name="apartment" class="input-username form-control" placeholder="" value="" />';
        newAddressInputs += '	</div>';
        newAddressInputs += '	<div class="col-xs-2" style="padding-left:16px">';
        newAddressInputs += '		<div class="input-heading">Подъезд</div>';
        newAddressInputs += '			<input type="text" name="podezd" class="input-username form-control" placeholder="" value="" />';
        newAddressInputs += '		</div>';
        newAddressInputs += '		<span class="clearfix"></span>';
        newAddressInputs += '	</div>';


        if ($('.personal-form .address-inputs').length) {
            $('.personal-form .address-inputs:last').after(newAddressInputs);
        }
        else {
            $('.personal-form .addresses .form-group-name').after(newAddressInputs);
        }
    });

    $('body').on('click tap', '.personal-form-submit', function (e) {
        e.preventDefault();
        $(this).parents('form').submit();
    });
    $('body').on('submit', '.personal-form form', function (e) {
        e.preventDefault();


        var address_string = '';
        // формируем массив адресов доставки
        $.each($(this).find('.address-inputs'), function () {
            var street = $(this).find('input[name="street"]').val();
            var Home = $(this).find('input[name="home"]').val();
            var apartment = $(this).find('input[name="apartment"]').val();
            var podezd = $(this).find('input[name="podezd"]').val();

            if (street == '' && Home == '' && apartment == '' && podezd == '') {

            }
            else {
                address_string += street + ';' + Home + ';' + apartment + ';' + podezd + '|';
            }
        });

        $(this).find('input[name="user_f_2"]').val(address_string);

        var url = $(this).attr('action') + '/';
        var data = $(this).serialize();
        $.post(url, data, function (data) {
            if ($(data).find('.success').length) {
                location.reload();
            }
        });

        setTimeout(function(){location.reload();},2000);
    });


    $('body').on('click', '#main-page-also .inner', function (e) {
        var url = $(this).next('a').attr('href');
        window.open(url, '_blank');
    });


    $('body').on('mouseenter', '.main-page-products-list .list-item', function (e) {
        $(this).find('.main-props-btns').css('display', 'block');
        $('body').addClass('unscroll');
    });
    $('body').on('mouseleave', '.main-page-products-list .list-item', function (e) {
        $(this).find('.main-props-btns').css('display', 'none');
        $('body').removeClass('unscroll');
    });


    /*оформление подписки на новости*/
    $('body').on('click tap', '.sub-and-social .sub .first-stage .btn', function (e) {
        e.preventDefault();
        $(this).parent().parent().find('.second-stage').css('display', 'block');
        $(this).parent().css('display', 'none');
        $(this).parent().parent().find('.second-stage input').trigger('focus');
    });


    $('body').on('click tap', '.sub-and-social .sub .second-stage .btn', function (e) {
        e.preventDefault();

        var email = $(this).parent().find('input').val();
        if (isValidEmailAddress(email)) {
            if (subscribeEmail(email, 'subscribe')) {
                $('.sub-and-social .sub .second-stage .inputs').css('display', 'none');
                $('.sub-and-social .sub .second-stage .success').css('display', 'block');
            }
        }
        else {
            if (!$(this).parent().find('input').hasClass('error')) {
                $(this).parent().find('input').addClass('error');
            }
        }
    });
    $('body').on('keyup', 'input.sub-email.error', function () {
        var email = $(this).val();
        if (isValidEmailAddress(email)) {
            $(this).removeClass('error');
        }
    });

    $('body').on('click tap', '.sub-and-social .sub .cancel-sub', function (e) {
        e.preventDefault();
        email = $(this).parent().parent().find('input').val();
        if (subscribeEmail(email, 'unsubscribe')) {
            $(this).parent().html('Поздравляем! Подписка отменена. <a href="#" class="re-sub">подписаться заново</a>');
        }

    });
    $('body').on('click tap', '.sub-and-social .sub .re-sub', function (e) {
        e.preventDefault();
        email = $(this).parent().parent().find('input').val();
        if (subscribeEmail(email, 'subscribe')) {
            $(this).parent().html('Поздравляем! Подписка успешно оформлена. <a href="#" class="cancel-sub">Отменить подписку</a>');
        }

    });





    







    $.fn.isInViewport = function () {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    /*
     if ($(window).width() < 600) {
     $('meta[name=viewport]').attr('content','width=device-width, initial-scale=0.2');
     }
     if ($(window).width() > 1160) {
     $('meta[name=viewport]').attr('content','width=device-width, initial-scale=1.5');
     }
     */

    $(window).scroll(function () {
        var top_of_element = $("#catalog-menu").offset().top;
        var bottom_of_element = $("#catalog-menu").offset().top + $("#catalog-menu").outerHeight();
        var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
        var top_of_screen = $(window).scrollTop();

        if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
            $('.top-panel').css('display', 'none');
            $('.popup-basket').css('position', 'absolute');
            $('.popup-basket').css('top', '32px').css('right', '-92px');
            $('body').css('margin-top', '0');
            $('.popup-search').css('position', 'absolute').css('z-index', '6');
            if ($('.popup-search').css('top') == '56px') {
                $('.popup-search').css('top', '40px');
            }
        }
        else {
            $('.top-panel').css('display', 'block');
            $('.popup-basket').css('position', 'fixed');
            $('.popup-basket').css('top', '72px').css('right', '68px');
            $('body').css('margin-top', '-56px');
            $('.popup-search').css('position', 'fixed').css('z-index', '1000').css('overflow-y', 'auto');
            if ($('.popup-search').css('top') == '40px') {
                $('.popup-search').css('top', '56px');
            }
        }
    });


    $('body').on('click tap', '.add-to-favorites, .add-to-favorites-smaller', function (e) {
        e.preventDefault();
        var item_id = $(this).attr('id').substring(4);
        var action = '';
        if ($(this).hasClass("remove")) {
            action = 'remove_from_favorites';
        }
        else {
            action = 'add_to_favorites';
        }
        add_to_favorites(item_id, action);
    });

    $('body').on('click tap', '.personal-logout-container a', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'get',
            data: {'su_action': 'logout'},
            dataType: "html",
            success: function (data) {
                window.location = '/';
            }
        });
    });

    $('body').on('click tap', '.add-address-submit', function (e) {
        e.preventDefault();
        var region = $(this).parent().find('input[name="region"]:checked').val();
        var street = $(this).parent().find('input[name="street"]').val();
        var home = $(this).parent().find('input[name="home"]').val();
        var apartment = $(this).parent().find('input[name="apartment"]').val();
        var podezd = $(this).parent().find('input[name="podezd"]').val();
        var user_id = $(this).attr('id').substr(2);
        if ($.trim(street) === '') {
            if (!$(this).parent().find('input[name="street"]').hasClass('error')) {
                $(this).parent().find('input[name="street"]').addClass('error');
            }
            return false;
        }
        else {
            if ($(this).parent().find('input[name="street"]').hasClass('error')) {
                $(this).parent().find('input[name="street"]').removeClass('error');
            }
        }


        $.ajax({
            type: 'post',
            url: '/ajax/add-delivery-address.php',
            data: {'user_id': user_id, 'street': street, 'home': home, 'apartment': apartment, 'podezd': podezd, 'region': region},
            success: function (data) {
                // новый адрес добавлен, теперь надо получить новую форму и вставить вместо старой
                $.ajax({
                    type: 'post',
                    datatype: 'html',
                    success: function (dat) {
                        $('.user-addresses').replaceWith($(dat).find('.user-addresses'));
                        $('.new-address-modal').plainModal('close');
                        $('#adr0').prop('checked', true);
                    }
                })
            }
        })

    });

    if ($('#adr0').length) {
        $('#adr0').prop('checked', true);
    }

    if ($('.metromenu').length) {
        $.ajax({
            type: 'get',
            url: '/ajax/metrostations.txt',
            success: function (data) {
                var metroStations = JSON.parse(data);
                $.each(metroStations.objects, function (key, data) {
                    $('.metromenu').append(' <option data-subtext="' + data.title + '">' + data.title + '</option>');
                });
            }
        })
    }

// для работы "избранных товаров" необходимо наличие $_COOKIE['pl_basket_user_id'], 
//если нет этого куки, то имитируем добавление товара в корзину и он появляется

    if (!!$.cookie('pl_basket_user_id')) {
    }
    else {
        $.ajax({
            type: 'get',
            url: '/cms/admin/basket.php',
            data: 'pl_plugin_order[1_6653]=1',
            dataType: "html",
            success: function (data) {
                $.ajax({
                    type: 'get',
                    url: '/cms/admin/basket.php',
                    data: 'pl_plugin_order[1_6653]=-1',
                    dataType: "html",
                    success: function (data) {
                    }
                });
            }
        });
    }
    $('body').on('keyup', '#commentary', function () {
        $('input[name="user_f_6"]').val($(this).val());
    });


    $('.phone-input').mask(("+7(999) 999-9999"));


    if ($('.catalog-text-wrapper').text().trim().length === 0
        || document.URL.indexOf('page_') > 0) {
        $('#catalog-page-adv').hide();
    }




    $('.mob .carousel.slide').click(function () {
        //console.log('bum')
        $('.popup-basket').show();
    });
});


/* custom alert window */


var ALERT_TITLE = "";
var ALERT_BUTTON_TEXT = "×";

if (document.getElementById) {
    window.alert = function (txt) {
        createCustomAlert(txt);
    }
}

function createCustomAlert(txt) {
    var d = document;

    if (d.getElementById("modalContainer")) return;

    var mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
    mObj.id = "modalContainer";
    //mObj.style.height = d.documentElement.scrollHeight + "px";

    var alertObj = mObj.appendChild(d.createElement("div"));
    alertObj.id = "alertBox";
    if (d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
    alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth) / 2 + "px";
    alertObj.style.visiblity = "visible";

    //h1 = alertObj.appendChild(d.createElement("h1"));
    //h1.appendChild(d.createTextNode(ALERT_TITLE));

    var msg = alertObj.appendChild(d.createElement("p"));
    //msg.appendChild(d.createTextNode(txt));
    msg.innerHTML = txt;

    var btn = alertObj.appendChild(d.createElement("a"));
    btn.id = "closeBtn";
    btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
    btn.href = "#";
    btn.focus();
    btn.onclick = function () {
        removeCustomAlert();
        return false;
    }

    alertObj.style.display = "block";

}

function removeCustomAlert() {
    document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}

$(document).ready(function(){
    $('[name=su_email_reg]').bind('click tap keyup', function(){
        //console.log('press')
        $('[name=su_login_reg]').val($(this).val());
    });
});

$(document).ready(function(){

    // сли пользователь начинает вводить телефон с восьмерки она изменяется

    $('[name=user_f_5]').keyup(function (event) {
        if($('[name=user_f_5]').val().length === 4) {
            //console.log('press')
            newText = event.target.value;
            $('[name=user_f_5]').val(newText.replace("8",""));
        }
    });
});

$(document).ready(function(){
    setTimeout(function(){
    $('.product-card a.details-link').click(function(event){
        event.preventDefault();
        var a = $('#details').position().top;
        $("html, body").animate({scrollTop: a}, 500);
    });
    },300);
});

/*make catalog filter request*/
function catalog_filter_request(){

    var filter_price_min,
        filter_price_max,
        filter_artikul = 0,
        filter_search = 0;


    /*select all category ids*/

    if($('[id^=item]').length) {
        var r = [];
        $.each($('[id^=item]'), function (index, value) {
            r.push($(this).data('cat-id'));
        });
        window.filter_cat = $.unique(r);
    }
    /* bootstrap.slider.min.js/css setup required*/
    if($('.min-slider-handle').length) {
        var filter_price_min = $('.min-slider-handle').attr('aria-valuenow');
        var filter_price_max = $('.max-slider-handle').attr('aria-valuenow');
    }

    if($('#artikul_filter').val().length) {
        var filter_artikul = $('#artikul_filter').val();
    }

    if($('#name_filter').val().length) {
        var filter_search = $('#name_filter').val();
    }

    setTimeout(function(){




    /*make request*/

    if(window.filter_cat) {
        $.ajax({
            url: '/catalog/page_1518517883_14.php',
            type: 'post',
            data: 'filter_cat=' + filter_cat + '&filter_price_min=' + filter_price_min + '&filter_price_max=' + filter_price_max + '&filter_artikul=' + filter_artikul + '&filter_search=' + filter_search,
            dataType: 'html',
            beforeSend: function () { /* cursor change */
                $("body").css({
                    'cursor': 'wait'
                })
            },
            complete: function () { /* cursor back */
                $("body").css({
                    'cursor': 'default'
                })
            },
            success: function (html) {
                $('.items-block').empty();
                if (html) {
                    $('.items-block').html(html);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
    },1000);
}


$(document).ready(function(){
    $('#filter_apply').click(function(){
        catalog_filter_request();
    })
});


function addWithoutReload(a,b)
{
    var key = a;
    var data = b;
    var darr = [];

    /* Set the local storage item */
    if ("localStorage" in window) {
        var old = JSON.parse('[' + localStorage.getItem('view') + ']');
        if(old[0] === null) old = [];
        if(old.length) {
            for (var i = 0; i < localStorage.length; i++) {
                if (key === localStorage.key(i)) {
                    if(old.indexOf(data) < 0) {
                        localStorage.setItem(key, old + ',' + data);
                    }else{
                        //console.log('index of data > -1')
                    }
                    if (old.length > 4) {
                        old[4] = data;
                        darr = old.slice(1);
                        localStorage.setItem(key, darr);
                    }
                }
            }

        }else{
            //console.log('No old length')
            localStorage.setItem(key, data);
        }
    } else {
        console.log("Ваш браузер не поддерживает localStorage, поэтому не покажет, что вы смотрели недавно.");
    }
}
function SstorageClear()
{
    sessionStorage.clear();
}

function LstorageClear()
{
    localStorage.clear();
}

function readStorage(a)
{
    var strin = '';
    if ("localStorage" in window) {

        for (var i = 0; i < localStorage.length; i++) {
            if (localStorage.key(i) == a) {
                strin = localStorage.getItem(localStorage.key(i)).split(',');
            }
        }

        return strin;
    }
}
/*добавит недавно просмотренные товары в карточке товара к рекомендуемым*/
function replaceSimilarItems(){
    var arr = JSON.parse('[' + localStorage.getItem('view') + ']');
    if(arr[0] !== null){
        $.ajax({
            url: '/ajax/recent.php',
            type: 'post',
            data: 'idslist=' + arr,
            dataType: 'html',
            beforeSend: function () { /* cursor change */
                $("body").css({
                    'cursor': 'wait'
                })
            },
            complete: function () { /* cursor back */
                $("body").css({
                    'cursor': 'default'
                })
            },
            success: function (html) {
                $('.looked-items .container').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
}

/*top menu fixed*/
function fixed_header() {
    if ($(window,'body').scrollTop() > 100) {
        $(".top-panel-basket").addClass("fixed");
    } else {
        $(".top-panel-basket").removeClass("fixed");
    }
}
$(window).scroll(function(){
    fixed_header();
});


document.addEventListener("DOMContentLoaded", function(event) {
   /* var invis = '';
    if($('.invisible_tags').length){
        invis = $('.invisible_tags').html();
    }*/
    if($('.under-tags-div').text().length > 0 && $('.over-tags-div').text().length < 1){
        $('.over-tags-div').show();
        $('.over-tags-div').html(/*invis + */$('.under-tags-div').html())
    } //else {
    //$('.over-tags-div').hide();
    //}
});


document.addEventListener("DOMContentLoaded", function(event) {
    setTimeout(function() {
        var reach = "yaCounter17166961.reachGoal('vkontakte'); return true;";
        $('.at-svc-vk').attr('onclick', reach);
        var reacht = "yaCounter17166961.reachGoal('twitter'); return true;";
        $('.at-svc-twitter').attr('onclick', reacht);
        var reachf = "yaCounter17166961.reachGoal('facebook'); return true;";
        $('.at-svc-facebook').attr('onclick', reachf);
    },1000);
});


document.addEventListener("DOMContentLoaded", function(event) {
    var FG = setTimeout(function(){
        if ($('.spec-menu-ul #mCSB_1_container').length) {
            tyurbo();
        }
    },1500);
});


document.addEventListener("DOMContentLoaded", function(event) {
    $( '.tabs-table .tab' ).on( 'click', function(){
        var ind = $( this ).index();
        $( '.tabs-table .tab' ).removeClass( 'active' )
        $( '.win-table .res' ).removeClass( 'active' )
        $( this ).addClass( "active" );
        $( '.win-table .res' ).eq(ind).addClass( 'active' );
    });
});

function tyurbo() {
    if ($('#mCSB_1_container').length) {
        var lastsegment = document.URL.split('/')[document.URL.split('/').length - 2];
        var hei_one = $('a[href*=' + lastsegment + ']').parent('li').outerHeight(true);
        var them_length = $('a[href*=' + lastsegment + ']').parent('li').index();
        var top_pos = hei_one * them_length;
        $('#mCSB_1_container').css({'top': '-' + top_pos + 'px'});
    }
}

// get url params
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}


document.addEventListener("DOMContentLoaded", function(event) {
    $('#sort_select').on('change', function(){
        var sc = $('html, body').scrollTop();
        var adr = $('#sort_select option:selected').val();
        if(document.URL.indexOf('sc') > 0){
            var uri = document.URL.replace(/sc=(\d*)/, 'sc=' + sc);
            document.location.href = uri;
        }
        else {
            document.location.href = adr + '&sc=' + sc;
        }
    })
    if(document.URL.indexOf('s_f_1') > 0) {
        var T = setTimeout(function () {
            var param = getParameterByName('sc');
            $('html, body').scrollTop(param);
            $('.catalog-sort-heading').eq(0).click();
        }, 100);
    }

})
