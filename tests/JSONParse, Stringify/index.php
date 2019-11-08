<h1> JSONParse and Stringify</h1>
<h4> JSON.parse()</h4>
<div>
JSON.parse() is a built-in JavaScript function used to pull Strings out of the JSON format (parse) and turn them into JavaScript objects.<br>
Imagine this is our JSON stored in a variable called <b>json</b>.<br><br>
<code>
var <b>json</b> ='{ "name":"Timmothy", "age":21, "sex":"male" }';
</code><br><br>
Before we can do anything we need to convert the entire String into a JavaScript object.<br><br>
<code>
var <b>obj</b> = JSON.parse(txt);
</code><br><br>
To get data from our newly created object called <b>obj</b> we simply type <b>obj</b>.(followed by the property we want)<br><br>
<code>
document.getElementById("demo").innerHTML = <br>
<b>obj</b>.name + "&lt;br&gt;" + <p class = "comment">//prints the name "Timmothy"</p><br>
<b>obj</b>.age + "&lt;br&gt;" + <p class = "comment">//prints the age "21"</p><br>
<b>obj</b>.sex;                 <p class = "comment">//prints the sex "male"</p><br>
</code><br><br>
<input type ="button" value="Parse JSON" onClick="parseJSON()"/>
<div id="testJSONParse">
</div>
<h4> JSON.stringify()</h4>
The JavaScript function JSON.stringify() is the opposite of JSON.parse() and takes a JavaScript object as a parameter and converts it into a JSON String.<br>
Imagine this is our JavaScript object.<br><br>
<code>
var <b>obj</b> = { name:"Timmothy", age:21, sex:"male" };
</code><br><br>
To convert our JavaScript object to a JSON String we use JSON.stringify()<br><br>
<code>
var strJSON = JSON.stringify(<b>obj</b>); <p class = "comment">//convert our <b>obj</b> into a String</p><br>
document.getElementById("demo").innerHTML = strJSON; <p class = "comment">//prints our JSON String</p> <br>
</code><br><br>
<input type="button" value="Stringify" onClick="stringify()"/></br><br>
<div id="testStringify">
</div>

</div><br>
<?php include("view/footer.php"); ?>