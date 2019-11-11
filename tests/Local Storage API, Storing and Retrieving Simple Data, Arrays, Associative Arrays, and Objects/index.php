<h1>Local Storage API, Storing and Retrieving Simple Data, Arrays, Associative Arrays, and Objects</h1>
<div><br>
<p>Local storeage is used when data needs to be stored by the browser. <br><br>
In the following example, the user's IP address is stored in a local variable. <br>
Each time the user revisits the page, the counter will increase (indicating how many times a user has visited the web page).
</p>



<div id="testUniqueIP"></div>
<div id="IP"></div>



</div>
<div id="test" value="<?php echo($_SESSION["ip"]);?>"></div>
<?php include("view/footer.php"); ?>