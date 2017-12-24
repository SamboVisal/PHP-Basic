<?php
/**
 * Created by PhpStorm.
 * User: sambo visal
 * Date: 06/08/2017
 * Time: 03:23 PM
 */
#fgets() we can read only 1 time
$file = fopen("D:\\stream\\hello.txt","r") or die("Unable to open file");
//echo fread($file,filesize("D:stream\\hello.txt"));
//fgets() is used to read a single line from the file
echo "<h2>fgets() function</h2>";
// echo fgets($file)."<br>";
//feof() is a function checks if the end of file has been reached
echo "using feof() function<br>";
while(!feof($file)){
    echo fgets($file);
}
$file2 = fopen("D:\\stream\\helllo.txt","r");
echo "<h2>PHP read a single character fgetc()</h2><br>";
while (!feof($file2))
{
    echo fgetc($file2)."<br>";
}
fclose($file);
fclose($file2);