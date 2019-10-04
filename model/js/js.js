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