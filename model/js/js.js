function alertNames() { 
	let names = ["Jack Skellington", "Harry Potter", "Santa Claus"];
	for(let i = 0; i < names.length; i++)
		alert(names[i]);
}
function squareNumber(x) { 
	if(!isNaN(x) && x.length >= 1)
		document.getElementById("squareNumber").innerHTML = "<br>" + x + " squared is " + x * x;
}
function printPerson(myArray) { document.getElementById("person").innerHTML = "<br>" + myArray["firstName"] + " " + myArray["lastName"]; }
function parseJSON() { 
	let txt = '{ "name":"Timmothy", "age":21, "sex":"male" }';
	let obj = JSON.parse(txt);
	document.getElementById("testJSONParse").innerHTML = "<br>" + obj.name + "<br>" +  obj.age + "<br>" + obj.sex; 
}
function stringify() {
	let obj = { name:"Timmothy", age:21, sex:"male" };
	let myJSON = JSON.stringify(obj);
	document.getElementById("testStringify").innerHTML = myJSON;
}
function clickTest() { document.getElementById("click").innerHTML = "<b class = 'red'>Clicked!</b>"; }
function mouseOverTest() { document.getElementById("mouseOver").innerHTML = "<b class = 'red'>Moused Over!</b>"; }
function keyDownTest() { document.getElementById("keyDown").innerHTML = "<b class = 'red'>Key pressed!</b>";}
function touchStartTest() {document.getElementById("touchStart").innerHTML = "<b class = 'red'>Touch started!</b>";}
function touchEndTest() {document.getElementById("touchEnd").innerHTML = "<b class = 'red'>Touch ended!</b>";}
function onLoadFunctions() { 
	try {
		timer(2, 0);  
	} catch(err) {
		//
	}
	try {
		testUniqueIP();
	} catch {
	}
}
function flagTest() {
	var keyframe = document.getElementById("flag");
	keyframe.style.animation = "animeKeyframe 3s, linear, 0, 1, normal, forwards"; //name duration timingFunction delay iterationCount direction fillMode playState
	keyframe.addEventListener("animationstart", startAnimation);
	keyframe.addEventListener("animationend", endAnimation);
}
function startAnimation() {
	document.getElementById("info").innerHTML = "animationstart event: The animation is now showing.";
}
function endAnimation() {
	this.style.animation = "animeKeyframeBackwards 3s, linear, 0, 1, normal, forwards";
	document.getElementById("info").innerHTML = "animationend event: The animation is now over.";
}
function transitionTest() {
	document.getElementById("flag2").style.transition = "all 2s";     // Standard syntax
}
function timer(minutes, seconds) {
	var time = document.getElementById("time");
	var timeout;
	time.textContent = minutes + ":" + seconds;
	if (seconds == 0) {
		if (minutes == 0) {
			return;
		} else if (minutes != 0) {
			minutes = minutes - 1;
			seconds = 60;
		}
	}
	seconds = seconds - 1;
	timeout = setTimeout(function() { timer(minutes, seconds) }, 1000);
}
function drawTest() {
	let canvas = document.getElementById("monaLisaCanvas");
	let newCavas = canvas.getContext("2d");
	let imgToDraw = document.getElementById("monaLisa");
	newCavas.drawImage(imgToDraw,0,0);
}
function testObjFunc() {
	var phone = {
	type: "mobile",
	manufacturer: "Apple",
	model: "iPhone 11 Pro Max"
};
	document.getElementById("testObjModel").innerHTML = "The model of the phone is: " + phone.model; 
	document.getElementById("testObjManufacturer").innerHTML = "The manufacturer of the phone is: " + phone.manufacturer; 
	document.getElementById("testObjType").innerHTML = "The type of the phone is: " + phone.type; 
}
function testCatFact() {
	let req = new XMLHttpRequest();
	let url = 'http://emma.wtf/facts/catFacts/';
	req.responseType = 'json';
	req.open('GET', url, true);
	req.onload  = function() {
	let res = req.response;
		document.getElementById("catFact").innerHTML = res.fact;
	};
	req.send(null);
}

function testRandomFact() {
	let req = new XMLHttpRequest();
	let url = 'http://emma.wtf/facts/randomFact';
	req.responseType = 'json';
	req.open('GET', url, true);
	req.onload  = function() {
		let res = req.response;
		document.getElementById("randomFact").innerHTML = res.text;
	};
	req.send(null);
}
function testUniqueIP() {
	if (typeof(Storage) !== "undefined") { //check to make sure storeage works with browser.
		if(localStorage.IP) {
			document.getElementById("IP").innerHTML = "<code> Your IP address is: <b>" + localStorage.getItem("IP") + " </b><p class='comment'>//unique to each visitor and only stored locally</p>" + "</code>"; //retrieve 
			localStorage.counter++;
		} else {
			localStorage.setItem("IP", getIP()); //store IP (this took about 2 hours of research / implementation)
			localStorage.setItem("counter", 0); //store visit count
		}
	} else 
		document.getElementById("IP").innerHTML = "Sorry, your browser does not support Web Storage...";
	if(localStorage.counter == 0)
		document.getElementById("testUniqueIP").innerHTML = "<code> According to local storage, you're visiting this page for the <b>first</b> time. <br>Refresh your browser to increment the counter</code><br>";
	else
		document.getElementById("testUniqueIP").innerHTML = "<code> According to local storage, you've visited this page <b>" + localStorage.counter + "</b> time(s).</code><br>";
}
function getIP() { return(document.getElementById("test").getAttribute('value')); }


//objects
var phone = {
	type: "mobile",
	manufacturer: "Apple",
	model: "iPhone 11 Pro Max",
	ring: function() {
		alert("Your phone is ringing!!");
	}
};