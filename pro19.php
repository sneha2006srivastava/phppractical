<!DOCTYPE html>
<html>
<head>
    <title>Student Marksheet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            box-shadow: 0 0 10px #888;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>

<?php
// Sample student data
$name = "Sneha Srivastav";
$roll_no = "01";
$subjects = [
    "Maths" => 85,
    "Physics" => 78,
    "Chemistry" => 82,
    "English" => 74,
    "Computer" => 90
];

// Calculate total and percentage
$total = array_sum($subjects);
$percentage = $total / count($subjects);

// Grade logic
if ($percentage >= 90) {
    $grade = "A+";
} elseif ($percentage >= 75) {
    $grade = "A";
} elseif ($percentage >= 60) {
    $grade = "B";
} elseif ($percentage >= 50) {
    $grade = "C";
} else {
    $grade = "Fail";
}
?>

<h2>Student Marksheet</h2>

<table>
    <tr>
        <th colspan="2">Student Details</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Roll No</td>
        <td><?php echo $roll_no; ?></td>
    </tr>
    <tr>
        <th colspan="2">Subject Marks</th>
    </tr>
    <?php
    foreach ($subjects as $subject => $marks) {
        echo "<tr><td>$subject</td><td>$marks</td></tr>";
    }
    ?>
    <tr>
        <th>Total Marks</th>
        <td><?php echo $total; ?></td>
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