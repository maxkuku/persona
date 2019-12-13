interval='';
function getContentHeight(d)
{
	//alert (d.scrollHeight+' '+d.offsetHeight+' '+d.clientHeight);
	macstr='MacPPC';
	ismac = (navigator.platform == this.macstr);
	hei = (ismac) ? parseInt(d.offsetHeight) : parseInt(d.scrollHeight);
	if (navigator.userAgent.indexOf ("Opera") != -1) hei = d.scrollHeight
	return hei;
}

function higher_one(what, step_one){
	
	d=document.getElementById(what);
	//alert (eval(what+'_Now_Height')+' '+eval(what+'_Real_Height')+' '+step_one);
	if (eval(what+'_Now_Height')<=eval(what+'_Real_Height')-step_one){
		h2=eval(what+'_Now_Height')+step_one;
		eval(what+'_Now_Height=h2');
		d.style.height=h2+'px';
		//alert(h2);
	} else {	
		
		d.style.height=eval(what+'_Real_Height')+'px';
		//alert('*'+d.style.height);
		d.height=eval(what+'_Real_Height');
		eval(what+'_Now_Height='+what+'_Real_Height;'+what+'=1');
		clearInterval(interval);
	}
}
function show_one(what, step_one, hei){
	
	d=document.getElementById(what);
	d.style.height=3;
	d.style.display='block';
	eval(what+'_Now_Height=0');
	//eval(what+'_Real_Height=getContentHeight(d)');
	eval(what+'_Real_Height='+hei);
	//alert('Real_height='+eval(what+'_Real_Height'));
	//document.getElementById(what+'_a').onclick=function(){return hide_one(what, step_one)};
	if (interval)
		clearInterval(interval);	

	eval("interval=setInterval(\'higher_one(\""+what+"\", "+step_one+")\', 1)");
	return false;
}
function smaller_one(what, step_one){
	d=document.getElementById(what);
	h=d.style.height;
	h=parseInt(h.substr(0,h.length-2));
	if (h>=step_one){
		h2=h-step_one;
		d.style.height=h2+'px';
	} else {	
		d.style.height='0px';
		d.style.display='none';
		//document.getElementById(what+'_a').className="drop_on";
		//document.getElementById(what+'_a').innerHTML="<img src=\"/i/drop_on.gif\" style=\"width:13px;height:13px;\" alt=\"показать\" />";
		clearInterval(interval);
	}
}
function hide_one(what, step_one){
	d=document.getElementById(what);
	d.style.height=getContentHeight(d);
	//document.getElementById(what+'_a').onclick=function(){return show_one(what, step_one)};
	clearInterval(interval);
	eval("interval=setInterval(\'smaller_one(\""+what+"\", "+step_one+")\', 1)");
	eval(what+'=0');
	return false;
}
