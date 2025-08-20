<!DOCTYPE html>
<html>
<head>
    <title>PHP Operators Demo</title>
</head>
<body>

<h2>Enter Two Numbers:</h2>

<form method="post" action="">
    Number 1: <input type="text" name="num1" required><br><br>
    Number 2: <input type="text" name="num2" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (is_numeric($num1) && is_numeric($num2)) {
        echo "<h3>Results:</h3>";
        echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
        echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
        echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
        
        if ($num2 != 0) {
            echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
            echo "$num1 % $num2 = " . ($num1 % $num2) . "<br>";
        } else {
            echo "Division and modulus by zero are not allowed.<br>";
        }
    } else {
        echo "Please enter valid numbers!";
    }
}
?>

</body>
</html>
