
<?php

// Previous Semester Result

define("SEMESTER", "Previous Semester");
define("TOTAL_MARKS", 500);

$studentName = "Jugal Bosamiya";
$rollNumber = "4038";

$marks = [
    "Java" => 56,
    "Android" => 78,
    "Python" => 93,
    "PHP" => 53,
    "OS" => 78
];

$totalObtained = array_sum($marks);

$percentage = ($totalObtained / TOTAL_MARKS) * 100;

function getGrade($percentage) {
    if ($percentage >= 90) return "A+";
    elseif ($percentage >= 80) return "A";
    elseif ($percentage >= 70) return "B";
    elseif ($percentage >= 60) return "C";
    elseif ($percentage >= 50) return "D";
    else return "F";
}

$grade = getGrade($percentage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo SEMESTER; ?> Result</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
        caption {
            font-size: 1.5em;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<table>
    <caption><?php echo SEMESTER; ?> Result</caption>
    <tr>
        <th>Student Name</th>
        <td><?php echo $studentName; ?></td>
    </tr>
    <tr>
        <th>Roll Number</th>
        <td><?php echo $rollNumber; ?></td>
    </tr>
    <tr>
        <th>Subject</th>
        <th>Marks Obtained</th>
    </tr>
    <?php foreach ($marks as $subject => $score): ?>
    <tr>
        <td><?php echo $subject; ?></td>
        <td><?php echo $score; ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <th>Total Marks</th>
        <td><?php echo $totalObtained . " / " . TOTAL_MARKS; ?></td>
    </tr>
    <tr>
        <th>Percentage</th>
        <td><?php echo number_format($percentage, 2) . "%"; ?></td>
    </tr>
    <tr>
        <th>Grade</th>
        <td><?php echo $grade; ?></td>
    </tr>
</table>

</body>
</html>
