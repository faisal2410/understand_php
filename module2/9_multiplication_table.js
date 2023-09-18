// Below is a comprehensive PHP script that demonstrates the use of loops (for loop) and functions in PHP. This script generates a multiplication table for a given number using a custom function and a for loop.


// <?php
// // Function to generate a multiplication table
// function generateMultiplicationTable($number, $limit)
// {
//     echo "Multiplication table for $number:\n";
//     for ($i = 1; $i <= $limit; $i++) {
//         $result = $number * $i;
//         echo "$number x $i = $result\n";
//     }
// }

// // Define the number for the multiplication table
// $multiplier = 5;

// // Define the limit (how many times to multiply)
// $tableLimit = 10;

// // Call the function to generate the multiplication table
// generateMultiplicationTable($multiplier, $tableLimit);
// ?>



// In this script:

// We define a function called generateMultiplicationTable that takes two parameters: $number (the number for which we want to generate the multiplication table) and $limit (the limit for the multiplication table).

// Inside the function, we use a for loop to iterate from 1 to $limit. For each iteration, we calculate the product of $number and the current value of $i and display the result in the format "number x i = result".

// We define a variable $multiplier to specify the number for which we want to generate the multiplication table, and a variable $tableLimit to specify how many times we want to multiply.

// Finally, we call the generateMultiplicationTable function with the chosen $multiplier and $tableLimit to display the multiplication table.

// You can customize the $multiplier and $tableLimit variables to generate multiplication tables for different numbers and limits. This script demonstrates the use of functions and loops in PHP to create a reusable and organized piece of code.