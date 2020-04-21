domReady(function(){
    var cid = 3159;
    jQuery('.countries').change(function(){
        cid = jQuery('.countries option:selected').data('country-id');
        console.log(cid);
        for(i in jQuery('.regions option')){
            if(cid && jQuery('.regions option').data('country-id') !== cid){
                jQuery('.regions option').remove();
            }
            else{
                console.log(jQuery('.regions option').data('country-id'))
            }
        }
    });
});

domReady(function(){
    var a = parseInt(jQuery('#sale-sum').text());
    var b = parseInt(jQuery('#itogo-sum').text());
    var c = jQuery('[name=form_textarea_18]').text();
    window.d = new Array();
    window.e = new Array();
    window.sale = 0;
    var g = jQuery('[name=form_textarea_18]');
    jQuery.each(jQuery('td[data-sale]'), function( index, value ) {
        window.d[index] = parseInt(jQuery(value).attr('data-sale'));
    });
    jQuery.each(jQuery('.price-val'), function( index, value ) {
        window.e[index] = jQuery(value).text();
        window.sale = window.sale + parseInt(jQuery(value).text());
    });

    jQuery('body').on('change', '#samo_address_country_id', function(){
        var samo = jQuery('#samo_address_country_id');
        if(jQuery('#samo_address_country_id').children('option:selected').data('select') === 'delivery'){
            if(parseInt(jQuery('#sale-sum').text()) >= 0){
                /**
                 * window.delivery_sale определяется в /bitrix/components/persona/form.result.new/templates/sendorder/template.php
                 * */

                var total = 0;

                jQuery('#itogo-sum').text((a + b) * (100 - window.delivery_sale) / 100);
                jQuery('#sale-sum').text(window.delivery_sale);
                jQuery('span.sale').attr('class', 'roboto-forced perc ruble');

                jQuery('td[data-sale]').attr('data-sale', 0); // всем товарам скидку аннулировать

                jQuery.each(jQuery('.price-val'), function( index, value ) {
                    jQuery(value).text( parseInt(window.e[index]) + parseInt(window.d[index]) ); // цена без скидки
                });

                jQuery.each(jQuery('.total-val'), function( index, value ) {
                    var f = ( parseInt(window.e[index]) + parseInt(window.d[index]) ) * parseInt( jQuery('.item-quan').eq(index).text() );
                    // total = total + f;
                    jQuery(value).text( f ); // общая цена за товар без скидки
                });

                // убрать от цены 20% за доставку
                //var total1 = total * (100 - window.delivery_sale) / 100;
                total = (a + b) * (100 - window.delivery_sale) / 100;
                console.log(total)

                g.text(c.replace( /ИТОГО(.*)/g, 'ИТОГО:\t\t\t\t\t\t' + total + ' руб.' ));

                var h = jQuery('[name=form_textarea_18]').text();

                g.text(h.replace( /Скидка:\t(.*)/g, 'Скидка:\t\t\t\t\t\t' + window.delivery_sale + '%' ));

            }
        }
        else{
            jQuery('#sale-sum').text(a)
            jQuery('#itogo-sum').text(b)
            jQuery('span.perc').attr('class', 'roboto-forced sale ruble');
            jQuery.each(jQuery('td[data-sale]'), function( index, value ) {
                jQuery(value).attr('data-sale', window.d[index]);
            });

            jQuery.each(jQuery('.price-val'), function( index, value ) {
                jQuery(value).text( parseInt(window.e[index]) - parseInt(window.d[index]) ); // цена со скидкой
            });

            jQuery.each(jQuery('.total-val'), function( index, value ) {
                jQuery(value).text( ( parseInt(window.e[index]) - parseInt(window.d[index]) ) * parseInt( jQuery('.item-quan').eq(index).text() ) ); // общая цена за товар со скидкой
            });


            //jQuery('[name=form_textarea_18]').text(c.replace( /ИТОГО:\t(.*)\t(.*)/g, 'ИТОГО:\t\t\t' + jQuery1 + '\t\t' + total + 'руб.' ));
            //jQuery('[name=form_textarea_18]').text(c.replace( /Скидка:\t(.*)/g, 'Скидка:\t\t\t\t\t\t' + window.sale + 'руб.(%)' ));
            g.text(c)

        }
    });
});