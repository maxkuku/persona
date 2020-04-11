function isMobile() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        return true;
    }
    return false;
}
function ClearForm() {
    document.getElementById('webform-client-form-5020').reset();
    $('#edit-submitted-napravlenie option:selected').each(function () {
        $(this).removeAttr('selected');
    });
}

/*$(function() {
 if($('.banner').length){
 $('.banner').hide();
 }
 });*/


$(document).ready(function () {
    /*setTimeout(function(){
     if($('h1 + .banner').length < 1){
     if(document.URL.indexOf('161')>-1){
     var a = '<div class="banner" style="display:block; flex: none; background-color: #FF4160; margin: 2em 0; padding: 1.2em 1em 8px; width: 100%;">\n' +
     '<p style="color: white; font-size: 26px; text-align: center; line-height: 40px;">\n' +
     'Акция! Первичная консультация врача-иммунолога 1000 руб.\n' +
     '</p>\n' +
     '</div>';
     $('h1').after(a);
     }
     else {
     var a = '<div class="banner" style="display:block; flex: none; background-color: #FF4160; margin: 2em 0; padding: 1.2em 1em 8px; width: 100%;">\n' +
     '<p style="color: white; font-size: 26px; text-align: center; line-height: 40px;">\n' +
     'Акция! <a href="/pulmonology" style="color: white;">Первичная консультация врача-пульмонолога 1500 руб.</a>\n' +
     '</p>\n' +
     '</div>';
     $('h1').after(a);
     }
     }
     },500);*/
});


$(function () {

    if (isMobile()) {
        /*$("#carousel-main").swipe( {
         swipeLeft: function() {
         $(this).carousel("next");
         },
         swipeRight: function() {
         $(this).carousel("prev");
         },
         allowPageScroll: "vertical"
         });*/


    }

    $('.fancybox-button').fancybox({'showCloseButton': true});
    $('.lightbox-enabled').fancybox({'showCloseButton': true});

    $('.navbar a[aria-haspopup="true"]').on('click', function (e) {
    //$('.navbar .menu-item-has-children').on('click', function (e) {
        if ($(this).parents('li').hasClass('dropdown-item')) {
            e.preventDefault();
            $(this).parent('li').toggleClass('show');
            $(this).parent('li').find('ul.sub-menu').toggleClass('dropdown-menu show');


            if (isMobile()) {
                var $el = $(this);                 /// a
                var $parent = $el.offsetParent("ul");               /// ul
                if (!$parent.parent().hasClass('navbar-nav')) {
                    if ($parent.hasClass('show')) {
                        $parent.removeClass('show');
                        $el.next().removeClass('show');
                        $el.next().css({"top": -999, "left": -999});
                    }
                    else {
                        $parent.parent().find('.show').removeClass('show');
                        $parent.addClass('show');
                        $el.next().addClass('show');
                        // console.log($el[0]);
                        $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
                    }


                    e.preventDefault();
                    e.stopPropagation();


                }
            }
            else {
                $(this).siblings().find('.dropdown-item').removeClass('dropdown-item').addClass('nav-link');
            }
        }
        else {
            window.location = $(this).attr('href');
        }
    });


    var $menuItem = $('.menu_p-item');
    $(document).on('click touch tap', '.menu_p-item', function () {
        $(this).children('.nose_slide').toggle(300);
        $(this).find('.arrow_p').toggleClass('reversed_p');
    })


    /*$(".menu_p-item").swipe( {
     tap:function(event, target) {
     $(this).children('.nose_slide').toggle(300);
     $(this).find('.arrow_p').toggleClass('reversed_p');
     }
     });*/

    //
    // var $menuItem = $('.menu_p-item');
    // $menuItem.on('click', function() {
    //   $(this).children().not('h2').not('.arrow_p').slideToggle(300);
    //   $(this).children('.arrow_p').toggleClass('reversed_p');
    // })


    $("#myTab a").click(function () {
        var page_w = $("html").width();
        if (page_w <= 1000) {
            $('html, body').animate({
                scrollTop: ($('.tab-content').offset().top)
            }, 500);
        }
    });


    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });
    $('.slide-lnk').on('click', function (e) {
        ClearForm();
        e.preventDefault();
    });
    $("#vrachi-carusel").owlCarousel({
        items: 5,
        nav: true,
        navText: ['<i class="fas fa-arrow-circle-left"></i>', '<i class="fas fa-arrow-circle-right"></i>'],
        margin: 10,
        loop: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 2,
                nav: false
            },
            540: {
                items: 3,
                nav: false
            },
            740: {
                items: 3,
                nav: false
            },
            940: {
                items: 5,
            },

        },
    });
    $("#otzivi-slide").owlCarousel({
        items: 3,
        nav: true,
        dots: false,
        navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
        margin: 30,
        loop: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
                nav: false,
                margin: 0,

            },
            940: {
                items: 3,
            },

        },
    });
    $('#vrachi-carusel .card').on('click', function () {
        ClearForm();
        var name = $(this).find('h5').html();
        $('#edit-submitted-vrach').val(name);
    });
    $('.otdels .tab-content .tab-pane .btn-primary').on('click', function () {
        ClearForm();
        var dir = $(this).data("dir");
        // console.log(dir);
        $("#edit-submitted-napravlenie").find('option[value="' + dir + '"]').attr("selected", "selected");
    });
    $('.make_appoinment_button').on('click', function (e) {
        ClearForm();
        e.preventDefault();
        var url = window.location.pathname;

        if (url === '/team') {
            var parent = $(this).parents('.card');
            var fio = $(parent).find('.personNewName ').text();
        }
        else {
            var parent = $(this).parents('.content');
            var fio = $(parent).find('h1').text();
        }
        var dir = $(parent).find('.direction a').first().text();
// var s = $("#edit-submitted-napravlenie").find('option:contains("'+ dir +'")').text();


        $("#edit-submitted-napravlenie").find('option:contains("' + dir + '")').attr("selected", "selected");
        $('#edit-submitted-vrach').val(fio);
        $('#forma-zapisi').modal('toggle');
    });


    $('#st_form_btn').on('click', function (e) {
        ClearForm();
        e.preventDefault();
        var form = $('#forma-zapisi');
        var url = window.location.pathname.split('\/');
        var dir;
        url = url[1];
        switch (url) {
            case "pulmonology":
                dir = 'pulmonologia';
                break;
            case "allergology":
                dir = 'allergologia';
                break;
            case "lor":
                dir = 'lor';
                break;
            case "somnology":
                dir = 'somnologia';
                break;
            case "endocrinology":
                dir = 'endokrinologia';
                break;
            case "therapy":
                dir = 'terapia';
                break;
            case "neurology":
                dir = 'nevrologia';
                break;
            case "cardiology":
                dir = 'kardiology';
                break;
            case "thoracic_surgery":
                dir = 'hirurgia';
                break;
            default:
                dir = 0;
        }

        $("#edit-submitted-napravlenie").find('option[value="' + dir + '"]').attr("selected", "selected");
        $(form).find('#edit-submitted-name').val($(this).siblings('.f_name').val());
        $(form).find('#edit-submitted-phone').val($(this).siblings('.f_phone').val());
        $(form).find('#edit-submitted-e-mail').val('user@integeramed.info');
        $(form).find('.webform-submit').click();

        alert("Данные успешно отправлены");

    });
});

function empty(mixed_var) {   // Determine whether a variable is empty
    return ( mixed_var === "" || mixed_var === 0 || mixed_var === "0" || mixed_var === null || mixed_var === false || ( is_array(mixed_var) && mixed_var.length === 0 ) );
}

$(document).ready(function(){
    if($('.region-left').text().trim() === "") {
        $('#sidebar-first').hide();
        $('#content').toggleClass('col-md-9', 'col-12');
    }
})