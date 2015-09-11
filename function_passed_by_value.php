<?php
// Functions passed by value

function doSomething($parameter){
	$parameter = "Hello";
	echo ($Parameter);
}


$var = "Hey";
doSomething($var);
echo ($var);

?>