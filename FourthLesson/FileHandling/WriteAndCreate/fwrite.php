<?php
$file = fopen("D:\\stream\\newfile.txt","w") or die("Unable to open");
$text = "Pisal Sambo";
fwrite($file,$text);
$text1 = " Lollipop";
fwrite($file,$text1);
flush($file);
fclose($file);
echo "Done bitch";