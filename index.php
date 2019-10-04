<?php
session_start();
require("model/php/user_data.php"); 
$_SESSION["ip"] = getIP();
$_SESSION["country"] = getCountry();
require("view/header.php");
require("view/nav.php");
//require("view/footer.php");

if(filter_input(INPUT_GET, 'action')) {
 $action  = filter_input(INPUT_GET, 'action');
} else {
   $action = filter_input(INPUT_POST, 'action');
}
switch($action) {
	case 'fluency':
		include("view/fluency.php");
		break;
	case 'Loops, Conditional Statements, Functions, Variables, Parameters, Arrays, Associative Arrays':
		include("tests/Loops, Conditional Statements, Functions, Variables, Parameters, Arrays, Associative Arrays/index.php");
		break;
	case 'JSONParse, Stringify':
		include("tests/JSONParse, Stringify/index.php");
		break;	
	default:
		include("view/catfacts.php");
		include("view/fluency.php");
		break;
}
?>