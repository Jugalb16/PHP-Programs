<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
</head>
<body>
    <h2>Enter Array Values (comma separated)</h2>
    <form method="post">
        <label for="array1">Array 1:</label><br>
        <input type="text" name="array1" id="array1" required><br><br>

        <label for="array2">Array 2:</label><br>
        <input type="text" name="array2" id="array2" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get arrays from POST input and convert to PHP arrays
        $array1 = array_map('trim', explode(',', $_POST['array1']));
        $array2 = array_map('trim', explode(',', $_POST['array2']));

        // a) Print array values
        echo "<h3>a) Print the values of arrays:</h3>";
        echo "Array 1: " . implode(", ", $array1) . "<br>";
        echo "Array 2: " . implode(", ", $array2) . "<br>";

        // b) Reverse an array (Array 1)
        $reversedArray1 = array_reverse($array1);
        echo "<h3>b) Reversed Array 1:</h3>";
        echo implode(", ", $reversedArray1) . "<br>";

        // c) Merge two arrays in sorted manner
        $merged = array_merge($array1, $array2);
        sort($merged, SORT_NATURAL | SORT_FLAG_CASE);
        echo "<h3>c) Merged and sorted array:</h3>";
        echo implode(", ", $merged) . "<br>";

        // d) Add values of all elements of an array (assuming numeric values)
        function sumArray($arr) {
            $sum = 0;
            foreach ($arr as $value) {
                if (is_numeric($value)) {
                    $sum += $value;
                }
            }
            return $sum;
        }

        echo "<h3>d) Sum of elements:</h3>";
        echo "Sum of Array 1 elements: " . sumArray($array1) . "<br>";
        echo "Sum of Array 2 elements: " . sumArray($array2) . "<br>";
    }
    ?>
</body>
</html>
