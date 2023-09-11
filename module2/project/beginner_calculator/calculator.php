<?php
function add(...$numbers) {
    return array_sum($numbers);
}

function subtract(...$numbers) {
    $result = $numbers[0];
    for ($i = 1; $i < count($numbers); $i++) {
        $result -= $numbers[$i];
    }
    return $result;
}

function multiply(...$numbers) {
    $result = 1;
    foreach ($numbers as $number) {
        $result *= $number;
    }
    return $result;
}

function divide(...$numbers) {
    $result = $numbers[0];
    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] == 0) {
            return "Cannot divide by zero.";
        }
        $result /= $numbers[$i];
    }
    return $result;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case "add":
            $result = add($num1, $num2);
            echo "<h1>$result</h1>";
            break;
        case "subtract":
            $result = subtract($num1, $num2);
            echo "<h1>$result</h1>";
            break;
        case "multiply":
            $result = multiply($num1, $num2);
            echo "<h1>$result</h1>";
            break;
        case "divide":
            $result = divide($num1, $num2);
            echo "<h1>$result</h1>";
            break;
        default:
            $result = "Invalid operation.";
            echo "<h1>$result</h1>";
    }
}
?>

<br>
<a href="index.php">Back to Home</a>
