<h1>JavaScript - Object Creation Functions, Inheritance, Properties, Methods, and Instantiation</h1>
<h4>Object Creation / Instantiation and Properties</h4>
<div>
There are two ways to create or instantiate a JavaScript object. The first:<br><br>
<code>
var phone = new Object {<br>
&nbsp;&nbsp;&nbsp;phone.type = "mobile";<br>
&nbsp;&nbsp;&nbsp;phone.manufacturer = "Apple";<br>
&nbsp;&nbsp;&nbsp;phone.model = "iPhone 11 Pro Max";<br>
};</code><br>
The second (instantiation):<br><br>
<code>
var phone = {<br>
&nbsp;&nbsp;&nbsp;type: "mobile",<br>
&nbsp;&nbsp;&nbsp;manufacturer: "Apple",<br>
&nbsp;&nbsp;&nbsp;model "iPhone 11 Pro Max"<br>
};</code><br>
The object <b>phone</b> now contains several properties we can print out and or use in our code.<br><br>
<code>
document.getElementById("objModel").innerHTML = "The model of the phone is: " + phone.model; <p class="comment">//prints the model</p><br>
document.getElementById("objMan").innerHTML = "The manufacturer of the phone is: " + phone.manufacturer; <p class="comment">//prints the manufacturer</p><br>
document.getElementById("objType").innerHTML = "The type of the phone is: " + phone.type; <p class="comment">//prints the type of phone</p>
</code><br>
<input type="button" value="Test Obj Creation" onclick="testObjFunc();"><br><br>
<div id="testObjModel"></div><br>
<div id="testObjManufacturer"></div><br>
<div id="testObjType"></div><br>
<h4>Object Methods</h4>
Objects can be created with functions (methods) nested inside them. Take our phone example. We can give it a function called ring() which will alert the user when called (get it?). <br><br>
<code>
var phone = {<br>
&nbsp;&nbsp;&nbsp;type: "mobile",<br>
&nbsp;&nbsp;&nbsp;manufacturer: "Apple",<br>
&nbsp;&nbsp;&nbsp;model "iPhone 11 Pro Max"<br>
&nbsp;&nbsp;&nbsp;function ring() { alert("Your phone is ringing!!"); }<br>
};</code><br>
<input type="button" value="Test Obj Function" onClick="phone.ring();">
<h4>Object Inheritance</h4>
Inheritance is simply when a child object gains properties from its parent object.<br>
For this next example, we'll create a class (our object) called <b>Employee</b> which will act as our parent class (object).<br><br>
We need a constructor to tell the class what properties to give our new object.<br><br>
<code>
class Employee { <br>
&nbsp;&nbsp;&nbsp;constructor(firstName, lastName, id) { <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.firstName = firstName; <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.lastName = lastName; <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.id = id; <br>
  &nbsp;&nbsp;&nbsp;} <br>
};
</code><br>

Our new child class (object) <b>Manager</b> will inherit its parent class <b>Employee</b> (all Managers are employees).<br><br>
<code>
class Manager extends Employee { <br>
&nbsp;&nbsp;&nbsp;constructor(firstName, lastName, id, permissions) {<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;super(firstName, lastName, id); <p class="comment">//super calls the parent non-default constructor initializing the parent variables.</p><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.permissions = permissions; <br>
&nbsp;&nbsp;&nbsp;}<br>
};<br></code>



</div>
<?php
	include("../view/footer.php");
?>