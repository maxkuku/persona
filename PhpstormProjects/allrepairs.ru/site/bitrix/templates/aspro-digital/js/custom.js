/* Add here all your JS customizations */
jQuery(document).ready(function ($) {

    $("body").on("click", ".menu_cattt", function () {

        $('.js_blockk .child').removeClass('active');
        $(this).parent().addClass('active');

        $('.js_blockk .submenu-wrapper').removeClass('active');
        $(this).next().addClass('active');


        return false;
    });


    $("body").on("click", ".menu_cattt_li", function () {
        var idd = $(this).attr('attr_id');

        $('.menu_cattt_li').removeClass('active');
        $(this).addClass('active');

        $('.js_blockk .services').removeClass('active');
        $('.d_s_' + idd).addClass('active');

        return false;
    });

    $("body").on("click", ".read_next2", function () {
        var idd = $(this).attr('title');

        $(idd).toggle();
        $(this).children('.span1').toggle();
        $(this).children('.span2').toggle();

        return false;
    });





    $("body").on("click", ".panel_switch", function () {
        var idd = $(this).attr('attr_id');

        $('.vc_tta-panel').removeClass('active');
        $('#panel_' + idd).addClass('active');

        $('.vc_tta-panel-heading i.vc_tta-controls-icon').html('+');
        $(this).children('i.vc_tta-controls-icon').html('-');

        $('.vc_tta-panel-heading i.fa').removeClass('');
        $('.vc_tta-panel-heading i.fa').addClass('fa fa-angle-up');
        $(this).children('i.fa').addClass('fa fa-angle-down');

        return false;
    });

    $("body").on("click", ".read_next", function () {
        $(this).prev().removeClass('hidden_text_big');
        $(this).hide();
        return false;
    });

    $("body").on("click", ".show_all_uslugi", function () {
        var id = $(this).attr('title');
        $(".childs_iteam" + id).toggle();
        $(".slice-item_uslugi").css('height', 'auto');

        $(this).children('.span1').toggle();
        $(this).children('.span2').toggle();

        return false;
    });


    $("body").on("click", ".ajax_load_btn1", function () {
        $(".ptrem_hidden_block").show();
        $(this).hide();
        return false;
    });



    setTimeout(function () {

        $.each($('.gallerys'), function (i, gal_block) {

            $.each($('.video_all', $(gal_block)), function (i, item) {
                if (i != 0) {
                    $(item).hide();
                }
            });
        });

    }, 1000);


    $("body").on("click", "#video_link_top .item-link", function () {

        var parent = $(this).closest(".gallerys");

        var idd = $(this).attr('data-filter');
        if (idd == 'all') {
            $('.video_all', parent).show();
        } else {
            $('.video_all', parent).hide(1, function () {
                $('.video_' + idd, parent).show(1);
            });

        }
        //render menu
        $('#video_link_top .item-link', parent).removeClass('active');
        $(this).addClass('active');

        return false;
    });



});