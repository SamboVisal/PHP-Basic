<?php
/**
PHP Global Variables - Superglobals
Several predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope -
 * and you can access them from any function, class or file without having to do anything special.
The PHP superglobal variables are:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
This chapter will explain some of the superglobals, and the rest will be explained in later chapters.
 */
/*
 PHP $GLOBALS
$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script
(also from within functions or methods).
PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
The example below shows how to use the super global variable $GLOBALS:
 */
echo "PHP global$ <br>";
$x = 10;
$y = 20;
function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS ['y'];
}
addition();
echo "The addition is : $z <br>";
echo "You can find the filename of the currently executing script by using _SERVER['PHP_SELF'] <br>";
echo "using PHP_SELF <br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo "using SCRIPT_NAME <br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
/*
 Basic knowledge of array is a prerequisite of this example. You can get back to this example after you learn php array.
The following PHP code compares the array elements with the $_SERVER['PHP_SELF'] and displays a message.
 */
$findit=array('/SamboPisal/FirstLesson/superglobal.php',
    '/SamboPisal/FirstLesson/superglobssal.php',
    '/SamboPisal/FirstLesson/superglobssal.php'
);
for ($j=0; $j<count($findit); $j++)
{
    if ($_SERVER['SCRIPT_NAME']==$findit[$j])
        echo "<br> You are learning PHP Super Globals <br>";
}
echo "using SERVER_NAME <br>";
echo $_SERVER['SERVER_NAME'];
echo "<br> USING HTTP_HOST <br>";
echo $_SERVER['HTTP_HOST'];
echo "<br> using HTTP_USER_AGENT <br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br> using SERVER['SCRIPT_FILENAME'] <br>";
echo $_SERVER['SCRIPT_FILENAME'];
//echo "<br> using SERVER['REMOTE_HOST'] <br>";
//echo $_SERVER['REMOTE_HOST'];
echo "<br> using SERVER['REQUEST_METHOD'] <br>";
echo $_SERVER['SERVER_ADMIN']."<br/>";
echo $_SERVER['SERVER_PORT']."<br/>";
echo $_SERVER['SERVER_SIGNATURE']."<br/>";
echo $_SERVER['PATH_TRANSLATED']."<br/>";
echo $_SERVER['SCRIPT_URI'];
