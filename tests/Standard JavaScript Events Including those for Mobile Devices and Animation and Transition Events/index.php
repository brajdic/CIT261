<h1>Standard JavaScript Events Including those for Mobile Devices and Animation and Transition Events</h1>
<h4>JavaScript Events</h4>
<div>
JavaScript events (HTML DOM events) are functions that trigger upon reaching a certain condition within the HTML <br>
and are used in conjuction with JavaScript functions to do something.<br>
Here are a few examples of events:<br><br>
<table class="tg">
  <tr>
    <th class="tg-baqh">Event Name</th>
    <th class="tg-baqh">Trigger</th>
    <th class="tg-baqh">Example</th>
  </tr>
  <tr>
    <td class="tg-0lax">onLoad</td>
    <td class="tg-0lax">When the page loads, the event triggers.</td>
    <td class="tg-0lax"><b class = "red" id="time"></b></td>
  </tr>
  <tr>
    <td class="tg-0lax">onClick</td>
    <td class="tg-0lax">When the element is clicked on, the event triggers.</td>
    <td id="click" onClick="clickTest();" class="tg-0lax"><b>Click here<b></td>
  </tr>
  <tr>
    <td class="tg-0lax">onMouseOver</td>
    <td class="tg-0lax">When the mouse is above the element, the event triggers</td>
    <td id = "mouseOver" onMouseOver="mouseOverTest();" class="tg-0lax"><b>Place mouse here</b></td>
  </tr>
  <tr>
    <td class="tg-0lax">onKeyDown</td>
    <td class="tg-0lax">When a key is pressed within the element, the event triggers.</td>
    <td id ="keyDown" onKeyDown="keyDownTest();" class="tg-0lax"><input type = "text" placeholder="Type something here...">
	</td>
  </tr>
  <tr>
    <td class="tg-0lax">onTouchStart <b>(touch screen only)</b></td>
    <td class="tg-0lax">When the element is touched, the event triggers.</td>
    <td id = "touchStart" onTouchStart="touchStartTest();" class="tg-0lax"><b>Touch here</b></td>
  </tr>
  <tr>
    <td class="tg-0lax">onTouchEnd <b>(touch screen only)</b></td>
    <td class="tg-0lax">When the element is no longer being touched, the event triggers.</td>
    <td id = "touchEnd" onTouchEnd="touchEndTest();" class="tg-0lax"><b>Touch here and then let go</b></td>
  </tr>
</table>
<h4>Animation</h4>
Click the square below to start the animation.<br>
<div>Animation status:<p id="info"></p></div>
<div id="flag" onclick="flagTest();"></div>
<br><br>
<h4>Transition</h4>
When you hover over the box, the box turns into a square (and changes color) immediately.<br><br>
<div id="flag2"></div><br><br>
If you click the button below, the transtion effect will be applied to the square, making a smooth transition from sqaure into circle when hovered over.<br><br>
<input type="submit" value="Smooth transition" onClick="transitionTest();"><br><br>


</div>








<?php include("view/footer.php"); ?>