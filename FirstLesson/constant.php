<?php
/**
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).
To create a constant, use the define() function.
Syntax
define(name, value, case-insensitive)
 */
echo "The define function false ";
echo define("String","Sambo Visal",false)."<br/>";
//name is String when we put false then is not allowed for "string" until we put true then it will allow case sentitive
echo String."<br/>";
echo "The define function true ";
echo define("name","I love KIT",true)."<br/>";
echo NAME."<br/>";
//constant are gobal so, it can be accessed anywhere
define("NAME","Hello from another side ");
    function name()
    {

        echo NAME;
    }

name();