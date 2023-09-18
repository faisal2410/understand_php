// The Fibonacci series is a sequence of numbers where each number is the sum of the two preceding ones, usually starting with 0 and 1. Here's how you can do it with a loop in PHP:


// <?php
// // Function to print the Fibonacci series up to a given number of terms
// function printFibonacci($numTerms) {
//     $first = 0;
//     $second = 1;

//     // Check if the number of terms is less than or equal to 0
//     if ($numTerms <= 0) {
//         echo "Invalid input. Please enter a positive integer.";
//         return;
//     }

//     // Print the first two terms
//     echo "Fibonacci Series for $numTerms terms:\n";
//     echo "$first, $second";

//     // Loop to generate and print the rest of the terms
//     for ($i = 2; $i < $numTerms; $i++) {
//         $next = $first + $second;
//         echo ", $next";
//         $first = $second;
//         $second = $next;
//     }
// }

// // Number of terms you want to print
// $numTerms = 10; // You can change this to any positive integer

// // Call the function to print the Fibonacci series
// printFibonacci($numTerms);
// ?>



// Here's what this PHP code does:

// It defines a function called printFibonacci that takes the number of terms you want to print as a parameter.

// Inside the function, it initializes the first two terms of the Fibonacci sequence, $first and $second, as 0 and 1.

// It checks if the input $numTerms is less than or equal to 0 and displays an error message if it is.

// It then prints the first two terms.

// Using a for loop, it calculates and prints the rest of the terms in the Fibonacci sequence up to the specified number of terms.

// Finally, it calls the printFibonacci function with the desired number of terms, which you can change by modifying the $numTerms variable.

// Simply copy and paste this code into a PHP file (e.g., fibonacci.php) and run it to see the Fibonacci series printed for the specified number of terms.