<?php
/**
 * Created by PhpStorm.
 * User: Sambo Visal
 * Date: 7/13/2017
 * Time: 8:28 PM
 */
echo "Welcome to array <br>";
$car = array("Lamboghini","BMW","Roll Royce");
echo "$car[0] <br/>";
echo "The length of array <br/>";
echo count($car);
echo "Using forloop <br>";
for($i=0;$i<count($car);$i++)
{
    echo $car[$i]."<br>";
}
/*
 PHP Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.
There are two ways to create an associative array:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
or:
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
 */
//Ctrl+d = copy the current statement
echo "The associative array <br>";
$age = array("Peter"=>35,"Visal"=>18);
echo "Peter is ".$age['Peter']."<br>";
echo "using foreach key <br>";
foreach($age as $x => $x_value)
{

    echo "$x <br/>";
}
echo "using foreach value <br>";
foreach($age as $x => $x_value)
{
    echo "$x_value <br/>";
}
