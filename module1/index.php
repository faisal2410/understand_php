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









<!-- Let's define a constant: -->

 <!-- <?php
define("PI", 3.14159265359);
echo PI; // Outputs: 3.14159265359

?> -->

<!-- 
3.2. Naming conventions for constants
By convention, constants are often named in uppercase. However, it's technically possible to use lowercase or mixed case when naming constants, but using uppercase makes them easy to distinguish from regular variables. -->

<!-- <?php
define("MAX_USERS", 100);
echo MAX_USERS; // Outputs: 100

?> -->

<!-- Unlike variables, constants do not have the $ prefix. -->

<!-- 3.3. Difference between variables and constants
Mutability:

Variables: Their values can change during the execution of the script.

Constants: Once defined, their values remain the same and cannot be changed. -->

<!-- <?php
$variable = 10;
define("CONSTANT", 20);

$variable = 30;   // This is valid
// CONSTANT = 40; // This will trigger an error
?> -->


<!-- Declaration:

Variables: Use the $ prefix.

Constants: Do not use the $ prefix and are typically in uppercase. -->

<!-- <?php
$myVar = "I am a variable";
define("MY_CONST", "I am a constant");



// <!-- Scope:

// Variables: Can have a local or global scope.

// Constants: Are globally scoped, meaning they can be accessed from anywhere in the script. -->


function testFunction() {
    echo MY_CONST;   // Works because constants are globally scoped
    // echo $myVar; // Might not work if $myVar is defined outside and not passed as an argument or globalized
}
?> -->




<!-- Printing Output:
In PHP, there are mainly two ways to print or display output on the screen: echo and print. Both are used for the same purpose but they are slightly different. -->

<!-- 👉Using echo: -->
<!-- echo is more popular than print.
It doesn't return any value.
It can take multiple parameters separated by commas. -->

<!-- <?php
echo "Hello, World!";
echo "Hello", " ", "World!";  // Using multiple parameters

?> -->


<!--👉 Using print:
print is also used to print output but it always returns 1, which means it can be used in expressions.
It can only take one parameter. -->

<!-- <?php
print "Hello, World!";
?> -->


<!-- 2.👉 Concatenating Strings and Variables:
You can concatenate or join two or more strings in PHP using the . operator. -->

<!-- <?php
$firstName = "John";
$lastName = "Doe";

// Concatenate using . operator
echo $firstName . " " . $lastName;  // Outputs: John Doe
?> -->

<!--👉 Additionally, PHP also supports the shorthand .= operator to append to a string. -->

<!-- <?php
$text = "Hello";
$text .= ", World!";
echo $text;  // Outputs: Hello, World!
?> -->

<!--👉 3. Formatting Output Using Escape Characters:
Escape characters are used to represent certain special characters in strings. These characters are prefixed with a backslash \.

Some commonly used escape characters in PHP are:

\n: Newline character
\t: Tab character
\": Double quote
\': Single quote
\\: Backslash
Here's an example demonstrating the use of these escape characters: -->

<!-- <?php
echo "Hello\tWorld!\n";       // Outputs: Hello    World! (with a tab space and then moves to the next line)

echo "She said, \"Hello!\""; // Outputs: She said, "Hello!"

echo 'It\'s a beautiful day!'; // Outputs: It's a beautiful day!
?> -->

<!-- Remember, when using single-quoted strings in PHP, variables won't be parsed, and only \\ and \' are recognized as escape sequences. On the other hand, double-quoted strings recognize all the escape sequences and will parse variables as well.

I hope this helps clarify the concepts! If you have any more questions or need further examples, just let me know! -->



<!-- Here are 10 additional examples to further illustrate the concepts: -->

<!-- 1. Using echo with HTML: -->

<!-- <?php
echo "<h1>Welcome to my website!</h1>";
?> -->

<!-- 2. Using print with arithmetic operations:
Since print can return a value, it's possible to use it inside expressions: -->

<!-- <?php
$result = print 7 + 3;  // Outputs: 10 and $result will be set to 1.
echo $result;
?> -->

<!-- 3. Echoing a result of a function: -->

<!-- <?php
function greet() {
    return "Hello, User!";
}

echo greet();  // Outputs: Hello, User!
?> -->

<!-- 4. Echoing array elements: -->

<?php
$fruits = array('apple', 'banana', 'cherry');
echo $fruits[1];  // Outputs: banana
?>


<!-- 5. Using print with conditional expressions: -->

<!-- <?php
$weather = "sunny";

print ($weather == "sunny" ? "It's a sunny day!" : "It's not sunny today.");
?> -->

<!-- 6. Concatenating using curly braces:
This is useful when embedding array elements or object properties inside strings. -->

<!-- 
<?php
$name = array('first' => 'John', 'last' => 'Doe');
echo "My name is {$name['first']} {$name['last']}";

?> -->

<!-- 7. Concatenating string and numbers: -->

<!-- <?php
$age = 25;
echo "I am " . $age . " years old.";
?> -->


<!-- 8. Concatenation to form a SQL query: -->

<!-- <?php

$id = 10;
$query = "SELECT * FROM users WHERE id = " . $id;
echo $query;  // Outputs: SELECT * FROM users WHERE id = 10

?> -->


<!-- 9. Escape characters for hexadecimal and unicode: -->

<!-- <?php
echo "\x48\x65\x6C\x6C\x6F";  // Outputs: Hello (using hexadecimal values)
echo "\u{1F604}";            // Outputs: 😄 (unicode character for smiling face emoji)

?> -->









