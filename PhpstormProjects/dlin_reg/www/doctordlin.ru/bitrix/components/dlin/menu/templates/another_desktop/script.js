var jshoverMenu = function()
{
	var menuDiv = document.getElementById("top_buttons")
	if (!menuDiv)
		return;

	var sfEls = document.querySelectorAll(".st1");
	for (var i=0; i<sfEls.length; i++) 
	{
		sfEls[i].onmouseover=function()
		{
			this.className+=" jshover";
		}
		sfEls[i].onmouseout=function() 
		{
			this.className=this.className.replace(new RegExp(" jshover\\b"), "");
		}
	}
}

if (window.attachEvent) 
	window.attachEvent("onload", jshoverMenu);
