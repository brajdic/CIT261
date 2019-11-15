<h1>Manipulating CSS Class Properties Using JavaScript</h1><br>
<div>
<h4> JavaScript can add, remove, or modify any class properties within CSS. In this demonstration, we change the CSS for the the nav bar.</h4>
 The below shows the css as it is now.<br><br>
<code>
&nbsp;nav { <br>
&nbsp;&nbsp;padding: 10px;<br>
&nbsp;&nbsp;background-color: #202225<br>
&nbsp;}<br>
</code><br><br>


The following code will change the nav bar <b>(Fluency Tests)</b> to have centered text.<br><br>
<code>
&nbsp;document.getElementById("nav").style.textAlign  = "center";<br>
<p class="comment">//or</p><br>
&nbsp;setProperty("text-align", "center");
</code><br>
<input type="button" onClick="testCenterTextAlign();" value="Center Nav"><br><br><br>

The following code will change the nav bar <b>(Fluency Tests)</b> to have right aligned text.<br><br>
<code>
&nbsp;document.getElementById("nav").style.textAlign = "right";<br>
<p class="comment">//or</p><br>
&nbsp;setProperty("text-align", "right");
</code><br>
<input type="button" onClick="testRightTextAlign();" value="Right textAlign"><br><br><br>

The following code will change the nav bar <b>(Fluency Tests)</b> to have left aligned text.<br><br>
<code>
&nbsp;document.getElementById("nav").style.textAlign = "left";<br>
<p class="comment">//or</p><br>
&nbsp;setProperty("text-align", "left");
</code><br>
<input type="button" onClick="testLeftTextAlign();" value="Left textAlign"><br><br><br>

If we wanted to remove a CSS property from a class we would simply do:<br><br>
<code>
&nbsp;removeProperty("background"); <p class="comment">//removes the background color of the body.</p>
</code><br>
<input type="button" onClick="testRemoveBg();" value="Remove Background"><br><br><br>


</div>
<?php include("view/footer.php");?>