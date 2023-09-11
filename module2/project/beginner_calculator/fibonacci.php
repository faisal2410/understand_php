<?php
function generateFibonacciRecursive($length, &$sequence, $a = 0, $b = 1) {
    if ($length <= 0) {
        return;
    }
    $sequence[] = $a;
    generateFibonacciRecursive($length - 1, $sequence, $b, $a + $b);
}

function generateFibonacciLoop($length) {
    $sequence = [];
    $a = 0;
    $b = 1;

    while ($length > 0) {
        $sequence[] = $a;
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
        $length--;
    }

    return $sequence;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = (int)$_POST["length"];
    $recursiveSequence = [];
    $loopSequence = generateFibonacciLoop($length);
    generateFibonacciRecursive($length, $recursiveSequence);

    echo "<h3>Fibonacci Sequence (Recursive):</h3>";
    echo implode(", ", $recursiveSequence);

    echo "<h3>Fibonacci Sequence (Loop):</h3>";
    echo implode(", ", $loopSequence);
}
?>
