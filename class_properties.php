<?php

class TestClass {
	public $prop = "Default value";
	public function methodName() {
		echo("Something");
		$this->prop = "newValue";
	}
}


$var = newClass();
$var->methodName();
$obj2 = newClass();

?>

/*
Classes:				UpperCamelCase
Functions/Methods:		lowerCamelCase()
Variables/properties:	lowerCamelCase
Constants:				CAPITAL_AND_UNDERSCORES

Indentation:			Debated

Most important:			Be consistent!
*/