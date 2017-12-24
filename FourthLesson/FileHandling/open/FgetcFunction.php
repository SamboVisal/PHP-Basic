<?php
$file = fopen("D:\\stream\\hello1.txt","r") or die("Unable to open file");
while (!feof($file)){
    fgets($file)."<br>";
}
fclose($file);