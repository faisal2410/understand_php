<!DOCTYPE html>
<html>
<head>
    <title>Number Series Generator</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>
<body>
    <h1>Number Series Generator</h1>
    
    <?php
    // Function to generate Fibonacci series
    function generateFibonacci($numTerms) {
        $series = [];
        $series[0] = 0;
        $series[1] = 1;
        for ($i = 2; $i < $numTerms; $i++) {
            $series[$i] = $series[$i - 1] + $series[$i - 2];
        }
        return $series;
    }

    // Function to generate Arithmetic Progression series
    function generateArithmetic($numTerms) {
        $series = [];
        $firstTerm = 0;
        $commonDifference = 2;
        for ($i = 0; $i < $numTerms; $i++) {
            $series[$i] = $firstTerm + ($i * $commonDifference);
        }
        return $series;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $seriesType = $_POST["series_type"];
        $numTerms = $_POST["num_terms"];

        if ($seriesType === "fibonacci") {
            $result = generateFibonacci($numTerms);
        } elseif ($seriesType === "arithmetic") {
            $result = generateArithmetic($numTerms);
        }

        echo "<h2>Generated Series:</h2>";
        echo "<ul>";
        foreach ($result as $term) {
            echo "<li>$term</li>";
        }
        echo "</ul>";
    }
    ?>

    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
