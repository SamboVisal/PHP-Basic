<?php
/**
 * Created by PhpStorm.
 * User: Sambo Visal
 * Date: 7/13/2017
 * Time: 7:45 PM
 */
$x=0;
for ($i=0; $i<=10; $i++)
{
    echo "The number is : ".$i."<br/>";
}
/*
 The PHP foreach Loop
The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax
foreach ($array as $value) {
    code to be executed;
}
For every loop iteration, the value of the current array element is assigned to $value and the
array pointer is moved by one, until it reaches the last array element.
 */
echo "Foreach array <br>";
$array = array("Pisal","Michael","Jackson","Smith");
foreach ($array as $value)
{
    echo "The array are $value <br>";
    echo $array[0];
}