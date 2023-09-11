<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
    <style>
      <?php include "styles.css"; ?>
    </style>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="calculator.php" method="post">
        <input type="number" name="num1" placeholder="Enter number 1" required>
        <input type="number" name="num2" placeholder="Enter number 2" required>
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    <hr>
    <h2>Fibonacci Sequence</h2>
    <form action="fibonacci.php" method="post">
        <input type="number" name="length" placeholder="Enter sequence length" required>
        <button type="submit">Generate Fibonacci Sequence</button>
    </form>
</body>
</html>
