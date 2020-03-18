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
        url: '/ajax/favorite_items.php',
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


document.addEventListener("DOMContentLoaded", function(event) {
    function check() {
        var check = false;
        (function (a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
        })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    };
    if (check() === false) {
        var mainCatTimeout;
        $('body').on('mouseenter', '#catalog-menu>ul>li', function (e) {
            var th = $(this);
            $.each($('#catalog-menu .sub-cats'), function () {
                $(this).css('display', 'none');
            });

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


});


/*top menu fixed*/
function fixed_header() {
    if ($(window,'body').scrollTop() > 200) {
        $(".top-panel").addClass("fixed");
    } else {
        $(".top-panel").removeClass("fixed");
    }
}
$(window).scroll(function(){
    fixed_header();
});




function Buy(id) {

    var formData = new FormData();//Создадим объект для передачи данных
    formData.append('ajax_basket', "Y");
    formData.append('ID', id);
    formData.append('action', 'ADD2BASKET');


    var HttpRequest = new XMLHttpRequest(); //Создадим объект для отправки AJAX запроса
    HttpRequest.onload = function(e) {
        if (this.status == 200) { //Проверка что результат отчета успешный (может быть 404 или другие)


            var j = JSON.parse(this.response);

            if(document.getElementById('chart-value')) {
                document.getElementById('chart-value').innerText = j['num'];
                document.getElementById('pr-value').innerText = j['sum'];
                //Записываем цифру в элемент корзины в верстке
            }
            else{
                document.getElementsByClassName('bx-basket-block')[0].innerHTML = '<svg class="icon-basket">' +
                    '<use xlink:href="#icon-basket"></use>' +
                    '</svg><div id="chart-value" class="numberCircle">' + j['num'] + '</div>' +
                    '<a href="/personal/cart/" data-total="" class="golden"><span id="pr-value">' + j['sum'] +
                    '</span><i class="fa fa-rub"></i></a>';
                document.getElementsByClassName('bx-basket-block')[1].innerHTML = '<svg class="icon-basket">' +
                    '<use xlink:href="#icon-basket"></use>' +
                    '</svg><div id="chart-value" class="numberCircle">' + j['num'] + '</div>' +
                    '<a href="/personal/cart/" data-total="" class="golden"><span id="pr-value">' + j['sum'] +
                    '</span><i class="fa fa-rub"></i></a>';
            }
        }
    }; //Функция в которую возвращается ответ от сеовера
    HttpRequest.open("POST", '/ajax/add_to_basket.php', true); //Настройка запроса для отправки (второй параметр путь к PHP скрипту)
    HttpRequest.send(formData); //Отправка запроса на сервер
}



function update_basket(){
    var formData = new FormData();
    formData.append('get_basket', "Y");
    var HttpRequest = new XMLHttpRequest();
    HttpRequest.onload = function(e) {
        if (this.status == 200) {
            if (document.getElementById('moving-basket')) {
                document.getElementById('moving-basket').innerHTML = this.response;
                document.getElementById('static-basket').innerHTML = this.response;
            }
        }
    }
    HttpRequest.open("POST", '/ajax/get_basket_list.php', true); //Настройка запроса для отправки (второй параметр путь к PHP скрипту)
    HttpRequest.send(formData);
}
window.onload = update_basket;


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

/**
 * переключение табов в товаре детально
 */
document.addEventListener("DOMContentLoaded", function(event) {
    $( '.tabs-table .tab' ).on( 'click', function(){
        var ind = $( this ).index();
        $( '.tabs-table .tab' ).removeClass( 'active' )
        $( '.win-table .res' ).removeClass( 'active' )
        $( this ).addClass( "active" );
        $( '.win-table .res' ).eq(ind).addClass( 'active' );
    });
});

$('body').on('click tap', '.header-search-btn, .search-button, .icon-magnifier', function (e) {
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

var headerSearchTimeout;
$('.popup-search input').on('keyup', function () {
    clearTimeout(headerSearchTimeout);
    headerSearchTimeout = setTimeout(function () {
        headerSearch();
    }, 500);
});

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


function delfrombasket(id) {
    // var deletebasketid = ID;
    $.ajax({
        type: 'POST',
        url: '/ajax/basket_del.php',
        data: 'deletebasketid=' + id,
        dataType: "json",
        success:function(result){
            // window.location.reload();
            console.log(result);
            update_basket();
        }
    });
}

function add_rating(item_id) {
    $.ajax({
        type: 'get',
        url: '/ajax/add_rating.php',
        data: 'id=' + item_id + '&count=' + Math.random(),
        dataType: "json",
        success: function (data) {
            console.log('rating return: ' + data);
        }
    });
}

function rem_rating(item_id) {
    $.ajax({
        type: 'get',
        url: '/ajax/rem_rating.php',
        data: 'id=' + item_id + '&count=' + Math.random(),
        dataType: "json",
        success: function (data) {
            console.log('rating return: ' + data);
        }
    });
}

function delete_item(artikul, name, list_name, category, list_position, quan, price){
    gtag("event", "remove_from_cart", {
        "items": [
            {
                "id": artikul,
                "name": name,
                "list_name": list_name,
                "brand": "La Maree",
                "category": category,
                "list_position": list_position,
                "quantity": quan,
                "price": price                                    }
        ]
    });
    window.dataLayerYandex.push({
        "ecommerce": {
            "remove": {
                "products": [
                    {
                        "id": artikul,
                        "name": name,
                        "category": category,
                        "quantity": quan
                    }
                ]
            }
        }
    });
}

/*вставка для корзины*/
/* Function for ours ajax inquiry  */
function ajaxpostshow(urlres, datares, wherecontent, wherecontent2 ){
    $.ajax({
        type: "POST",
        url: urlres,
        data: datares,
        dataType: "html",
        success: function(fillter){
            $(wherecontent).html(fillter);
            $(wherecontent2).html(fillter);
        }
    });
}


$('.input-basket-submit').on("click",function(){
    var addbasketid = $(this).attr('id');
    ajaxpostshow("/ajax/basket.php", addbasketid, ".mini-basket-top-panel", "#mini-basket" );
    return false;
});
/* Inquiry ajax at removal of the goods from a basket  */
$('.basket-list-delete').on("click",function(){
    var deletebasketid = $(this).attr('id');
    ajaxpostshow("/ajax/basket.php", deletebasketid, ".mini-basket-top-panel", "#mini-basket" );
    return false;
});
/* Inquiry ajax at change of quantity of the goods */
$(".basket  .basket-count-update").on("change", function(){
    var countbasketid = $(this).attr('id');
    var countbasketcount = $(this).val();
    var ajaxcount = countbasketid + '&ajaxbasketcount=' + countbasketcount;
    ajaxpostshow("/ajax/basket.php", ajaxcount, ".mini-basket-top-panel", "#mini-basket" );
    return false;
});
