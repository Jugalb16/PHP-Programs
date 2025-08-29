<?php
// Print 5 to 10 using for loop and foreach loop

echo "Using for loop:<br>";

for ($i = 5; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<br>";

echo "Using foreach loop:<br>";

$numbers = range(5, 10);

foreach ($numbers as $num) {
    echo $num . "<br>";
}
?>
