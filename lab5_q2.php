<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students Table</title>
</head>
<body>
    <?php
    // Array of students
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21,
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20,
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22,
        ],
    ];
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through each student and display in table rows
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>" . $student['name'] . "</td>";
                echo "<td>" . $student['program'] . "</td>";
                echo "<td>" . $student['age'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>