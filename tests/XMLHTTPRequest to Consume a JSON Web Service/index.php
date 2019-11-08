<h1>XMLHTTPRequest to Consume a JSON Web Service</h1>

<div>For this demo, we're going to use the JSON requests to pull data to the html page. <br><br>
<code><b> http://emma.wtf/catfacts/</b></code><br><br>
<div id="catFact"></div><br>
<input type = "button" value ="Grab CatFact" onClick="testCatFact();"><br><br><br><br>
<code><b> http://emma.wtf/randomFact/</b></code><br><br>
<div id="randomFact"></div><br>
<input type = "button" value ="Grab RandomFact" onClick="testRandomFact();">

</div>
<?php include("view/footer.php"); ?>