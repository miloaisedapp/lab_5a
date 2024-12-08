<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <?php
    // Function to generate multiplication table
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier,
            ];
        }
        return $results;
    }

    // Call the function with multiplier 2
    $table = multiplication(2);
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Display the multiplication table
            foreach ($table as $row) {
                echo "<tr>";
                echo "<td>" . $row['no'] . "</td>";
                echo "<td>" . $row['multiplier'] . "</td>";
                echo "<td>" . $row['answer'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>