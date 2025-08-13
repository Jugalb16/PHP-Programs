<?php
// Print maxmimum and minimum number.
$numbers = [25, 42, 17, 8, 77, 54, 3];

$maxNumber = max($numbers);

$minNumber = min($numbers);


echo "Numbers: " . implode(", ", $numbers) . "<br>";
echo "Maximum Number: " . $maxNumber . "<br>";
echo "Minimum Number: " . $minNumber . "<br>";
?>
