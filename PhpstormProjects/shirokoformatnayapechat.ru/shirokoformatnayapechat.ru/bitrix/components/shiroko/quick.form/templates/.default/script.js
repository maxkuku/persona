// функция подбор услуги
$(document).ready(function(){
    var active_num = 1;
    $('.sr-only').text('');

    var material = {
        902:{i:0, name:'Баннер Ламинированный <nobr>440 г/м<sup>2</sup></nobr><br>(стандартный)',price_1_100:280, addr: '/images/lam2.jpg', type: 'laminirovanny'},
        903:{i:1, name:'Баннер Литой <nobr>510 г/м<sup>2</sup></nobr><br>(усиленный - прочный)',price_1_100:350, addr: '/images/lit2.jpg', type: 'litoy'},
        904:{i:2, name:'Баннерная сетка <nobr>370 г/м<sup>2</sup></nobr><br>(ячеистая структура)',price_1_100:290, addr: '/images/set2.jpg', type: 'setka'},
        905:{i:3, name:'Баннер блэкаут <nobr>510 г/м<sup>2</sup></nobr><br>(светоблокирующий)',price_1_100:400, addr: '/images/blockout2.jpg', type: 'svetoblock'},
        906:{i:4, name:'Баннер транслюцент <nobr>510 г/м<sup>2</sup></nobr><br>(светорассеивающий)',price_1_100:300, addr: '/images/trans2.jpg', type: 'svetorassey'},
    };

    var quality = {
        902:{i:0, name:'&nbsp;360&nbsp;dpi (нормальное)', value:'360 dpi', image:'/images/3602.jpg', checkboxname:'dpi360'},
        903:{i:1, name:'&nbsp;720&nbsp;dpi (хорошее)', value:'720 dpi', image:'/images/7202.jpg', checkboxname:'dpi720'},
        904:{i:2, name:'&nbsp;1440&nbsp;dpi (отличное)', value:'1440 dpi', image:'/images/14402.jpg', checkboxname:'dpi1440'}
    }

    var post_obrabotka = {
        902:{i:0, name:'Установка люверсов', price_1_100:'10 руб/шт', addr: '/images/liuv2.jpg', type: 'liuvers', value: ''},
        903:{i:1, name:'Проварка краев для прочности', price_1_100:'10 руб/мп', addr: '/images/kraya2.jpg', type: 'kray', value: ''},
        904:{i:2, name:'Усиление шнуром', price_1_100:'30 руб/мп', addr: '/images/shnur2.jpg', type: 'shnur', value: ''},
        905:{i:3, name:'Резка в размер', price_1_100:'20 руб/мп', addr: '/images/razm2.jpg', type: 'v_razmer', value: ''},
        906:{i:4, name:'Проварка кармана', price_1_100:'30 руб/мп', addr: '/images/karman2.jpg', type: 'karman', value: ''},
        907:{i:5, name:'Без постобработки', price_1_100:'', addr: '/images/bez2.jpg', type: 'bez', value: 'bez'},
    };

    var dop_uslugi = {
        902:{i:0, name:'Доставка продукции', price_1_100:500, addr: '/images/delivery-msk2.jpg', type: 'dostavka'},
        903:{i:1, name:'Монтаж рекламы', price_1_100:3000, addr: '/images/montazh2.jpg', type: 'montazh2'},
        904:{i:2, name:'Разработка дизайна', price_1_100:300, addr: '/images/design2.jpg', type: 'design'},
    };

    $.each( material, function( key, value ) {
        var add = '';
        var act = '';
        if(value['i'] === 0){
            add = ' checked ';
            act = ' active ';
        }
        var app = '<figure>' +
            '<input class="material_class no_click ' + act + '" data-price="' + value['price_1_100'] + '" data-type="' + value['type'] + '" type="image" src="' + value['addr'] + '" alt="' + value['name'] + '">' +
            '<figcaption><input type="checkbox" ' + add + ' name="' + value['type'] + '"/><span>' + value['name'] + ', от ' + value['price_1_100'] + ' руб/м<sup>2</sup></span></figcaption>' +
            '</figure>'
        $('.material').append( app );

    });


    $.each( quality, function( key, value ) {
        var add = '';
        var act = '';
        if(value['i'] === 0){
            add = ' checked ';
            act = ' active ';
        }
        $('.quality').append( $('<figure>' +
            '<input class="quality_class no_click ' + act + '" data-type="' + value['value'] + '" type="image" src="' + value['image'] + '" alt="' + value['value'] + '">' +
            '<figcaption><input type="checkbox" ' + add + ' name="' + value['checkboxname'] + '"/><span>' + value['name'] + '</span></figcaption>' +
            '</figure>'));
    });


    $.each( post_obrabotka, function( key, value ) {
        var add = '';
        var act = '';
        if(value['i'] === 5){
            add = ' checked ';
            act = ' active ';
        }
        $('.post_obrabotka').append( $('<input id="' + value['type'] + '" data-val="" name="' + value['type'] + '" type="hidden" value="' + value['value'] + '"/>' +
            '<figure>' +
            '<input class="dop_class no_click ' + act + '" data-price="' + value['price_1_100'] + '" data-type="' + value['name'] + '" data-for="' + value['type'] + '" type="image" src="' + value['addr'] + '" alt="' + value['name'] + '">' +
            '<figcaption><input type="checkbox" ' + add + ' name="' + value['type'] + '"/><span>' + value['name'] + ', от ' + value['price_1_100'] + '</span></figcaption>' +
            '</figure>'));
    });


    $.each( dop_uslugi, function( key, value ) {
        $('.dop_uslugi').append( $('<input id="' + value['type'] + '" data-val="" name="' + value['type'] + '" type="hidden"/>' +
            '<figure>' +
            '<input class="dop_usl no_click" data-price="' + value['price_1_100'] + '" data-type="' + value['name'] + '" data-for="' + value['type'] + '" type="image" src="' + value['addr'] + '" alt="' + value['name'] + '">' +
            '<figcaption><input type="checkbox" name="' + value['type'] + '"/><span>' + value['name'] + ', от ' + value['price_1_100'] + ' руб.</span></figcaption>' +
            '</figure>'));
    });

    window.perimetr = 1;

    function go_down(){
        var E = setTimeout(function() {
            var t = $("#goAhead").position().top;
            $("#podbor").animate({scrollTop: t}, 400 , "swing");
        },300);
    }

    function go_up(){
        $("#podbor").animate({scrollTop: 0}, 0);
    }



    $(".btns-under-size").on('click', '.del', function(){
        var another_len = $('.order_line').length;
        if(another_len >= 2){
            $('.order_line').last().detach();
        }
        if(another_len === 2){
            $(".btns-under-size").children('button').last().detach();
        }
    });

    /*var ev = 0;
    function for_count(ev) {
        console.log(ev);
        var ow = parseInt($('.order_width').eq(ev).val()); // ширина
        var oh = parseInt($('.order_height').eq(ev).val()); //высота
        window.perimetr = ow * 2 + oh * 2;
        var oq = parseInt($('.order_quan').eq(ev).val()); //количество
        var price = parseInt($('input[name=material]').data('price'));
        var m2 = ow * oh * oq / 1000000;
        var whole_price = m2 * price;

        if (isNaN(m2) === false) {
            $('.order_square').eq(ev).val(m2);
        } else {
            console.log('isNaN. ow: ' + ow + ', oh: ' + oh + 'oq: ' + oq);
        }
    }

    $('#order_block').bind("change keyup input click", '.order_width, .order_height, .order_quan', function(event) {
        var y = $(event.target);
        for_count(y.index());
    });*/

    $('#dupl').click(function dupl(){
        var add = $('.order_line').eq(0);
        $('.order_line').eq(0).clone().appendTo($('#order_block'));
        if($(".btns-under-size button").length === 1) {
            $('.btns-under-size').append('<button type="button" class="btn btn-secondary del">Удалить</button>');
        }
    });

    $('input.material_class').click(function(evt){
        evt.preventDefault();
        $('input.material_class').removeClass('active');
        $(this).addClass('active');
        //active_num = parseInt($(this).parents('.modal-body').data('num'));
        $('input[name=material]').val($(this).data('type'));
        $('input[name=material]').attr('data-price', $(this).data('price'));
        $(this).parents('.modal-body').find('input[type=checkbox]:checked').click();
        $(this).next('figcaption').children('input[type=checkbox]').click();
        go_down();
    });
    $('.material input[type=checkbox]').click(function(){
        if($(this).prop('checked') === true){
            $(this).parents('.modal-body').find('input[type=checkbox]:checked').click();
            $(this).click();
            $('input[name=material]').val($(this).parents('figure').find('input[type=image]').data('type'));
            $('input[name=material]').attr('data-price', $(this).parents('figure').find('input[type=image]').data('price'));
            //active_num = parseInt($(this).parents('.modal-body').data('num'));
            $('input.material_class').removeClass('active');
            $(this).parents('figure').find('input[type=image]').addClass('active');
            go_down()
        }
    });
    $('input.quality_class').click(function(evt){
        evt.preventDefault();
        $('input.quality_class').removeClass('active');
        $(this).addClass('active');
        //active_num = parseInt($(this).parents('.modal-body').data('num'));
        $('input[name=quality]').val($(this).data('type'));
        $(this).parents('.modal-body').find('input[type=checkbox]:checked').click();
        $(this).next('figcaption').children('input[type=checkbox]').click();
        go_down()
    });
    $('.quality input[type=checkbox]').click(function(){
        if($(this).prop('checked') === true){
            $(this).parents('.modal-body').find('input[type=checkbox]:checked').click();
            $(this).click();
            $('input[name=quality]').val($(this).parents('figure').find('input[type=image]').data('type'));
            //active_num = parseInt($(this).parents('.modal-body').data('num'));
            $('input.quality_class').removeClass('active');
            $(this).parents('figure').find('input[type=image]').addClass('active');
            go_down()
        }
    });
    $('.post_obrabotka input[type=image]').click(function(evt){
        //active_num = parseInt($(this).parents('.modal-body').data('num'));
        $(this).next('figcaption').children('input[type=checkbox]').click();
        go_down()
    });
    $('.post_obrabotka input[type=checkbox]').click(function(evt){
        var price_before, dopPrice, forWhich, new_val, inp;
        //price_before = parseInt($('#whole_price').val());
        forWhich = $(this).parents('figure').find('input[type=image]').data('for');
        dopPrice = parseInt($(this).parents('figure').find('input[type=image]').data('price') * window.perimetr / 100);
        $(this).parents('figcaption').prev('input').toggleClass('active');
        inp = $('#' + forWhich);
        (inp.val().length > 0) ? inp.val("") : inp.val(forWhich);
        if(inp.val().length > 0){
            new_val = price_before + dopPrice;
            //$('#whole_price').val(new_val);
        }
        else
        {
            new_val = price_before - dopPrice;
            //$('#whole_price').val(new_val);
        }
        go_down()
    });
    $('.dop_uslugi input[type=image]').click(function(evt){
        $(this).next('figcaption').children('input[type=checkbox]').click();
        go_down()
    });
    $('.dop_uslugi input[type=checkbox]').click(function(evt){
        var price_before, dopPrice, forWhich, new_val, inp;
        //price_before = parseInt($('#whole_price').val());
        forWhich = $(this).parents('figure').find('input[type=image]').data('for');
        dopPrice = parseInt($(this).parents('figure').find('input[type=image]').data('price') * window.perimetr / 100);
        $(this).parents('figcaption').prev('input').toggleClass('active');
        inp = $('#' + forWhich);
        (inp.val().length > 0) ? inp.val("") : inp.val(forWhich);
        if(inp.val().length > 0){
            new_val = price_before + dopPrice;
            //$('#whole_price').val(new_val);
        }
        else
        {
            new_val = price_before - dopPrice;
            //$('#whole_price').val(new_val);
        }
        go_down()
    });

    function setRate(){
        var last_modal = $('#podbor .modal-body').length;
        var percent_value = 100 / parseInt(last_modal);
        var progress_percent = (parseInt(active_num) * percent_value) + '%';
        $('#progress').attr('aria-valuenow', progress_percent).css({'width': progress_percent});
        $('.sr-only').text('Шаг ' + active_num);
    }

    /*на 3 этапе заполняются ширина высота баннера.
    * если заполнены поля - идем дальше */
    function is_dimentions_filled(){
        var inp = $('.for_count');
        var i,sum = 0;
        console.log('is_dimentions_filled fired');
        for(i=0; i<inp.length; i++){
            if(inp.eq(i).val().length > 0){
                sum = sum + 1;
            }
            //console.log('field ' + i + ' length = ' + inp.eq(i).val().length);
        }
        console.log(sum + ' sum -> inp.length ' + inp.length)
        if(sum === inp.length){
            $('#goAhead').removeAttr('disabled');
        }
    }

    console.log('active_num = ' + active_num);



    // кнопка Продолжить
    $('#goAhead').click(function(){

        if(active_num === 2){
            $('#goAhead').attr('disabled',true);
            $('.for_count').change(function(){
                is_dimentions_filled();
            });
        }



        var next_modal = active_num + 1;
        var last_modal = $('#podbor .modal-body').length;
        var sale = parseInt($('.sale').text());
        $('.sr-only').show();
        $('.p_sale').show();

        $('.sale_ready').text(sale * active_num);
        $('input[name=sale]').val(sale * active_num);


        go_up();
        setRate();


        if (next_modal < last_modal) {

            $('.modal-body').hide();
            $('#modal_' + next_modal).show();

            active_num = next_modal;
            //console.log('active num: ' + active_num);

            if ($('#click_back').length < 1) {
                $('.modal-footer').prepend('<button type="button" class="btn btn-secondary" id="click_back" onclick="">Назад</button>');

                $('#click_back').click(function () {

                    if($("#goAhead").length === 0 && window.goAhead){
                        $('.modal-footer').append(window.goAhead);
                    }

                    if (active_num > 1) {
                        need_window_num = active_num - 1;
                        console.log('need_window_num: ' + need_window_num);
                    }
                    if ($('#modal_' + need_window_num).length > 0) {
                        $('.modal-body').hide();
                        $('#modal_' + need_window_num).show();
                        active_num = need_window_num;
                        console.log('active num: ' + active_num);
                    }

                    setRate();

                });

            }

        }
        else {

            console.log('Finish chooze');
            active_num = active_num + 1;
            //console.log(active_num);

            $('.modal-body').hide();
            $('#modal_' + (active_num)).show();
            window.goAhead = $('#goAhead');

            $('#goAhead').detach();

            //$('#prev_price').text(parseFloat($('#whole_price').val()).toFixed(2) + ' руб.');
            $("label[for=licenses_popup2]").on("click", function(e){
                var checkbox = $('#licenses_popup2');
                if ($(this).is(e.target))
                //checkbox.prop('checked', !checkbox.is(':checked'));
                    checkbox.val("Y");
            });
            $('#quick_submit').click(function (e) {
                e.preventDefault();
                if($('input[name=material]').val().length > 0 && $('input[name=quality]').val().length > 0) {
                    if ($('.order_width').eq(0).val().length > 0 && $('.order_height').eq(0).val().length > 0) {
                        if ($('#licenses_popup2').val() === "Y" && $('#order_conts').val().length > 0) {

                            //$('#quick_submit').removeAttr('disabled');
                            $('#form_quick_chooze').submit();

                        } else {
                            alert('Вы должны согласиться на обработку персональных данных и заполнить контакт');
                        }
                    } else {
                        alert("Нужно заполнить ширину и высоту");
                    }
                }else{
                    alert("Нужно заполнить материал и качество печати");
                }
            });
        }
    });
});