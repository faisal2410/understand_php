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









