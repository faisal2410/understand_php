<!-- Create a PHP script that performs mathematical computations on an unlimited user-provided list of numbers. The script should be able to perform operations like addition, multiplication and finding the maximum and minimum number in the list. The numbers list should be provided through an HTML form. Make use of 'Default parameter', 'Type hinting', 'Accepting Unlimited Arguments in Functions' and 'Variable Scope in PHP Function'. Also, incorporate the use of 'Continue and break between loops' in the script where necessary. -->


<?php
    function calculate($numbers, $operation = 'add') {
        $numbers = array_map('trim', explode(',', $numbers));
        $result = 0;

        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                continue; // Skip non-numeric values
            }

            switch ($operation) {
                case 'add':
                    $result += $number;
                    break;
                case 'multiply':
                    $result *= $number;
                    break;
                case 'max':
                    $result = ($result < $number) ? $number : $result;
                    break;
                case 'min':
                    $result = ($result > $number) ? $number : $result;
                    break;
            }
        }

        return $result;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['numbers']) && is_string($_POST['numbers'])) {
            $numbers = $_POST['numbers'];
            $operation = $_POST['operation'];

            $result = calculate($numbers, $operation);
        } else {
            $result = 'Invalid input';
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Operations</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>
<body>
    <h1>Math Operations</h1>
    <form method="post">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" id="numbers" name="numbers" required><br>

        <label for="operation">Select operation:</label>
        <select name="operation" id="operation">
            <option value="add">Addition</option>
            <option value="multiply">Multiplication</option>
            <option value="max">Maximum</option>
            <option value="min">Minimum</option>
        </select><br>

        <input type="submit" value="Calculate">
    </form>

    <?php if (isset($result)): ?>
    <h2>Result:</h2>
    <p><?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>
