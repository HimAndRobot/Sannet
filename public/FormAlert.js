function removeElement(id) {
    	var elem = document.getElementById(id);
    	return elem.parentNode.removeChild(elem);
	}
	function alertFrom(camp,form,msg){
		alert_top = getAlertTop(camp);
		range = document.createRange();
		alert = range.createContextualFragment('<div id="alert_java" class="alert_java" style=" max-width:'+(camp.offsetWidth-20)+'px; top:'+alert_top+'px;"><span style=" word-wrap: break-word;">'+msg+'</span></div>');
		form.appendChild(alert);
		setTimeout(function(){removeElement('alert_java')},3000);
	}

	function htmlToElement(html) {
    var template = document.createElement('template');
    html = html.trim(); // Never return a text node of whitespace as the result
    template.innerHTML = html;
    return template.content.firstChild;
	}

	function getAlertTop(obj){
		distancetop = obj.offsetTop;
		obj_width = obj.offsetHeight;
		alert_position = distancetop + obj_width + 10; 
		return alert_position;
	}