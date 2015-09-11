<?php
// Function passed by reference

function doSomething($param){
	$param->prop = "Hello";
	echo($param->prop);
}

$var newTestClass();
doSomething($var);
echo ($var);
?>