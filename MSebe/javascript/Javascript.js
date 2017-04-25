var request = new XMLHttpRequest();
function page1() {
	request.open("GET", "html/page1.php", true);

	request.onreadystatechange = function() {
		/*readystate = 4 means that the generated response is finished*/
		if(request.readyState == 4) {
			document.getElementById('page').innerHTML = request.responseText;
		}
	}
	request.send(null);
}
function page2() {
	request.open("GET", "html/page2.php", true);

	request.onreadystatechange = function() {
		/*readystate = 4 means that the generated response is finished*/
		if(request.readyState == 4){
			document.getElementById('page').innerHTML = request.responseText;
		}
	}
	request.send(null);
}
function page3() {
	request.open("GET", "html/page3.php", true);

	request.onreadystatechange = function() {
		/*readystate = 4 means that the generated response is finished*/
		if(request.readyState == 4){
			document.getElementById('page').innerHTML = request.responseText;
		}
	}
	request.send(null);
}
function page5() {
	request.open("GET", "html/page5.php", true);

	request.onreadystatechange = function() {
		/*readystate = 4 means that the generated response is finished*/
		if(request.readyState == 4){
			document.getElementById('page').innerHTML = request.responseText;
		}
	}
	request.send(null);
}
