// A recursive function is a function that calls itself in order to solve a problem. Recursive functions are particularly useful when dealing with tasks that can be broken down into smaller, similar subtasks.

// Let's start with a simple example: calculating the factorial of a number using a recursive function. The factorial of a non-negative integer n, denoted as n!, is the product of all positive integers less than or equal to n.

// Here's how you can create a recursive function to calculate the factorial of a number in PHP:


// function factorial($n) {
//     // Base case: If $n is 0 or 1, the factorial is 1.
//     if ($n === 0 || $n === 1) {
//         return 1;
//     } else {
//         // Recursive case: Calculate factorial by calling the function with a smaller number.
//         return $n * factorial($n - 1);
//     }
// }

// // Test the factorial function
// $number = 5;
// $result = factorial($number);
// echo "Factorial of $number is $result";
// In this example, we have a function factorial that takes an integer $n as its argument. Inside the function, we have two cases:

// Base case: When $n is 0 or 1, we return 1 because the factorial of 0 or 1 is 1. This is important to prevent infinite recursion.

// Recursive case: When $n is greater than 1, we calculate the factorial by multiplying $n with the result of the factorial function called with $n - 1. This recursive call will continue until it reaches the base case.

// When you run the code with $number = 5, it will calculate the factorial of 5 by calling the factorial function recursively, and you'll get the result "Factorial of 5 is 120."

// Keep in mind that when using recursive functions, it's crucial to have a base case to stop the recursion and prevent a stack overflow error. Additionally, make sure that the input to the recursive function moves towards the base case with each recursive call to avoid infinite recursion.





