<?php
/**
 * Created by PhpStorm.
 * User: Sambo Visal
 * Date: 7/13/2017
 * Time: 7:32 PM
 */
echo "switch case statement"."<br/>";
$name = "reds";
switch ($name)
{
    case "red" :
                echo "Your color is red";
        break;
    case "blue" :
                echo "Blue";
            break;
    case "yellow" :
                echo "yellow";
        break;
    default :
                echo "Not exist";
        break;
}