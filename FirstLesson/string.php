<?php
//Length of string
$name = "Sambo Visal";
echo "The length of string ";
echo strlen($name)."<br/>";
//Amount of words
echo "Amount of word ";
echo str_word_count($name)."<br/>";
//Reverse
echo "String reverse ";
echo strrev($name)."<br/>";
/*
 Search For a Specific Text Within a String
The PHP strpos() function searches for a specific text within a string.

If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
 */
echo "The specific text is ";
echo strpos("Hello world","Hello"),"<br/>";
//String replace
echo "The the replacement of string ";
echo str_replace("world","Pisal","Hello world")."<br/>";
//concatination string
echo "The concatination string is ";
$s1 = "Sambo ";
$s2 = "Visal";
echo $s1.=$s2."<br/>";
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
print_r($x + $y); // union of $x and $y