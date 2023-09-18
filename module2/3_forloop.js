//👉 PHP for Loop Syntax

// The general syntax for a for loop in PHP is as follows:


//✅ for (initialize; condition; iteration) {
//     // code to be executed
// }
// Initialize: This is where you set your loop counter to its initial value.
// Condition: This is a Boolean expression that the PHP engine checks before each iteration of the loop. If this expression evaluates to true, the loop continues; if it evaluates to false, the loop ends.
// Iteration: This is where you define how your loop counter should be modified after each iteration of the loop.
// PHP for Loop Examples


//✅ Example 1: Simple for Loop
// Here is a simple example of a for loop that prints numbers from 1 to 10:


// for ($i = 1; $i <= 10; $i++) {
//     echo $i . "<br>";
// }


// In this loop:

// We initialize the variable $i to 1.
// We specify the condition $i <= 10, so the loop will continue as long as $i is less than or equal to 10.
// We increase the value of $i by 1 each time the loop iterates, using the ++ operator (which is a shorthand for $i = $i + 1).


// ✅Example 2: Looping Through an Array
// Here we will loop through each element in an array and print it:


// $array = array("apple", "banana", "cherry", "date", "elderberry");

// for ($i = 0; $i < count($array); $i++) {
//     echo $array[$i] . "<br>";
// }


// In this loop:

// We initialize the variable $i to 0 because arrays in PHP are zero-indexed, meaning that the first element in the array has an index of 0.
// We use the count() function to get the number of elements in the array, and continue the loop as long as $i is less than the number of elements in the array.
// We use the $i variable to access each element in the array using its index.


// ✅Example 3: Skipping Iterations with continue
// In this example, we'll use a for loop to print numbers from 1 to 10, but we'll skip even numbers using a continue statement:


// for ($i = 1; $i <= 10; $i++) {
//     if ($i % 2 == 0) {
//         continue;
//     }
//     echo $i . "<br>";
// }


// In this loop:

// We use an if statement and the modulus operator (%) to check if $i is even. If it is, we use the continue statement to skip the rest of the current iteration and move to the next iteration of the loop.
// If $i is not even, we print its value.
// I hope this provides a clear introduction to for loops in PHP! Try creating your own for loops to further understand how they work. Let me know if you have any questions.






//✅ Example 1: Multiplication Table
// Creating a multiplication table using nested for loops.


// echo "<table border='1'>";
// for ($i = 1; $i <= 10; $i++) {
//     echo "<tr>";
//     for ($j = 1; $j <= 10; $j++) {
//         echo "<td>" . $i * $j . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";


//✅ Example 2: Reversing an Array
// Using a for loop to reverse the elements of an array.


// $arr = [1, 2, 3, 4, 5];
// $reversedArr = [];

// for ($i = count($arr) - 1; $i >= 0; $i--) {
//     $reversedArr[] = $arr[$i];
// }

// print_r($reversedArr);

// ✅Example 3: Fibonacci Series
// Generating the first 10 numbers in the Fibonacci series using a for loop.


// $a = 0;
// $b = 1;

// echo "$a, $b";

// for ($i = 1; $i <= 8; $i++) {
//     $temp = $a;
//     $a = $b;
//     $b = $temp + $b;
//     echo ", $b";
// }

//✅ Example 4: Factorial
// Calculating the factorial of a number using a for loop.


// $number = 5;
// $factorial = 1;

// for ($i = 1; $i <= $number; $i++) {
//     $factorial *= $i;
// }

// echo "The factorial of $number is $factorial.";


// ✅Example 5: Sum of Array Elements
// Using a for loop to find the sum of all elements in an array.


// $arr = [1, 2, 3, 4, 5];
// $sum = 0;

// for ($i = 0; $i < count($arr); $i++) {
//     $sum += $arr[$i];
// }

// echo "The sum of the array elements is $sum.";


// ✅Example 6: Creating an HTML List from an Array
// Using a for loop to create an HTML list from an array.

// php
// Copy code
// $arr = ['Apple', 'Banana', 'Cherry'];
// echo "<ul>";
// for ($i = 0; $i < count($arr); $i++) {
//     echo "<li>" . $arr[$i] . "</li>";
// }
// echo "</ul>";

//✅ Example 7: Prime Numbers
// Using a for loop to find and display the first N prime numbers.


// $n = 10;
// $count = 0;
// $num = 2;

// while ($count < $n){
//   $div_count=0;

//   for ($i = 1; $i <= $num; $i++){
//       if (($num % $i) == 0) {
//           $div_count++;
//       }
//   }

//   if ($div_count < 3) {
//       echo $num . ", ";
//       $count = $count + 1;
//   }
//   $num = $num + 1;
// }

// ✅Example 8: Building a Pyramid Pattern
// Using a for loop to build a pyramid pattern with asterisks (*).


// $height = 5;

// for ($i = 1; $i <= $height; $i++) {
//     echo str_repeat(' ', $height - $i);
//     echo str_repeat('*', 2 * $i - 1);
//     echo "<br/>";
// }


// ✅Example 9: Display Array Keys and Values
// Using a for loop to display the keys and values of an associative array.

// php
// Copy code
// $arr = ["name" => "Alice", "age" => 25, "city" => "New York"];
// $keys = array_keys($arr);

// for ($i = 0; $i < count($arr); $i++) {
//     echo $keys[$i] . ": " . $arr[$keys[$i]] . "<br/>";
// }


//✅ Example 10: Calculating the Exponential of a Number
// Using a for loop to calculate the exponential of a number (n^x).


// $n = 2;
// $x = 5;
// $result = 1;

// for ($i = 0; $i < $x; $i++) {
//     $result *= $n;
// }

// echo "$n raised to the power $x is: $result.";

// Each of these examples illustrates a different application of for loops in PHP. They demonstrate various operations such as arithmetic calculations, working with arrays, and generating HTML output. You can run each of these scripts in a PHP environment to see them in action and better understand how for loops work. Let me know if you have any questions about any of the examples!

// ✅Example 1: Generating Dynamic Menu Items
// In a web application, dynamically generating a navigation menu from a database or array.


// $menuItems = ['Home', 'About Us', 'Services', 'Contact Us'];

// echo "<ul>";
// for ($i = 0; $i < count($menuItems); $i++) {
//     echo "<li><a href='#'>{$menuItems[$i]}</a></li>";
// }
// echo "</ul>";


// ✅Example 2: Pagination
// Implementing pagination in a PHP web application to divide content into several pages.


// $totalPages = 50;
// $currentPage = 1;

// echo "<div class='pagination'>";
// for ($i = 1; $i <= $totalPages; $i++) {
//     $class = $i == $currentPage ? "active" : "";
//     echo "<a class='$class' href='?page=$i'>$i</a>";
// }
// echo "</div>";

// ✅Example 3: Generating Form Fields Dynamically
// Creating a form with a dynamic number of input fields based on user input or configuration settings.


// $fieldCount = 5;

// for ($i = 0; $i < $fieldCount; $i++) {
//     echo "<input type='text' name='field$i' /><br />";
// }

//✅ Example 4: Image Gallery
// Displaying a gallery of images by looping through an array of image URLs.


// $imageUrls = [
//     'path/to/image1.jpg',
//     'path/to/image2.jpg',
//     'path/to/image3.jpg'
// ];

// echo "<div class='gallery'>";
// for ($i = 0; $i < count($imageUrls); $i++) {
//     echo "<img src='{$imageUrls[$i]}' alt='Image $i' />";
// }
// echo "</div>";

// ✅Example 5: Outputting a Calendar
// Creating a calendar where you loop through the days of the month to output a visual calendar.


// $daysInMonth = date('t');
// echo "<table class='calendar'>";
// for ($i = 1; $i <= $daysInMonth; $i++) {
//     echo "<td>$i</td>";
//     if ($i % 7 == 0) {
//         echo "</tr><tr>";
//     }
// }
// echo "</table>";

// ✅Example 6: Exporting Data to CSV
// Looping through a database result set to export data to a CSV file.


// $data = [
//     ['Alice', '28', 'New York'],
//     ['Bob', '24', 'Los Angeles'],
// ];

// $fp = fopen('file.csv', 'w');

// for ($i = 0; $i < count($data); $i++) {
//     fputcsv($fp, $data[$i]);
// }

// fclose($fp);

// ✅Example 7: Creating a Tag Cloud
// Building a tag cloud from an array of tags, where the font size of each tag is determined by its frequency of occurrence.


// $tags = ['PHP', 'HTML', 'CSS', 'JavaScript', 'PHP', 'HTML'];

// $tagCounts = array_count_values($tags);

// echo "<div class='tag-cloud'>";
// foreach ($tagCounts as $tag => $count) {
//     $fontSize = 10 + $count * 5;
//     echo "<span style='font-size:{$fontSize}px;'>$tag</span> ";
// }
// echo "</div>";


// ✅Example 8: Generating Report Tables
// Creating a table to display report data retrieved from a database.


// $reportData = [
//     ['John Doe', 'Sales', '$1000'],
//     ['Jane Doe', 'Marketing', '$1200'],
// ];

// echo "<table border='1'>";
// for ($i = 0; $i < count($reportData); $i++) {
//     echo "<tr>";
//     for ($j = 0; $j < count($reportData[$i]); $j++) {
//         echo "<td>{$reportData[$i][$j]}</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";


// ✅Example 9: Generating Breadcrumbs
// Dynamically generating breadcrumbs for a website to improve navigation.


// $breadcrumbs = ['Home', 'Products', 'Laptops'];

// echo "<div class='breadcrumbs'>";
// for ($i = 0; $i < count($breadcrumbs); $i++) {
//     echo $breadcrumbs[$i];
//     if ($i < count($breadcrumbs) - 1) {
//         echo " &gt; ";
//     }
// }
// echo "</div>";


//✅ Example 10: Sending Bulk Emails
// Using a for loop to send emails to multiple recipients in a bulk email operation.


// $emailAddresses = ['user1@example.com', 'user2@example.com'];

// for ($i = 0; $i < count($emailAddresses); $i++) {
//     mail($emailAddresses[$i], 'Subject', 'Message');
// }


// Each example demonstrates how for loops can be used to facilitate different functionalities in a real-world PHP project, be it displaying data, exporting files, generating HTML structures, or automating repetitive tasks. You would replace the static arrays with dynamic data from your database or API responses in a real-world scenario. Let me know if you have any questions or need further clarification!


// Challenge 1: Basic Loop
// Write a PHP for loop that prints the numbers from 1 to 10.

// Challenge 2: Even Numbers
// Write a PHP for loop that prints all even numbers between 20 and 40.

// Challenge 3: Odd Numbers
// Write a PHP for loop that prints all odd numbers between 15 and 35.

// Challenge 4: Sum of Numbers
// Write a PHP for loop that calculates and prints the sum of all numbers from 1 to 100.

// Challenge 5: Multiplication Table
// Write a PHP for loop that generates and prints the multiplication table for a given number. For example, if the input is 5, it should print the table for 5 (5x1, 5x2, ..., 5x10).

// Challenge 6: Factorial
// Write a PHP for loop that calculates and prints the factorial of a given number. The factorial of a number n is the product of all positive integers from 1 to n.

// Challenge 7: Reverse String
// Write a PHP for loop that takes a string as input and prints the characters of the string in reverse order.

// Challenge 8: Countdown
// Write a PHP for loop that counts down from 10 to 1 and prints the countdown values.

// Challenge 9: Pattern Printing
// Write a PHP for loop that prints the following pattern:


// *
// **
// ***
// ****
// *****


// Challenge 10: Fibonacci Sequence
// Write a PHP for loop that generates and prints the first 20 numbers in the Fibonacci sequence. In the Fibonacci sequence, each number is the sum of the two preceding ones (starting from 0 and 1).

// These challenges cover a range of scenarios where for loops are commonly used in PHP. They should help you assess and strengthen your understanding of for loops in PHP.



// Here are the solutions to the 10 coding challenges for assessing the concept of the for loop in PHP:

// Challenge 1: Basic Loop


// for ($i = 1; $i <= 10; $i++) {
//     echo $i . " ";
// }


// Challenge 2: Even Numbers


// for ($i = 20; $i <= 40; $i += 2) {
//     echo $i . " ";
// }


// Challenge 3: Odd Numbers


// for ($i = 15; $i <= 35; $i += 2) {
//     echo $i . " ";
// }



// Challenge 4: Sum of Numbers


// $sum = 0;
// for ($i = 1; $i <= 100; $i++) {
//     $sum += $i;
// }
// echo $sum;



// Challenge 5: Multiplication Table


// $number = 5;
// for ($i = 1; $i <= 10; $i++) {
//     echo $number . " x " . $i . " = " . ($number * $i) . "\n";
// }


// Challenge 6: Factorial


// $number = 5;
// $factorial = 1;
// for ($i = 1; $i <= $number; $i++) {
//     $factorial *= $i;
// }
// echo "Factorial of " . $number . " is " . $factorial;


// Challenge 7: Reverse String


// $string = "Hello, World!";
// $length = strlen($string);
// for ($i = $length - 1; $i >= 0; $i--) {
//     echo $string[$i];
// }


// Challenge 8: Countdown


// for ($i = 10; $i >= 1; $i--) {
//     echo $i . " ";
// }


// Challenge 9: Pattern Printing


// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "\n";
// }


// Challenge 10: Fibonacci Sequence


// $first = 0;
// $second = 1;
// for ($i = 1; $i <= 20; $i++) {
//     echo $first . " ";
//     $next = $first + $second;
//     $first = $second;
//     $second = $next;
// }


// These solutions demonstrate how to use for loops in various scenarios in PHP. You can run these code snippets to see the output and further understand how for loops work in each case.