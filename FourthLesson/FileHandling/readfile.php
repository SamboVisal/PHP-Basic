<?php
/**
 * Created by PhpStorm.
 * User: sambo visal
 * Date: 06/08/2017
 * Time: 03:20 PM
 */
echo readfile("D:\\stream\\helllo.txt")."<br>";
$myfile = fopen("D:\\stream\\hello.txt", "r") or die("Not open");
echo fread($myfile, filesize("D:\\stream\\hello.txt"));
fclose($myfile);