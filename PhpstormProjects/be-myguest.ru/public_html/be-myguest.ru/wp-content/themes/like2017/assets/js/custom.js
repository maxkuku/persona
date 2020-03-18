$(document).ready(function(){
    $('button[name="get-it"]').click(function(){
        var s = [];
        s = '?cat=' + $('#chooze_city').find('option:selected').val().trim();
        if($('input#date').val().length) {
            s = s + '&d=' + $('input#date').val().trim();
        }
        if($('input#days').val() > 0) {
            s = s + '&q=' + $('input#days').val().trim();
        }
        if($('input#guests').val() > 0) {
            s = s + '&g=' + $('input#guests').val().trim();
        }
        document.location.href = '/' + s;
    });
});
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        items: 3,
        loop: 1,
        nav: false,
        dots: true,
        autoplay: 1,
        autoplayHoverPause: 1,
        autoplayTimeout: 2000,
        autoHeight:true,
        responsive: {
            0: {
                items: 0,
                mouseDrag: false,
                touchDrag: false,
                pullDrag: false,
                freeDrag: false,
            },
            320: {
                items: 1,
                margin: 10,
            },
            1000: {
                items: 3,
                margin: 0,
            }
        }
    });
});
$(document).ready(function() {
    var selector = $("input[type='tel']");
    var sel2 = $('#cf20_field_6');
    var im = new Inputmask("+7 (999) 999-99-99");
    selector.attr('placeholder', '+7 (999) 999-99-99')
    im.mask(selector);
    im.mask(sel2);
});
$(document).ready(function() {
    $('.service-slider').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Загрузка #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">Ошибка загрузки #%curr%</a>',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>be-myguest.ru</small>';
            }
        }
    });
});

$(document).ready(function() {
    $('.gallery-icon a').magnificPopup({type:'image'});
});

/*$(document).ready(function(){
    $('#chooze_city').change(function(){
        var addr = $(this).find('option:selected').val();
        document.location = addr;
    })
});*/
$(document).ready(function(){
    $('.tour_details .selector span').click(function(){
        var ind = $(this).index();
        var par = $(this).parents('.tour_details');
        par.find('.selector span').removeClass('active');
        $(this).addClass('active');
        par.find('.switching').removeClass('open');
        par.find('.switching').eq(ind).addClass('open');
    });
});

$(document).ready(function(){
    $('.guid_details .selector span').click(function(){
        var ind = $(this).index();
        var par = $(this).parents('.guid_details');
        par.find('.selector span').removeClass('active');
        $(this).addClass('active');
        par.find('.switching').removeClass('open');
        par.find('.switching').eq(ind).addClass('open');
    });
});

$(document).ready(function(){
    $('#send_fio').click(function(){
        if($('#send_fio').length && $('#agree').is(':checked')) {
            var f = $('form').submit();
            console.log($('form').attr('id') + ' ' + f);
        }
    });
});

$(document).ready(function() {
    var res;
    var price = $('span#price').text();
    $('input[name="guests"]').change(function () {
        res = $(this).val() * $('span#price').attr('data-price');
        $('span#price').text(res);
    });
});
/*по щелчку на расписании заполнить дату и время товара*/
function stayDateTime() {
    $('.fc-event').click(function () {
        var timeU = $(this).data('event-start').substr(11,5).replace(':','-');
        var dateU = $(this).data('event-start');
        var D = new Date(dateU);
        var dNeed = D.getDate(dateU);
        var mNeed = D.getMonth(dateU) + 1;
        var fullDneed = ('0' + dNeed).slice(-2) + '.'
            + ('0' + mNeed).slice(-2);

        window.__cart.a_booking_id = $(this).attr('data-event-id');


        window.__cart.a_booking_date = $(this).attr('data-event-start');


        $('select')[1].selectedIndex = -1;
        $('select[name="время"]').val(timeU);
        if($('option[value="' + timeU + '"]').length < 1){
            $('select[name="время"] option').remove();
            $('select[name="время"]').append('<option value="' + timeU + '" selected>' + timeU + '</option>');
        }


        $('select')[2].selectedIndex = -1;
        $('select[name="дата"] option').remove();
        $('select[name="дата"]').val(fullDneed);
        if($('option[value="' + fullDneed + '"]').length < 1){
            $('select[name="дата"]').append('<option value="' + fullDneed + '" selected>' + fullDneed + '</option>')
        }


        return true;
    });
}

setTimeout(function(){
    $(".wpshop_properties option").each(function () {
        this.innerHTML = this.innerHTML.replace(/ /g, '');
        this.value = this.innerHTML.replace(/ /g, '');
    });
},500);

setInterval(function(){
    stayDateTime();
},1000);

$(document).ready(function() {
    if ($('#cf20_field_2').length) {
        setTimeout(function addemail() {
            var id, i, j;
            var emails;
            for (i = 0; i < window.__cart.a_item_id.length; i++) {
                id = window.__cart.a_item_id[i];
                $.ajax({
                    type: "GET",
                    url: "",
                    data: "ajaxPost=" + id,
                    success: function (msg) {
                        if ($('#cf20_field_2').val().length > 0) {
                            $('#cf20_field_2').val("," + msg);
                        }
                        else {
                            $('#cf20_field_2').val(msg);
                        }
                        if ($('#cf20_field_3').length && window.__cart) {
                            $('#cf20_field_3').val(window.__cart.a_name[0].replace('<br/>', ' '));
                        }
                        if ($('#cf20_field_9').length && window.__cart) {
                            $('#cf20_field_9').val(window.__cart.a_bid);
                        }
                        if ($('#cf20_field_10').length && window.__cart) {
                            $('#cf20_field_10').val(window.__cart.a_start);
                        }
                    }
                });
            }
        }, 1100)
    }
});
