// Here are 19 coding challenges based on the concepts of PHP you provided:

// 1. Variables

// Variable Declaration and Initialization: Create two variables - one storing your name (string) and the other storing your age (int). Print them.
// Global vs. Local: Declare a global variable and a function that tries to print this global variable without using the global keyword. Then try with the global keyword.
// 2. Constants

// Constant Creation: Define a constant that stores the value of Pi (3.14159) and print it.
// Variables vs Constants: Try to change the value of the constant defined in the previous challenge. Observe the result.
// 3. Comments

// Commenting Code: Write a function with both single-line and multi-line comments explaining what the function does.
// 4. Printing Output

// Echo vs Print: Use both echo and print statements to display your favorite quote.
// String Concatenation: Concatenate two strings - "Hello" and "World", and display the result.
// Escape Characters: Print a string that includes a new line and a tab using escape characters.
// 5. Arithmetic Operations

// Basic Calculations: Accept two numbers from a user and display their sum, difference, product, and quotient.
// Modulus Operator: Input a number and display if it's even or odd using the modulus operator.
// 6. Number Systems

// Number Conversion: Convert a decimal number 255 to binary, octal, and hexadecimal.
// 7. Printf Function

// Formatted Output: Use the printf() function to print a float number with 2 decimal points.
// 8. Conditional Statements

// Simple Condition: Ask the user for their age and print whether they are a minor or an adult using the if statement.
// Logical Operators: Write a program that checks if a number is both even and greater than 10.
// 9. If-Else Statements

// Temperature Feedback: Input the current temperature and provide feedback. If it's below 20°C, say it's cold; between 20°C and 30°C, say it's pleasant; above 30°C, say it's hot.
// 10. Ternary Operator

// Simple Ternary: Convert the temperature feedback logic from challenge 15 into a single line using the ternary operator.
// 11. Nested Ternary Operators

// Advanced Ternary: Implement a simple calculator that takes 3 inputs - two numbers and an operation (+, -, *, /) and displays the result using nested ternary operators.
// 12. Switch Case Statements

// Days of the Week: Accept a number between 1 and 7 and print the corresponding day of the week using a switch-case.
// Strict vs Loose Comparison: Using a switch case, compare a string '10' with an integer 10 using both loose and strict comparisons.
// Default Case: Enhance the "Days of the Week" challenge to include a default case which handles numbers outside the range of 1-7.
// These challenges should provide a comprehensive practice over the mentioned PHP concepts. Happy coding!



// 13. Dynamic Variable Names

// Challenge: Create a string variable with a value of 'age'. Then, using this string, dynamically create another variable named 'age' that stores the value 25. Print the value of this new variable.
// 14. Constants with Arrays

// Challenge: Define a constant that holds an array of your favorite colors. Display the third color in the list.
// 15. Advanced String Formatting with Printf

// Challenge: Use the printf() function to display a formatted string containing a person's first name, last name, and age, ensuring that the age is right-aligned and occupies 3 spaces.
// 16. Nested If-Else for Grades

// Challenge: Accept a student's score (0 to 100) and provide a grade:
// A (>=90)
// B (>=75 and <90)
// C (>=50 and <75)
// D (<50)
// 17. Ternary for Login Feedback

// Challenge: Simulate a login mechanism. If a user's username is 'admin' and password is 'password123', display 'Welcome Admin'. For incorrect details, use a ternary operator to display 'Invalid Password' if the username is correct, otherwise display 'Invalid Username'.
// 18. Complex Nested Ternary

// Challenge: Given three integers, use a nested ternary operator to determine and display the largest one.
// 19. Enhanced Switch Case with Functions

// Challenge: Create a calculator function that accepts two numbers and an operation (add, subtract, multiply, divide) as arguments. Use a switch-case inside the function to perform the operation and return the result. The function should handle invalid operations gracefully.
// I hope these challenges further enhance your understanding and mastery of PHP.



// Solutions :

// 1. Variables

// Variable Declaration and Initialization
// $name = "John";
// $age = 30;
// echo "Name: $name, Age: $age\n";

// // Global vs. Local
// $globalVar = "I am a global variable";

// function displayVar() {
//     // This won't work as we are not using the 'global' keyword
//     // echo $globalVar;

//     global $globalVar;
//     echo $globalVar;
// }

// displayVar();

// // 2. Constants

// // Constant Creation
// define("PI", 3.14159);
// echo PI . "\n";

// // Variables vs Constants
// // This will result in an error since constants can't be redefined
// // PI = 3.14;

// // 3. Comments

// // Commenting Code
// function add($a, $b) {
//     // This function adds two numbers
//     /* 
//     Multi-line comment:
//     It takes two parameters:
//     a - First number
//     b - Second number
//     */
//     return $a + $b;
// }

// // 4. Printing Output

// // Echo vs Print
// echo "Life is what happens when you're busy making other plans.\n";
// print "Life is what happens when you're busy making other plans.\n";

// // String Concatenation
// echo "Hello " . "World" . "\n";

// // Escape Characters
// echo "This is a new line.\n\tAnd this is a tab.\n";

// // 5. Arithmetic Operations

// // Basic Calculations
// $number1 = 10; // Sample input
// $number2 = 20; // Sample input
// echo "Sum: " . ($number1 + $number2) . "\n";
// echo "Difference: " . ($number1 - $number2) . "\n";
// echo "Product: " . ($number1 * $number2) . "\n";
// echo "Quotient: " . ($number1 / $number2) . "\n";

// // Modulus Operator
// $number = 5; // Sample input
// echo ($number % 2 == 0) ? "Even" : "Odd";

// // 6. Number Systems

// // Number Conversion
// $decimal = 255;
// echo "Binary: " . decbin($decimal) . "\n";
// echo "Octal: " . decoct($decimal) . "\n";
// echo "Hexadecimal: " . dechex($decimal) . "\n";

// // 7. Printf Function

// // Formatted Output
// $floatNumber = 10.456789; // Sample input
// printf("%.2f\n", $floatNumber);

// // 8. Conditional Statements

// // Simple Condition
// $userAge = 18; // Sample input
// if ($userAge < 18) {
//     echo "You are a minor.\n";
// } else {
//     echo "You are an adult.\n";
// }

// // Logical Operators
// $number = 15; // Sample input
// if ($number % 2 == 0 && $number > 10) {
//     echo "The number is even and greater than 10.\n";
// } else {
//     echo "The number does not meet the criteria.\n";
// }

// // 9. If-Else Statements

// // Temperature Feedback
// $temperature = 25; // Sample input
// if ($temperature < 20) {
//     echo "It's cold.\n";
// } elseif ($temperature >= 20 && $temperature <= 30) {
//     echo "It's pleasant.\n";
// } else {
//     echo "It's hot.\n";
// }

// // 10. Ternary Operator

// // Simple Ternary
// echo ($temperature < 20) ? "It's cold." : (($temperature <= 30) ? "It's pleasant." : "It's hot.");





// 11. Nested Ternary Operators

// $num1 = 10;
// $num2 = 20;
// $operation = '+';  // Sample operation

// $result = ($operation == '+') ? $num1 + $num2 : 
//           (($operation == '-') ? $num1 - $num2 : 
//           (($operation == '*') ? $num1 * $num2 : 
//           (($operation == '/') ? $num1 / $num2 : "Invalid Operation")));

// echo "Result: $result\n";

// // 12. Switch Case Statements

// // Days of the Week
// $dayNumber = 5;  // Sample number

// switch($dayNumber) {
//     case 1:
//         echo "Monday\n";
//         break;
//     case 2:
//         echo "Tuesday\n";
//         break;
//     case 3:
//         echo "Wednesday\n";
//         break;
//     case 4:
//         echo "Thursday\n";
//         break;
//     case 5:
//         echo "Friday\n";
//         break;
//     case 6:
//         echo "Saturday\n";
//         break;
//     case 7:
//         echo "Sunday\n";
//         break;
//     default:
//         echo "Invalid number\n";
// }

// // Strict vs Loose Comparison
// $value = '10';

// switch(true) {
//     case ($value == 10):
//         echo "Loose match\n";
//         break;
//     case ($value === 10):
//         echo "Strict match\n";
//         break;
//     default:
//         echo "No match\n";
// }

// // 13. Dynamic Variable Names

// $stringVariable = 'age';
// $$stringVariable = 25; // Creates a variable named $age
// echo $age . "\n";

// // 14. Constants with Arrays

// define("COLORS", ["Red", "Blue", "Green", "Yellow"]);
// echo COLORS[2] . "\n";

// // 15. Advanced String Formatting with Printf

// $firstName = "John";
// $lastName = "Doe";
// $age = 27;
// printf("Name: %s %s, Age: %3d\n", $firstName, $lastName, $age);

// // 16. Nested If-Else for Grades

// $score = 85;

// if ($score >= 90) {
//     echo "Grade: A\n";
// } elseif ($score >= 75) {
//     echo "Grade: B\n";
// } elseif ($score >= 50) {
//     echo "Grade: C\n";
// } else {
//     echo "Grade: D\n";
// }

// // 17. Ternary for Login Feedback

// $username = "admin";
// $password = "password123";

// $message = ($username == "admin") ? 
//           (($password == "password123") ? "Welcome Admin" : "Invalid Password") 
//           : "Invalid Username";
// echo $message . "\n";

// // 18. Complex Nested Ternary

// $a = 5;
// $b = 15;
// $c = 10;

// $largest = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);
// echo "Largest: $largest\n";

// // 19. Enhanced Switch Case with Functions

// function calculator($num1, $num2, $operation) {
//     switch($operation) {
//         case "add":
//             return $num1 + $num2;
//         case "subtract":
//             return $num1 - $num2;
//         case "multiply":
//             return $num1 * $num2;
//         case "divide":
//             if($num2 == 0) {
//                 return "Division by zero is not allowed.";
//             }
//             return $num1 / $num2;
//         default:
//             return "Invalid operation.";
//     }
// }

// echo calculator(10, 5, "add");
