<?php
/**
 * Created by PhpStorm.
 * User: Sambo Visal
 * Date: 7/13/2017
 * Time: 7:57 PM
 */
/*
 PHP User Defined Functions
Besides the built-in PHP functions, we can create our own functions.
A function is a block of statements that can be used repeatedly in a program.
A function will not execute immediately when a page loads.
A function will be executed by a call to the function.
 */

function name()
{
    echo "Hello world <br>";
}
name();
/*
 PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want,
just separate them with a comma.
 */
echo "function argument <br>";
function argument($name)
{
    echo "$name <br>";
}
argument("Visal");
argument("Pisal");
argument("Michael");
echo "function two argument <br>";
function twoargument($name,$year)
{
    echo "$name was born in $year<br>";
}
twoargument("Visal",1997);
twoargument("Pisal",1998);
twoargument("Michael",1996);
/*
 PHP Default Argument Value
The following example shows how to use a default parameter. If we call the function setHeight() without arguments it
 */
echo "Php Default value";
function setheight($height=20)
{
    echo "The height is $height <br/>";
}
setheight(350);
setheight();
setheight(150);
setheight(500);
echo "PHP Returning value <br/>";
function sum($x,$y)
{
    $z = $x + $y;
    return $z;
}
echo "first sum is ".sum(10,20)."<br/>";
echo "second sum is ".sum(30,40)."<br/>";
echo "third sum is ".sum(80,90)."<br/>";
