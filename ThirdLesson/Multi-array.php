
<?php
$car = array(
    array("Lamboghini",2017,"2000000$"),
    array("Roll Royce",2016,"1500000$"),
    array("Chevolet",2015,"1000000$"),
    array("BMW",2014,"500000$")
);
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$car[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>