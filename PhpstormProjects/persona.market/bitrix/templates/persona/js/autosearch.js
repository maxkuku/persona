//<![CDATA[
function doLiveSearch( ev, keywords ) {

	if( ev.keyCode == 38 || ev.keyCode == 40 ) {
		return false;
	}	

	$('#autosearch_search_results').remove();
	updown = -1;

	if( keywords == '' || keywords.length < 2 ) {
		return false;
	}
	keywords = encodeURI(keywords);

	$.ajax({url: $('base').attr('href') + 'index.php?route=extension/module/autosearch/ajax_asr&keyword=' + keywords, dataType: 'json', success: function(result) {
		if( result.length > 0 ) {
			var eList = document.createElement('ul');
			eList.id = 'autosearch_search_results';
			var eListElem;
			var eLink;
			var eImage;

			for( var i in result ) {
				eListElem = document.createElement('li');
				eLink = document.createElement('a');
			
			if( (result[i].thumb) != '' )
			{
				eImage = document.createElement('img');
				eImage.src = result[i].thumb;
				eLink.appendChild(eImage);					

			}

var el_span = document.createElement('name');
    var textNode = document.createTextNode(result[i].name);
    eLink.appendChild(el_span);
    el_span.appendChild(textNode);

			if( (result[i].model) != '' )
			{
var el_span = document.createElement('model');
    var textNode = document.createTextNode(result[i].model);
    eLink.appendChild(el_span);
    el_span.appendChild(textNode);
			}

				if( typeof(result[i].href) != 'undefined' ) {
					eLink.href = result[i].href;
				}
				else {
					eLink.href = $('base').attr('href') + 'index.php?route=product/product&product_id=' + result[i].product_id + '&keyword=' + keywords;
				}
				eListElem.appendChild(eLink);

			if( (result[i].price) != '' )
			{

var br = document.createElement("br");
eLink.appendChild(br);

	if( (result[i].special) != '' )
		{
					
var el_span = document.createElement('special-price');
    var textNode = document.createTextNode(result[i].special);
    eLink.appendChild(el_span);
    el_span.appendChild(textNode);
		}

var el_span = document.createElement('price');
    var textNode = document.createTextNode(result[i].price);
    eLink.appendChild(el_span);
    el_span.appendChild(textNode);
			}

			if( (result[i].stock) != '' )
			{

var br = document.createElement("br");
eLink.appendChild(br);
eLink.appendChild( document.createTextNode(result[i].stock) );
			}

				eList.appendChild(eListElem);
			}
			if( $('#autosearch_search_results').length > 0 ) {
				$('#autosearch_search_results').remove();
			}
			
			if( (result[i].viewall) != '' )
			{
			eListElem = document.createElement('li');
			eLink = document.createElement('a');
				var el_span = document.createElement('viewall');
				var textNode = document.createTextNode(result[i].viewall);
				eLink.appendChild(el_span);
				el_span.appendChild(textNode);
				eLink.href = $('base').attr('href') + 'index.php?route=product/search&search=' + keywords;
			eListElem.appendChild(eLink);
			eList.appendChild(eListElem);
			}
			
			$('#search').append(eList);
		}
	}});

	return true;
}

function upDownEvent( ev ) {
	var elem = document.getElementById('autosearch_search_results');
	var fkey = $('#search').find('[name=search]').first();


	if( elem ) {
		var length = elem.childNodes.length - 1;

		if( updown != -1 && typeof(elem.childNodes[updown]) != 'undefined' ) {
			$(elem.childNodes[updown]).removeClass('highlighted');
		}

		// Up
		if( ev.keyCode == 38 ) {
			updown = ( updown > 0 ) ? --updown : updown;
		}
		else if( ev.keyCode == 40 ) {
			updown = ( updown < length ) ? ++updown : updown;
		}

		if( updown >= 0 && updown <= length ) {
			$(elem.childNodes[updown]).addClass('highlighted');

			var text = elem.childNodes[updown].childNodes[0].text;
			if( typeof(text) == 'undefined' ) {
				text = elem.childNodes[updown].childNodes[0].innerText;
			}

		}
	}

	return false;
}

var updown = -1;

domReady(function(){
	$('#search').find('[name=search]').attr('autocomplete', 'off');

	$('#search').find('[name=search]').first().keyup(function(ev){
		doLiveSearch(ev, this.value);
	}).focus(function(ev){
		doLiveSearch(ev, this.value);
	}).keydown(function(ev){
		upDownEvent( ev );
	}).blur(function(){
		window.setTimeout("$('#autosearch_search_results').remove();updown=0;", 1500);
	});
	$(document).bind('keydown', function(ev) {
		try {
			if( ev.keyCode == 13 && $('.highlighted').length > 0 ) {
				document.location.href = $('.highlighted').find('a').first().attr('href');
			}
		}
		catch(e) {}
	});
});
//]]>