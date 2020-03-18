$(document).ready(function() {
	
	$('.thumbnail img').on('mouseover', function(){
		$(this).parent().parent().parent().parent().animate({
			'margin-top': '50px'
		}, 100);
		$(this).parent().parent().parent().find('.imgholder').animate({
		    'width': '233px',
		    'height': "233px"
		  }, 100, function() {
		    // Animation complete.
		});
		$(this).parent().parent().parent().find('.imgholder img').animate({
		    'margin': '0 0 0 -39px'
		  }, 100, function() {
		    // Animation complete.
		});
		
	});
	$('.thumbnail img').on('mouseout', function(){
		$(this).parent().parent().parent().parent().animate({
			'margin-top': '75px'
		}, 100);
		$(this).parent().parent().parent().find('.imgholder').animate({
		    'width': '190px',
		    'height': "190px"
		  }, 100, function() {
		    // Animation complete.
		});
		$(this).parent().parent().parent().find('.imgholder img').animate({
		    'margin': '-17px 0 0 -61px'
		  }, 100, function() {
		    // Animation complete.
		});
		
		$(this).css('margin-top', '100px');
		$(this).find('.imgholder').css('width', '200px').css('height', '200px').css('border-radius', '100px');
		$(this).find('.imgholder img').css('margin', '-20px 0 0 -60px'); 
	}); 
	
	
	 $(document).on('mouseenter', '#basket', function(){
		$('#basket').addClass('hovered');
		$('#basket').stop().animate({'right': '-80px'}, 200);
		$('.basket_number').stop().animate({'opacity': '0'}, 200);
	});
	$(document).on('mouseleave', '#basket', function(){
		$('#basket').removeClass('hovered');
		setTimeout(function() {
			if(!$('#basket').hasClass('hovered')){
				$('#basket').stop().animate({'right': '-260px'}, 200);
				$('.basket_number').stop().animate({'opacity': '1'}, 200);
			}
		}, 1000);
	});	
	
	
/* firstPosition = $('.attributes').offset().top;
function scrolls(){
	wPosition = $(window).scrollTop();
	lPosition = $('.attributes').offset().top;
	if(wPosition - firstPosition - 40 <= 0){
		$('.attributes').css('position', 'absolute').css('top', '0');
	}
	else {
		$('.attributes').css('position', 'fixed').css('top', '-28px');
	}
}
$(window).scroll(function(){
	scrolls();
});
scrolls();
*/

function basket(href, e){
	e.preventDefault();
	e.stopPropagation();
	$('a[href="' + href + '"]').html('<img class="loading_dots" src="/images/loading.gif" />');
	window.setTimeout(function (){
		$.ajax({
			url: href,
			method: 'get',
			success: function(data){
				$('.position-properties').replaceWith($(data).find('.position-properties'));
				if($('#basket').length == 0){
					$('.catalog').prepend($(data).find('#basket'));
				}
				else {
					$('#basket').replaceWith($(data).find('#basket'));
				}
				if($('#header_basket').length == 0){
					$('#header_right').append($(data).find('#header_basket'));
				}
				else {
					$('#header_basket').replaceWith($(data).find('#header_basket'));
				}
				
			}
		});

	}, 500);
	
}
$(document).on('click', '.button-add-to-basket', function(e){
	basket($(this).parent().attr('href'), e);
});
$(document).on('click', '.rem_from_basket', function(e){
	basket($(this).attr('href'), e);
});


$(document).on('click', '#basket', function(){
	window.location.href = "/order/basket.php";
});





$(document).on('click', '.count_plus, .count_minus', function(){


	var num = parseInt($(this).parent().find('.basket_count').text());
    //console.log($(this).parents().find('.basket_count').text())
    $(this).parents('td').find('.basket_count').html('<img src="/design3/images/cloader.gif" style="width:30px;height:20px;margin:auto"/>');
	var pos_id = $(this).attr('id').substr(7);
	var minus_plus = '';
	if($(this).hasClass('count_plus')){
		num = num + 1;
	}
	else if($(this).hasClass('count_minus')){
		if(num > 1){
			minus_plus = '-';
			num = num - 1;
		}
		else {
			return false;	
		}
	}

	$(this).parent().parent().find('input[id="element_1_' + pos_id + '"]').val(num);
	
	
	$.ajax({
		url: "/cms/admin/basket.php?pl_plugin_order[1_" + pos_id +  "]=" + minus_plus + 1,
		type: 'get',
		async: true,
		success: function(data){
			$("#tr_" + pos_id).replaceWith($(data).find("#tr_" + pos_id));
			$("#tr_itog").replaceWith($(data).find("#tr_itog"));
			$("#header_basket").replaceWith($(data).find("#header_basket"));
		}
	});
});
$(document).on('click', '.remove_from_basket', function(e){
	e.preventDefault();
	var id = $(this).attr('id').substr(4);
	var url = $(this).attr("href");
	$.ajax({
		url: url,
		type: 'get',
		async: false,
		success: function(data){
			$("#tr_" + id).remove();
			var tr_itog = $.trim($(data).find("#tr_itog").text());
			if(tr_itog == ''){
				$("#basket_table").html("<tr><td>Ваша корзина пуста, вы будете перенаправлены на главную страницу через 3 секунды</td></tr>");
				setTimeout(function(){window.location.href = "/"}, 3000);
				$("#header_basket").remove();
			}
			else {
				$("#tr_itog").replaceWith($(data).find("#tr_itog"));
				$("#header_basket").replaceWith($(data).find("#header_basket"));
			}
			
		}
	});
});
var timeout;
$('.menu-item, .popup-content').on('mouseover', function(){
	$(this).parent().parent().parent().find('.popup-content').css('display', 'none');
	$(this).parent().find('.popup-content').css('display', 'block');
	clearTimeout(timeout);
});
$('.menu-item, .popup-content').on('mouseout', function(){
	var thi = $(this);
	timeout = setTimeout(function(){
		thi.parent().find('.popup-content').fadeOut("fast");
	}, 500);
});

var mainImg = $('.position-main-img img').attr('src');
var hoverTime;
$(document).on('mouseenter', '.thumbnail-mini', function(){
	clearTimeout(hoverTime);
	var image = $(this).find('img');
	var src = image.attr('src');
	var img = src.substr(src.length - 12);
	//alert(img);
	$('.position-main-img img').attr('src', '/images/products/big/' + img);
});
$(document).on('mouseleave', '.thumbnail-mini', function(){
	hoverTime = setTimeout(function(){
		$('.position-main-img img').attr('src', mainImg);
	}, 1000);
});
});



