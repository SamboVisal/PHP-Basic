<?php
/**
 * Created by PhpStorm.
 * User: Sambo Visal
 * Date: 7/13/2017
 * Time: 9:41 PM
 */
/*
 PHP - Sort Functions For Arrays
In this chapter, we will go through the following PHP array sort functions:
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
 */
echo "sort() function <br>";
$car = array("f","d","c","b");
sort($car);
for($i=0;$i<count($car);$i++){
    echo "$car[$i] <br/>";
}
echo "rsort() function <br>";
$car = array("a","b","c","d");
rsort($car);
for($i=0;$i<count($car);$i++){
    echo "$car[$i] <br/>";
}
/*
 Sort Array (Ascending Order), According to Value - asort()
The following example sorts an associative array in ascending order, according to the value:
 */
echo "Ascending Order, according to value - asort()"."<br/>";
$car = array("a"=>20,"b"=>10,"c"=>50,"d"=>40);
asort($car);
echo "Sort as key according to value <br>";
foreach($car as $x => $value)
{
    echo "$x <br>";
}
echo "Sort as value <br/>";
foreach($car as $x => $value)
{
    echo "$value <br>";
}
echo "ksort() accoring to key Ascending <br>";
ksort($car);
foreach ($car as $x => $value)
{
    echo "Key: $x <br>";
}
echo "value according to key <br>";
foreach($car as $x => $value){
    echo "value : $value <br>";
}
echo "Decending arsort() <br>";
arsort($car);
foreach($car as $x => $value)
{
    echo "decending sort key : $x <br>";

}
echo "decening sort as value <br>";
foreach($car as $x => $value)
{
    echo "decending sort value : $value <br>";
}