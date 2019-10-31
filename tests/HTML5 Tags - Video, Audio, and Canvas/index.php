<h1>HTML5 Tags - Video, Audio, and Canvas</h1>
<h4>Video</h4>
The video tag is used for when you want to embed a video into the webpage.<br><br>
<video width="480" controls>
  <source src="/cit261/videos/hikarunara.mp4" type="video/mp4">
  <source src="/cit261/videos/hikarunara.mp4" type="ogg/mp4">
  Your browser does not support the video element. :/
</video>
<h4>Audio</h4>
Similar to the Video tag, the audio tag is used soley for uploading audio to the webpage.<br><br>
<audio controls>
  <source src="/cit261/audio/hikarunara.ogg" type="audio/ogg">
  <source src="/cit261/audio/hikarunara.mp3" type="audio/mpeg">
Your browser does not support the audio element. :/
</audio>

<h4>Canvas</h4>
The Canvas tag is used to draw various graphics programmatically.<br><br>

Below is a picture of the Mona Lisa<br><br>
<img id ="monaLisa" src="/cit261/images/monalisa.jpg" alt="Mona Lisa" height="596" width="400">
<br><br>
Now we will programmatically draw the the Mona Lisa <br><br>
<input type="submit" value="Draw the Mona Lisa"onClick="drawTest();"> <br><br>
<canvas id="monaLisaCanvas" height="596" width="400" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag. :/</canvas>






















<?php include("./view/footer.php"); ?>