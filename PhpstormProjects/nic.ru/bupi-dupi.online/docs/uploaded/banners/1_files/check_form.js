var classes=new Array();
classes['_not_empty_']=check_not_empty;
classes['_date_']=check_date;
classes['_datetime_']=check_datetime;
classes['_email_']=check_email;
classes['_number_']=check_number;

var results=new Array();
results['_not_empty_']="Не заполнено обязательное поле";
results['_date_']="Формат даты: ГГГГ-ММ-ДД";
results['_datetime_']="Формат даты и времени: ГГГГ-ММ-ДД ЧЧ:ММ";
results['_email_']="Неправильный формат e-mail";
results['_number_']="Неправильный формат числа";

var GetClassPos = 0;

function check_form(form_name)
{
	
	f=document.forms[form_name];
	var c;
	var q;
	for(c=0;c<f.elements.length;c++)
	{
		while((q=getNextClass(f.elements[c].className))!="")
		{
			if(!(classes[q](f.elements[c])))
			{
				alert(results[q]);
				f.elements[c].focus();
				GetClassPos=0;
				return false;
			} 
		}
	}
	return true;
}

function getNextClass(name)
{
	var cc;
	for(c in classes)
	{
		if(name.substring(GetClassPos,GetClassPos+c.length)==c)
		{
			GetClassPos+=c.length+1;
			return c;
		} 
	}
	GetClassPos=0;
	c="";
	return c;
}

function check_date(elem)
{
	e=elem.className;
	val=elem.value;
	for(i=0;i<=3;i++)
		if(!is_num(val.charAt(i))) {
			elem.className=e+' error';return false;
		}
	if(val.charAt(4)!='-') {
		elem.className=e+' error';return false;
	}
	for(i=5;i<=6;i++)
		if(!is_num(val.charAt(i))){
			elem.className=e+' error';return false;
		}
	if(val.charAt(7)!='-'){
		elem.className=e+' error';return false;
	}
	for(i=8;i<9;i++)
		if(!is_num(val.charAt(i))){
			elem.className=e+' error';return false;
		}
	if (e.substring(e.length-6,e.length)==' error')
		elem.className=e.substring(0,e.length-6);		
	return true;
}

function check_datetime(elem)
{
	val = elem.value;
	for(i=0;i<=3;i++)
		if(!is_num(val.charAt(i))) return false;
	if(val.charAt(4)!='-') return false;
	for(i=5;i<=6;i++)
		if(!is_num(val.charAt(i))) return false;
	if(val.charAt(7)!='-') return false;
	for(i=8;i<=9;i++)
		if(!is_num(val.charAt(i))) return false;
	if(val.charAt(10)!=' ') return false;
	for(i=11;i<=12;i++)
		if(!is_num(val.charAt(i))) return false;
	if(val.charAt(13)!=':') return false;
	for(i=14;i<=15;i++)
		if(!is_num(val.charAt(i))) return false;
	return true;
}


function check_not_empty(elem)
{
	e=elem.className 
	if(elem.value=="") {
		elem.className=e+' error';
		return false;
	}
	if (e.substring(e.length-6,e.length)==' error')
		elem.className=e.substring(0,e.length-6);
	return true;
}

function check_email(elem)
{
	e=elem.className
	if (validate_email(elem.value))
	{
		if (e.substring(e.length-6,e.length)==' error')
			elem.className=e.substring(0,e.length-6);
		return true;
	}else{
		elem.className=e+' error';
		return false;
	}
}

function check_number(elem)
{
	e=elem.className
	if (is_num(elem.value))
	{
		if (e.substring(e.length-6,e.length)==' error')
			elem.className=e.substring(0,e.length-6);
		return true;
	}else{
		elem.className=e+' error';
		return false;
	}
}

function is_num(c) {
	for(m=0;m<c.length;m++){if("0123456789".indexOf(c.charAt(m))==-1)return false;}
	return true;
}

function is_sym(c) {
if("0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM_-.".indexOf(c)!=-1)return true;
return false;
}	
	
function validate_email(val) {
var i;
var state=0;
if(val=="")return false;
for(i=0;i<val.length;i++){
	switch(state) {
	case 0://waiting @
		if(val.charAt(i)=="@")state=1;
		else if(!is_sym(val.charAt(i))) return false;
		break;
	case 1://waiting .
		if(val.charAt(i)==".")state=2;
		else if(!is_sym(val.charAt(i))) return false;
		break;
	case 2://waiting for some chars... or .
		if(is_sym(val.charAt(i)))state=3;
		else return false;
		break;
	}
}
if(state==3) return true;
return false;
}


