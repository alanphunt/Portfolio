var images = document.getElementsByTagName("img");
for (var i = 0; i < images.length; i++) {
	images[i].addEventListener("click", function() {
		imagemodal(this);
	});
}

function closeit(e) {
	e.parentElement.style.display = "none";
	document.body.style.overflow = "visible";
	document.getElementById("clickformenu").style.display = "block";
}

window.onclick = function(event) {
	var mobile = document.getElementById('mobilemenucontainer');
	var mobileparent = document.getElementById("mobileparent");
	var modal = document.getElementById("modal");
	var clickfor = document.getElementById("clickformenu");

	if (event.target == mobile || event.target == mobileparent) {
		mobile.style.display = "none";
		document.body.style.overflow = "visible";
		clickfor.style.display = "block";
		document.documentElement.style.height = "100%";
	} else if (event.target == modal) {
		modal.parentElement.style.display = "none";
		document.body.style.overflow = "visible";
		clickfor.style.display = "block";

	}
}

function mobilemenu() {
	var mobile = document.getElementById("mobilemenucontainer");
	mobile.style.display = "block";
	document.body.style.overflow = "hidden";
	document.documentElement.style.height = "100%";
	document.getElementById("clickformenu").style.display = "none";
}

function imagemodal(element) {
	if (element.parentNode.nodeName == "MAIN") {
		document.getElementById("img01").src = element.src;
		document.getElementById("modalcontainer").style.display = "block";
		document.documentElement.style.height = "100%";
		document.body.style.overflow = "hidden";
	}
}

function topFunction() {
	var up = document.getElementById("text");
	up.scrollTop = 0;
}

function bottomFunction() {
	var down = document.getElementById("text");
	down.scrollTo(0, down.scrollHeight);
}

window.onscroll = function() {
	var x = document.getElementById("clickformenu");	
	
	if (pageYOffset >= (125)) {
		x.classList.add("menuposition");
	} else {
		x.classList.remove("menuposition");
		
	}
}

window.onload = function() {
	var link = document.getElementById("psuedobottom");
	if (window.innerWidth != document.documentElement.clientWidth) {
		link.style.display = "block";
	}
}