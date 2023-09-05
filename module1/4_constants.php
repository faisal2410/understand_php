<!-- Constants in PHP
Constants are similar to variables, but, as the name suggests, their values remain constant throughout the script once they're defined. This means that once a constant's value is set, it can't be changed during the execution of the script. -->

<!-- 3.1. Defining constants using define()
In PHP, constants can be defined using the define() function. The define() function takes at least two arguments: the name of the constant, and its value. Here's the basic syntax: -->

<!-- define("CONSTANT_NAME", value); -->


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


<!-- Naming:

Variables: Typically use camelCase or snake_case.
Constants: Typically use UPPERCASE, but can technically be named in any case.
Defining:

Variables: Simply use the assignment operator (=).

Constants: Use the define() function or the const keyword. -->


<!-- const ANOTHER_CONST = "I am also a constant";
Value limitation:

Variables: Can store any type of data including resources and objects.
Constants: Historically, they could only store scalar data (integer, float, string, boolean). However, PHP 5.6 introduced the possibility to have array constants. Objects and resources, however, can't be used as constant values.
That wraps up the detailed explanation on constants in PHP. If you have any more questions or want further clarification on any point, feel free to ask! -->





