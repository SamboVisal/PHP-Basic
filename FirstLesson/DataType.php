<?php
//String
$q = "Pisal SAmbo";
$y = "I love you";
echo $q."<br/>";
echo $y;
/*
 Rules for integers:

An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
In the following example $x is an integer. The PHP var_dump() function returns the data type and value:
 */
//Integers
$a = 1997;
var_dump($a);
$b = 20.5;
var_dump($b);
$c = true;
var_dump($c);
$d = array(2,3,4,5,8);
var_dump($d);
//object
class car{
    function Car(){
        $this->model = "Lambo";
    }
}
$e = new Car();
var_dump($e->model);
//NULL
$f=null;
var_dump($f);
?>