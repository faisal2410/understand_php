<!-- Arithmetic Operations in PHP
1. Addition (+)
This operator adds two numbers. -->


<!-- <?php
$a = 5;
$b = 3;

$sum = $a + $b;
echo "The sum of $a and $b is: $sum";  // Outputs: The sum of 5 and 3 is: 8
?> -->


<!-- 2. Subtraction (-)
This operator subtracts one number from another. -->


<!-- <?php
$diff = $a - $b;
echo "The difference between $a and $b is: $diff";  // Outputs: The difference between 5 and 3 is: 2
?> -->


<!-- 3. Multiplication (*)
This operator multiplies two numbers. -->

<!-- 
<?php
$prod = $a * $b;
echo "The product of $a and $b is: $prod";  // Outputs: The product of 5 and 3 is: 15
?> -->


<!-- 4. Division (/)
This operator divides one number by another. -->


<!-- <?php
$div = $a / $b;
echo "The division of $a by $b is: $div";  // Outputs: The division of 5 by 3 is: 1.6666666666667
?> -->


<!-- 5. Modulus (%)
This operator returns the remainder when one number is divided by another. -->


<!-- <?php
$mod = $a % $b;
echo "The remainder when $a is divided by $b is: $mod";  // Outputs: The remainder when 5 is divided by 3 is: 2
?> -->


<!-- Operator Precedence and Associativity
Operator precedence determines the order in which operators are evaluated. Associativity determines the order in which operators of the same precedence level are evaluated.

For example, multiplication and division have higher precedence than addition and subtraction. But if you're mixing these operations in a single expression, use parentheses to make the precedence explicit: -->


<!-- <?php
$result = 1 + 2 * 3;  // Multiplication will be evaluated first, so the result is 7
echo $result; // Outputs: 7

$resultWithParentheses = (1 + 2) * 3;  // Now addition is evaluated first, making the result 9
echo $resultWithParentheses; // Outputs: 9
?> -->

Associativity is often left-to-right for most arithmetic operators, meaning operators are evaluated from left to right. For example:


<!-- <?php
$result = 8 - 5 - 2;  // Subtraction is left associative, so the result is 1
echo $result; // Outputs: 1
?> -->

<!-- Keep in mind that understanding operator precedence and associativity is essential to ensure that expressions are evaluated as you intend, especially in complex calculations.

Always remember, when in doubt, use parentheses to clarify the order of operations! It's a great way to ensure accuracy and improve the readability of your code. -->




