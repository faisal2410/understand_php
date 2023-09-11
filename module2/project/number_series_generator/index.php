<!-- Build a simple number series generator web application in PHP and HTML. The application should allow users to choose which type of series they want to generate - Fibonacci or Arithmetic progression series. Users should be able to enter the number of terms they wish to generate. This task will help you understand 'Different types of loops', 'Multiple Stepping in For Loops', 'Printing the Fibonacci Series with Loops', 'Declaring Functions', 'Executing function', 'Parameter' and 'Argument'. You are expected to divide the large problem into smaller functions. -->

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
    <form action="generate_series.php" method="post">
        <label>Select Series Type:</label>
        <select name="series_type">
            <option value="fibonacci">Fibonacci Series</option>
            <option value="arithmetic">Arithmetic Progression</option>
        </select><br><br>
        <label>Number of Terms:</label>
        <input type="number" name="num_terms" required><br><br>
        <input type="submit" value="Generate Series">
    </form>
</body>
</html>





