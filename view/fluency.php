<h1>Fluency Tests</h1>
<ul>
<?php
$tests = array_slice(scandir('./tests'), 2); 
foreach($tests as $test): ?>
<li><a href="<?php echo("?action=".$test)?>"><?php echo($test)?><br><br></a></li>
<?php endforeach; ?>
</ul>
<?php 
include("footer.php");
?>