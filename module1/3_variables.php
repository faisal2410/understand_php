<!-- 👉Introduction to Variables and Data Types
In PHP, variables are used to store and manipulate data. Each variable has a name and a data type that determines the kind of value it can hold. Here are the basic data types: int (integer), float (floating-point), string, and bool (boolean). -->

<!--✅ Example:1 -->

<!-- <?php
// 👉Declaring variables and assigning values
$integerVar = 42;        // int
$floatVar = 3.14;        // float
$stringVar = "Hello";    // string
$boolVar = true;         // bool

// Displaying variable values
echo $integerVar . "<br>";
echo $floatVar . "<br>";
echo $stringVar . "<br>";
echo $boolVar . "<br>";  // Outputs 1 for true, nothing for false
?> -->


<!-- 👉Variable Naming Conventions and Rules
Variable names must start with a dollar sign ($) followed by letters, numbers, or underscores. They are case-sensitive, meaning $myVar and $MyVar are treated as different variables. -->

<!--✅ Example:2 -->

<!-- <?php
$age = 25;         // Valid variable name
$_username = "John"; // Valid variable name with underscore
$myName123 = "Alice"; // Valid variable name with numbers
$my_var = "example";  // Valid variable name using underscores

// $2years = 2023;     // Invalid: Variable name can't start with a number
// $user-name = "Alex"; // Invalid: Variable name can't contain hyphens

echo $age."<br>";
echo $_username."<br>";
echo $myName123."<br>";
echo $my_var."<br>";
?> -->



<!-- 
Variable Scope (Local and Global)
Variable scope refers to where a variable is accessible and usable within your code. PHP has two main types of variable scope: local and global. -->

<!--✅ Example:3 -->

<!-- <?php
$globalVar = 100;     // Global variable

function myFunction() {
    $localVar = 50;   // Local variable within the function
    global $globalVar; // Accessing global variable within the function
    echo "Local Variable: " . $localVar . "<br>";
    echo "Global Variable inside function: " . $globalVar . "<br>";
}


myFunction();
// echo "Local Variable outside function: " . $localVar; // Error: $localVar is not accessible here
echo "Global Variable outside function: " . $globalVar;
?> -->



<!-- In this example, the $globalVar is accessible both inside and outside the function due to its global scope. However, the $localVar is only accessible within the function where it's defined.

Remember that using global variables should be minimized for better code organization and maintainability. It's often better to pass variables as arguments to functions.

Feel free to experiment with these examples, modify variable names, and explore the impact of scope on variables. Practice is key to mastering these concepts! -->





<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->


<!-- Here are 10 additional code examples that build upon the topics we've discussed: -->

<!-- Example 1: Mixing Data Types -->

<!-- <?php
$quantity = 5;
$price = 9.99;
$productName = "Widget";
$isAvailable = true;

echo "$quantity $productName available at $$price each.<br>";
echo "Is it available? " . ($isAvailable ? "Yes" : "No") . "<br>";
?> -->


<!-- Example 2: Variable Names and Rules -->

<!-- <?php
$userAge = 28;      // Valid variable name with camelCase
$fullName = "Jane"; // Valid variable name with camelCase
$city_name = "NY";  // Valid variable name with underscores
$_productID = 123;  // Valid variable name starting with an underscore

// $1stPlace = "Gold"; // Invalid: Variable name can't start with a number
// $user-age = 30;     // Invalid: Variable name can't contain hyphens
?> -->


<!-- Example 3: Modifying Variables -->

<!-- <?php
$counter = 10;
$counter = $counter + 5; // Incrementing counter
$counter++;             // Shorter way to increment
$counter += 3;          // Incrementing with addition

echo "Counter: $counter<br>";
?> -->


<!-- Example 4: Variable Scope (Global) -->

<!-- <?php
$globalVar = "I'm global!";

function printGlobal() {
    global $globalVar;
    echo "Inside function: $globalVar<br>";
}

printGlobal();
echo "Outside function: $globalVar<br>";
?> -->


<!-- Example 5: Variable Scope (Local) -->

<!-- <?php
function localScopeExample() {
    $localVar = "I'm local!";
    echo "Inside function: $localVar<br>";
}

localScopeExample();
// echo "Outside function: $localVar"; // Error: $localVar is not accessible here
?> -->


<!-- Example 6: Data Type Conversion -->

<!-- <?php
$age = "25";          // String
$convertedAge = (int) $age; // Convert to integer
$height = "5.9";      // String
$convertedHeight = (float) $height; // Convert to float

echo "Converted Age: $convertedAge (type: " . gettype($convertedAge) . ")<br>";
echo "Converted Height: $convertedHeight (type: " . gettype($convertedHeight) . ")<br>";
?> -->

<!-- Example 7: Concatenation with Variables -->

<!-- <?php
$firstName = "Alice";
$lastName = "Smith";
$fullName = $firstName . " " . $lastName;

echo "Full Name: $fullName<br>";
?> -->

<!-- Example 8: Changing Variable Value -->

<!-- <?php
$temperature = 25;
$temperature = $temperature + 10; // Increasing temperature
$temperature -= 5;                // Decreasing temperature

echo "Temperature: $temperature<br>";
?> -->

<!-- Example 9: Variable Scope (Global and Local) -->

<!-- <?php
$globalVar = "Global Variable";

function localScope() {
    $localVar = "Local Variable";
    global $globalVar;
    echo "Inside function: $globalVar and $localVar<br>";
}

localScope();
echo "Outside function: $globalVar<br>";
?> -->


<!-- Example 10: Complex Variable Names -->

<!-- <?php
$studentInfo = array("name" => "Alex", "age" => 22, "score" => 85);
echo "Name: " . $studentInfo["name"] . "<br>";
echo "Age: " . $studentInfo["age"] . "<br>";
echo "Score: " . $studentInfo["score"] . "<br>";
?> -->


<!-- Feel free to run and modify these examples to deepen your understanding of PHP variables, data types, naming conventions, and variable scope. Experimentation is a great way to solidify your knowledge! -->


<!-- ******************************************************** -->

<!-- 👉Coding Challenge 1: Basic Arithmetic Calculator
Create a PHP script that takes two integer inputs and performs addition, subtraction, multiplication, and division operations on them. Display the results.

👉Coding Challenge 2: Temperature Conversion
Write a PHP program that converts a temperature in Celsius to Fahrenheit. Allow the user to input the Celsius temperature and display the corresponding Fahrenheit temperature.

👉Coding Challenge 3: String Manipulation
Create a script that takes a user's first name and last name as input and then generates a username in the format "firstinitial_lastname". Display the generated username.

👉Coding Challenge 4: Even or Odd
Build a PHP program that prompts the user to enter a number and determines whether it's even or odd. Display an appropriate message.

👉Coding Challenge 5: Currency Converter
Develop a script that converts an amount in US dollars to euros and pounds. Allow the user to input the amount and display the conversions.

👉Coding Challenge 6: Palindrome Checker
Write a PHP function that checks if a given string is a palindrome (reads the same forwards and backwards). Test it with various strings.

👉Coding Challenge 7: Local and Global Variables
Create a script with both a global variable and a function that uses a local variable. Demonstrate how the function can access the global variable and modify it.

👉Coding Challenge 8: BMI Calculator
Build a BMI (Body Mass Index) calculator. Ask the user for their weight in kilograms and height in meters. Calculate and display their BMI along with a message indicating their health status.

👉Coding Challenge 9: Temperature Classification
Write a program that takes a temperature in Celsius as input and classifies it as hot, warm, cool, or cold based on certain temperature ranges.

👉Coding Challenge 10: Data Type Conversion
Design a script that converts a given string to a floating-point number and then calculates its square root. Display the result with appropriate formatting.

Feel free to customize and expand these challenges as you see fit. Each challenge will help you practice and reinforce your understanding of PHP variables, data types, naming conventions, and variable scope. Good luck, and have fun coding!


 -->

 <!-- 🎁✅Solution  -->


 <!-- Coding Challenge 1: Basic Arithmetic Calculator -->

<!-- <?php
$number1 = 10;
$number2 = 5;

$sum = $number1 + $number2;
$subtraction = $number1 - $number2;
$multiplication = $number1 * $number2;
$division = $number1 / $number2;

echo "Sum: $sum<br>";
echo "Subtraction: $subtraction<br>";
echo "Multiplication: $multiplication<br>";
echo "Division: $division<br>";
?> -->


<!-- Coding Challenge 2: Temperature Conversion -->

<!-- 
    <?php
$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;

echo "Celsius:". $celsius."°C"."<br>";
echo "Fahrenheit:". $fahrenheit."°F"."<br>";
?>  -->


<!-- Coding Challenge 3: String Manipulation -->

<!-- <?php
$firstName = "John";
$lastName = "Doe";

$username = strtolower(substr($firstName, 0, 1)) . "_" . strtolower($lastName);

echo "Generated Username: $username<br>";
?> -->


<!-- Coding Challenge 4: Even or Odd -->

<!-- <?php
$number = 15;

if ($number % 2 == 0) {
    echo "$number is even.<br>";
} else {
    echo "$number is odd.<br>";
}
?> -->


<!-- Coding Challenge 5: Currency Converter -->

<!-- <?php
$usDollars = 100;
$euroRate = 0.85;
$poundRate = 0.72;

$euros = $usDollars * $euroRate;
$pounds = $usDollars * $poundRate;

echo "$usDollars USD is approximately $euros EUR and $pounds GBP.<br>";
?> -->


<!-- Coding Challenge 6: Palindrome Checker -->

<!-- <?php
function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str));
    return $str === strrev($str);
}

$string = "racecar";
if (isPalindrome($string)) {
    echo "$string is a palindrome.<br>";
} else {
    echo "$string is not a palindrome.<br>";
}
?> -->


<!-- Coding Challenge 7: Local and Global Variables -->

<!-- <?php
$globalVar = "I'm global!";

function modifyGlobal() {
    global $globalVar;
    $globalVar = "Modified global variable";
}

echo "Before function: $globalVar<br>";
modifyGlobal();
echo "After function: $globalVar<br>";
?> -->


<!-- Coding Challenge 8: BMI Calculator -->

<!-- <?php
$weightKg = 70;
$heightM = 1.75;

$bmi = $weightKg / ($heightM * $heightM);
$status = "";

if ($bmi < 18.5) {
    $status = "underweight";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $status = "normal weight";
} elseif ($bmi >= 25 && $bmi < 29.9) {
    $status = "overweight";
} else {
    $status = "obese";
}

echo "Your BMI is: $bmi<br>";
echo "Status: $status<br>";
?> -->


<!-- Coding Challenge 9: Temperature Classification -->

<!-- <?php
$celsiusTemp = 28;
$classification = "";

if ($celsiusTemp >= 30) {
    $classification = "hot";
} elseif ($celsiusTemp >= 20 && $celsiusTemp < 30) {
    $classification = "warm";
} elseif ($celsiusTemp >= 10 && $celsiusTemp < 20) {
    $classification = "cool";
} else {
    $classification = "cold";
}

echo "Temperature: ".$celsiusTemp."°C"."<br>";
echo "Classification: ".$classification."<br>";
?> -->


<!-- Coding Challenge 10: Data Type Conversion -->

<!-- <?php
$stringNumber = "49.5";
$floatNumber = (float) $stringNumber;
$squareRoot = sqrt($floatNumber);

echo "Original Number: $stringNumber<br>";
echo "Converted to Float: $floatNumber<br>";
echo "Square Root: $squareRoot<br>";
?> -->


<!-- Feel free to copy and run each of these code snippets to see the results and understand how the challenges are being solved. This hands-on practice will help solidify your understanding of PHP concepts. -->



<!-- 👉🎁Let's explore how these PHP concepts are used in real-world scenarios:

✅Real-World Example 1: E-Commerce Website
Concepts: Variables, Data Types, String Manipulation

Example: In an e-commerce website, when a user adds a product to their cart, the product details (such as name, price, and quantity) are stored in variables. These variables are used to calculate the total cost of the items in the cart. Additionally, string manipulation is used to format the product names and display them on the checkout page.

✅Real-World Example 2: User Authentication System
Concepts: Variables, Data Types, Conditional Statements

Example: In a user authentication system, user input (such as username and password) is stored in variables. These variables are then used to check against a database to determine if the user's credentials are valid. Conditional statements are used to verify if the entered password matches the stored password, allowing the user to log in if the credentials are correct.

✅Real-World Example 3: Content Management System (CMS)
Concepts: Variables, Data Types, String Manipulation, Database Integration

Example: In a CMS, when a user creates a new blog post, the post's title, content, author, and publication date are stored in variables. These variables are used to insert the post's data into a database for later retrieval. String manipulation may be used to sanitize and format the user's input to prevent security vulnerabilities.

✅Real-World Example 4: Weather App
Concepts: Variables, Data Types, Conditional Statements

Example: In a weather app, the app may receive temperature data from an external source. The temperature is stored in a variable, and conditional statements are used to determine and display weather conditions (such as "sunny," "cloudy," or "rainy") based on specific temperature ranges.

✅Real-World Example 5: Online Survey System
Concepts: Variables, Data Types, Arithmetic Operations

Example: In an online survey system, survey responses are collected as numerical values. Variables store the number of responses for each option in a multiple-choice question. Arithmetic operations are used to calculate percentages and create visual representations of survey results, such as pie charts or bar graphs.

✅Real-World Example 6: Blog Comments System
Concepts: Variables, Data Types, Database Integration

Example: In a blog comments system, user-submitted comments are stored in variables before being inserted into a database. The variables store information such as the commenter's name, email, comment content, and the date and time of submission. This data is then displayed on the blog post for other users to read.

These real-world examples illustrate how PHP concepts like variables, data types, conditional statements, and database integration are crucial in developing various types of web applications. By understanding and applying these concepts, you can build dynamic and interactive web solutions that cater to different user needs and scenarios.


 -->


 <!-- Quiz 1:
Question: What is the result of the following code snippet? -->

<!-- 
$x = 5;
$y = "10";
$result = $x + $y;
echo $result;
Options:
a) 510
b) 15
c) 105
d) 15 (Notice: The string "10" is automatically converted to an integer when used in a mathematical operation.)

Correct Answer: b) 15

Quiz 2:
Question: Which variable naming convention is commonly used in PHP?

Options:
a) CamelCase
b) PascalCase
c) snake_case
d) kebab-case

Correct Answer: c) snake_case

Quiz 3:
Question: What does the modulus operator (%) do?

Options:
a) Returns the integer quotient of division
b) Returns the remainder of division
c) Performs multiplication
d) Performs addition

Correct Answer: b) Returns the remainder of division

Quiz 4:
Question: In PHP, what's the data type of the result of the expression 10 / 3?

Options:
a) int
b) float
c) string
d) bool

Correct Answer: b) float

Quiz 5:
Question: What will the following code output?


$num = "5";
if ($num == 5) {
    echo "Equal";
} else {
    echo "Not Equal";
}
Options:
a) Equal
b) Not Equal

Correct Answer: a) Equal

Quiz 6:
Question: What is the primary purpose of the global keyword in PHP?

Options:
a) To declare a global variable
b) To make a variable accessible within a function
c) To define a constant
d) To create a session variable

Correct Answer: b) To make a variable accessible within a function

Quiz 7:
Question: Which PHP function is used to calculate the length of a string?

Options:
a) strlen()
b) length()
c) strlength()
d) string_length()

Correct Answer: a) strlen()

Quiz 8:
Question: What is the result of the following code snippet?


$x = 10;
$y = 20;
$result = ($x > $y) ? "Greater" : "Lesser";
echo $result;
Options:
a) Greater
b) Lesser
c) 10
d) 20

Correct Answer: b) Lesser

Quiz 9:
Question: What does the array() function create in PHP?

Options:
a) A string
b) An integer
c) A boolean
d) An array

Correct Answer: d) An array

Quiz 10:
Question: Which PHP function is used to convert a string to uppercase?

Options:
a) str_to_upper()
b) strtoupper()
c) string_upper()
d) toUpperCase()

Correct Answer: b) strtoupper()

Feel free to use these quiz questions to test your understanding of PHP concepts. The correct answers are provided, so you can review and check your knowledge.




 -->
