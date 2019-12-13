//trap onload event
window.onload = function () {
	//Determine browser, we only need this for Internet Explorer
	if (navigator.appName == "Microsoft Internet Explorer") {
		
		//Array of elements to be replaced
		var arrElements = new Array(3);
		arrElements[0] = "object";
		arrElements[1] = "embed";
		arrElements[2] = "applet";
	
		
		//Loop over element types
		for (n = 0; n < arrElements.length; n++) {
		
			//set object for brevity
			replaceObj = document.getElementsByTagName(arrElements[n]);
			
			//loop over element objects returned
			for (i = 0; i < replaceObj.length; i++ ) {
			
				//set parent object for brevity
				parentObj = replaceObj[i].parentNode;
				
				//grab the html inside of the element before removing it from the DOM
				newHTML = parentObj.innerHTML;
				
				//remove element from the DOM
				parentObj.removeChild(replaceObj[i]);
				
				//stick the element right back in, but as a new object
				parentObj.innerHTML = newHTML;
				replaceObj[i].style.visibility = 'visible';
			
			}
		}
	}
}
