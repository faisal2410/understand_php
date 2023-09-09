<?php

// variables, constants,comments, printing, arithmetic operators, printf, conditionals, ternary operators

// ✅Example 1

$integerVar = 42;        // int
$floatVar = 3.14;        // float
$stringVar = "Hello";    // string
$boolVar = true;         // bool

// Displaying variable values
echo $integerVar .PHP_EOL ;
echo $floatVar .PHP_EOL ;
echo $stringVar .PHP_EOL ;
echo $boolVar .PHP_EOL ;  



// ✅Example 2

// $age = 25;         // Valid variable name
// $_username = "John"; // Valid variable name with underscore
// $myName123 = "Alice"; // Valid variable name with numbers
// $my_var = "✅Example";  // Valid variable name using underscores

// // $2years = 2023;     // Invalid: Variable name can't start with a number
// // $user-name = "Alex"; // Invalid: Variable name can't contain hyphens

// echo $age.PHP_EOL;
// echo $_username.PHP_EOL;
// echo $myName123.PHP_EOL;
// echo $my_var.PHP_EOL;


// ✅Example 3

// $globalVar = 100;     // Global variable

// function myFunction() {
//     $localVar = 50;   // Local variable within the function
//     global $globalVar; // Accessing global variable within the function
//     echo "Local Variable: " . $localVar . PHP_EOL;
//     echo "Global Variable inside function: " . $globalVar . PHP_EOL;
// }


// myFunction();
// // echo "Local Variable outside function: " . $localVar; // Error: $localVar is not accessible here
// echo "Global Variable outside function: " . $globalVar;



// ✅Example 4

// define("PI", 3.14159265359);
// echo PI; // Outputs: 3.14159265359




// ✅Example 5

// define("MAX_USERS", 100);
// echo MAX_USERS; // Outputs: 100




// ✅Example 6

// $variable = 10;
// define("CONSTANT", 20);

// $variable = 30;   // This is valid
// // CONSTANT = 40; // This will trigger an error




// ✅Example 7

// $myVar = "I am a variable";
// define("MY_CONST", "I am a constant");

// function testFunction() {
//     echo MY_CONST;   // Works because constants are globally scoped
//     // echo $myVar; // Might not work if $myVar is defined outside and not passed as an argument or globalized
// }

// testFunction();



// ✅Example 8

// echo "Hello, World!";
// echo "Hello", " ", "World!";  // Using multiple parameters

// ✅Example 9

// print "Hello, World!";


// ✅Example 10

// $firstName = "John";
// $lastName = "Doe";

// // Concatenate using . operator
// echo $firstName . " " . $lastName;  // Outputs: John Doe



// ✅Example 11

// $text = "Hello";
// $text .= ", World!";
// echo $text;  // Outputs: Hello, World!




// ✅Example 12

// $a = 5;
// $b = 3;

// $sum = $a + $b;
// echo "The sum of $a and $b is: $sum";  // Outputs: The sum of 5 and 3 is: 8


// $diff = $a - $b;
// echo "The difference between $a and $b is: $diff";  // Outputs: The difference between 5 and 3 is: 2


// $prod = $a * $b;
// echo "The product of $a and $b is: $prod";  // Outputs: The product of 5 and 3 is: 15


// $div = $a / $b;
// echo "The division of $a by $b is: $div";  // Outputs: The division of 5 by 3 is: 1.6666666666667


// $mod = $a % $b;
// echo "The remainder when $a is divided by $b is: $mod";  // Outputs: The remainder when 5 is divided by 3 is: 2


// ✅Example 13

/*
%d - for integers
%f - for floating-point numbers
%s - for strings
%c - for characters 
*/ 



// $intVar = 5;
// $floatVar = 3.14;
// $stringVar = "Hello";
// $charVar = 'A';

// printf("Integer: %d\n", $intVar);
// printf("Float: %f\n", $floatVar);
// printf("String: %s\n", $stringVar);
// printf("Char: %c\n", $charVar);




// ✅Example 14
// $age = 18;

// if ($age >= 18) {
//     echo "You are eligible to vote.";
// }






/*
Comparison Operators:

== : Equal to
!= : Not equal to
< : Less than
> : Greater than
<= : Less than or equal to
>= : Greater than or equal to
Here are some ✅Examples using these operators: 


*/ 



// $number = 10;

// if ($number == 10) {
//     echo "The number is 10.";
// }

// if ($number != 15) {
//     echo "The number is not 15.";
// }

// if ($number < 20) {
//     echo "The number is less than 20.";
// }

// if ($number > 5) {
//     echo "The number is greater than 5.";
// }

// if ($number <= 10) {
//     echo "The number is 10 or less.";
// }

// if ($number >= 9) {
//     echo "The number is 9 or more.";
// }


/*
 logical operators:


&& : AND
|| : OR
! : NOT

*/ 

// ✅Example 15


// $age = 20;
// $hasID = true;

// if ($age >= 18 && $hasID) {
//     echo "You can enter the club.";
// }



// ✅Example 16

// $isWeekend = true;
// $hasHoliday = false;

// if ($isWeekend || $hasHoliday) {
//     echo "You don't have to go to work.";
// }




// ✅Example 17

// $isRaining = false;

// if (!$isRaining) {
//     echo "You don't need an umbrella.";
// }




// ✅Example 18

// $age=19;

// $status = ($age < 18) ? "minor" : "adult";
// echo $status;



// ✅Example 19

// $day = 3; // Wednesday

// switch ($day) {
//     case 1:
//         echo "Monday";
//         break;
//     case 2:
//         echo "Tuesday";
//         break;
//     case 3:
//         echo "Wednesday";
//         break;
//     case 4:
//         echo "Thursday";
//         break;
//     case 5:
//         echo "Friday";
//         break;
//     case 6:
//         echo "Saturday";
//         break;
//     case 7:
//         echo "Sunday";
//         break;
//     default:
//         echo "Invalid day number!";
// }



/*
Formatting Output Using Escape Characters:
Escape characters are used to represent certain special characters in strings. These characters are prefixed with a backslash \.

Some commonly used escape characters in PHP are:

\n: Newline character
\t: Tab character
\": Double quote
\': Single quote
\\: Backslash
Here's an ✅Example demonstrating the use of these escape characters: 
*/ 

// ✅Example 20

// echo "Hello\tWorld!\n I love bangladesh";       // Outputs: Hello    World! (with a tab space and then moves to the next line)

// echo "She said, \"Hello!\""; // Outputs: She said, "Hello!"

// echo 'It\'s a beautiful day!'; // Outputs: It's a beautiful day!














