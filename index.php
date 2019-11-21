<?php
error_reporting(0);
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
	case 'HTML5 Tags - Video, Audio, and Canvas':
		include("tests/HTML5 Tags - Video, Audio, and Canvas/index.php");
		break;
	case 'Standard JavaScript Events Including those for Mobile Devices and Animation and Transition Events':
		include("tests/Standard JavaScript Events Including those for Mobile Devices and Animation and Transition Events/index.php");
		break;
	case 'Object Creation Functions, Inheritance, Properties, Methods, Instantiation':
		include("tests/Object Creation Functions, Inheritance, Properties, Methods, Instantiation/index.php");
		break;
	case 'XMLHTTPRequest to Consume a JSON Web Service':
		include("tests/XMLHTTPRequest to Consume a JSON Web Service/index.php");
		break;
	case 'Local Storage API, Storing and Retrieving Simple Data, Arrays, Associative Arrays, and Objects':
		include("tests/Local Storage API, Storing and Retrieving Simple Data, Arrays, Associative Arrays, and Objects/index.php");
		break;	
	case 'DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc.':
		include("tests/DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc./index.php");
		break;
	case 'Manipulating CSS Class Properties Using JavaScript':
		include("tests/Manipulating CSS Class Properties Using JavaScript/index.php");
		break;
	case 'Creating CSS3 Transitions and Animations in CSS and triggering them with JavaScript':
		include("tests/Creating CSS3 Transitions and Animations in CSS and triggering them with JavaScript/index.php");
		break;	
	default:
		include("view/catfacts.php");
		include("view/fluency.php");
		break;
}
?>