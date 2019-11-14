<h1>DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc.</h1>
<div><br>
<h4>Creating and appending elements with DOM</h4>
JavaScript can manipulate HTML with the use of DOM. We can create any element with the createElement method.<br><br>
The following example creates a video element with the dimensions 480 x 270 and appends it to the element we specify. <br><br>
<code>
	&nbsp;var video = document.createElement("video");<p class="comment"> //this creates the video element.</p><br><br>
	&nbsp;if (video.canPlayType("video/mp4"))<p class="comment"> //checks to make sure the video is supported by the browser</p><br>
	&nbsp;&nbsp;&nbsp;video.setAttribute("src","/cit261/videos/hikarunara.mp4");<br>
	&nbsp;else<br>
	&nbsp;&nbsp;&nbsp;video.setAttribute("src","/cit261/videos/hikarunara.ogg");<br><br>
	&nbsp;video.setAttribute("width", "480");<p class="comment"> //sets the width </p> <br>
	&nbsp;video.setAttribute("width", "270");<p class="comment"> //sets the height </p> <br>
	&nbsp;document.getElementById("").appendChild(video);<p class="comment"> //Appends the video to the specified element (video) </p><br>
</code><br>
<input type="button" value="Create/Insert Video" onClick="createVideo();"><br><br>
<div id="testCreateVideo">
</div>
<h4>Removing elements</h4><br>

The following example shows how to remove elements using DOM manipulation. <br><br>
<code>
  &nbsp;var video = document.getElementById(""); <p class="comment"> //get the video elementID from the HTML</p> <br>
  &nbsp;var audio = document.getElementById("testInsertAudio"); <p class="comment"> //get the audio elementID from the HTML</p> <br>
  &nbsp;video.removeChild(video.childNodes[0]);  <p class="comment"> //remove the video element</p> <br>
  &nbsp;audio.removeChild(video.childNodes[0]); <p class="comment"> //remove the audio element</p> <br>
 
</code><br>
<input type="button" value="Remove Video" onClick ="testRemoveVideo();">
</div>
<?php include("view/footer.php"); ?>