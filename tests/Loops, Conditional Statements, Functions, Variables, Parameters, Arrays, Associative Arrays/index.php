<h1> Loops, Conditional Statements, Functions, Variables, Parameters, Arrays, Associative Arrays</h1><br><br>
<h4>Working with variables </h4>
<div>In JavaScript, you can declare a variable in two ways.<br><br>
The first way uses the <b>var</b> keyword.<br><br>
<code> 
var isTrue = true;<br>
var number = 0;<br>
var dec = 0.0;<br>
var myString = "abcdefg"
</code><br><br><br>
The second way to declare a variable is with the <b>let</b> keyword.<br><br>
<code> 
var isTrue = true;<br>
var number = 0;<br>
var dec = 0.0;<br>
var myString = "abcdefg"
</code><br><br> 
So what's the difference? <b>var</b> gives the variable global scope, meaning any function or block of code can access that variable
within the document.<br>
On the other hand, the <b>let</b> keyword gives the variable block scope. This means only code within the same block can access this variable.<br><br>
Using the <b>var</b> keyword for the variable <b>i</b> in the for loop, the document.write() function prints 10 to the HTML page.<br><br>
<code>
for (var i = 0; i &lt 10; i++) 
	<p class ="indent">document.write(i)</p>

<br>
document.write(i); //prints 10 to the HTML	
</code><br><br>
However, if we switch the keyword from <b>var</b> to <b>let</b> the JavaScript throws an "uncaught reference error" because <b>i</b> is 
no longer within the scope of the block.<br><br>
<code>
for (let i = 0; i &lt 10; i++) <br>
	<p class ="indent">document.write(i)</p>
<br>
document.write(i); //results in an "uncaught reference error"
</code><br><br>
Lastly, the final difference between the two is that <b>var</b> will allow you to redeclare a value after it has already been declared.
This is not the case with the <b>let</b> keword and will result in an error.<br><br>
<code>
var i = 0;
var i = 1;
document.write(i); //prints 1 to the HTML
</code><br>
<code>
let i = 0;
let i = 1;
document.write(i); //results in an error
</code><br><br>
</div>
<h4>Functions and parameters</h4>
<div>
Functions are blocks of code that can be reused and are designed to perform tasks within a program. <br><br>

<code>
var names = ["Jack Skellington", "Harry Potter", "Santa Claus"];<br><br>

function alertNames() { <br><br>
for(let i = 0; i < names.length; i++)
	<p class="indent"> alert(names[i]);</p>
}
</code><br>
<input type ="button" value ="Alert Names" onClick="alertNames()"><br><br>

Some functions take <b>parameters</b> which are aguments (values) passed into the fuinction that the function may do something with.<br><br>
<code>
function squareNumber(x) { document.getElementById("squareNumber").innerHTML = "&lt;br&gt;" + x + " squared is " + x * x; } //takes an input of number and squares it <br><br>
</code><br><br>
This function is nice, but what happens if someone enters something other than a number? The function will return NaN (not a number).<br>
 To avoid this, we can use <b>conditional statements</b> to check if the entered text is a number.<br><br>
 <code>
function squareNumber(x) { <br>
if(!isNaN(x) && x.length >= 1)<br>
	<p class="indent">document.getElementById("squareNumber").innerHTML = "&lt;br&gt;" + x + " squared is " + x * x;</p>
}
</code>
<br>
<br>
<input type ="text" id="userInput" placeholder="Type a number to square"/>
<input type="button" value="Square Number" onClick="squareNumber(document.getElementById('userInput').value)"/><br>
 <div id="squareNumber">
</div><br><br>
<h4>Associative Arrays</h4>
<div>
JavaScript actually does not support Associative Arrays according to <a href="https://www.w3schools.com/js/js_arrays.asp">W3schools</a> which are
more commonly referred to as <b>named arrays</b>. Using named arrays will cause JavaScript to convert the array into an object.
<br><br>
<code>
var myArray =[];<br>
myArray["firstName"] = "John";<br>
myArray["lastName"] = "Wick";<br><br>

function printPerson(myArray) { document.getElementById("person").innerHTML = "&lt;br&gt;" + myArray["firstName"] + " " + myArray["lastName"]; } //prints John Wick to the page.
</code><br>
<script>
var myArray =[];
myArray["firstName"] = "John";
myArray["lastName"] = "Wick";
</script>
<input type="button" value ="Print Name" onClick="printPerson(myArray)"/><br>
<div id="person"></div>



</div>
</div><br><br>
<?php include("view/footer.php"); ?>