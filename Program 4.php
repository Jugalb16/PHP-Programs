<!DOCTYPE html>
<html>
<head>
    <title>Current Month Using if..else & switch</title>
</head>
<body>

<h2>Current Month using if..else and switch case</h2>

<?php
// Print current month
$monthNum = date('n'); 

echo "<h3>Using if..else:</h3>";
if ($monthNum == 1) {
    echo "January";
} elseif ($monthNum == 2) {
    echo "February";
} elseif ($monthNum == 3) {
    echo "March";
} elseif ($monthNum == 4) {
    echo "April";
} elseif ($monthNum == 5) {
    echo "May";
} elseif ($monthNum == 6) {
    echo "June";
} elseif ($monthNum == 7) {
    echo "July";
} elseif ($monthNum == 8) {
    echo "August";
} elseif ($monthNum == 9) {
    echo "September";
} elseif ($monthNum == 10) {
    echo "October";
} elseif ($monthNum == 11) {
    echo "November";
} else {
    echo "December";
}

echo "<h3>Using switch case:</h3>";
switch ($monthNum) {
    case 1:
        echo "January";
        break;
    case 2:
        echo "February";
        break;
    case 3:
        echo "March";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "June";
        break;
    case 7:
        echo "July";
        break;
    case 8:
        echo "August";
        break;
    case 9:
        echo "September";
        break;
    case 10:
        echo "October";
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "December";
        break;
    default:
        echo "Invalid month";
}
?>

</body>
</html>
