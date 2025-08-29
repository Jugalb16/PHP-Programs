<?php
// Print 15 to 20 using While loop and do while loop

echo "<h2>Printing numbers from 15 to 20 using While loop:</h2>";
$num = 15;
while ($num <= 20) {
    echo $num . " ";
    $num++;
}

echo "<br><br>";

echo "<h2>Printing numbers from 15 to 20 using Do-While loop:</h2>";
$num = 15;
do {
    echo $num . " ";
    $num++;
} while ($num <= 20);

?>
