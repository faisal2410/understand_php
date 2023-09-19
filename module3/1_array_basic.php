<?php



// 1. 👉Introduction to Arrays and Their Importance in Programming:
// Arrays are essential data structures in programming that allow you to store and manage collections of data efficiently. In PHP, an array is a versatile data type that can store multiple values under a single variable name. Arrays can hold various types of data, including numbers, strings, and even other arrays.


//✅ Creating an array of numbers
// $numbers = [1, 2, 3, 4, 5];

// Creating an array of strings
// $fruits = ['apple', 'banana', 'cherry'];

// Creating an array with mixed data types
// $person = ['John', 30, 'john@example.com'];

// 2. Numeric, Associative, and Multidimensional Arrays:
// ✅Numeric Arrays:
// Numeric arrays are arrays where elements are accessed by their position (index) in the array. The index starts from 0 and increments by 1 for each element.


// $colors = ['red', 'green', 'blue'];
// echo $colors[0]; // Output: red

// ✅Associative Arrays:
// Associative arrays use named keys (or labels) to access their elements instead of numerical indices. Each key is associated with a value.


// $student = [
//     'name' => 'Alice',
//     'age' => 22,
//     'grade' => 'A'
// ];
// echo $student['name']; // Output: Alice


// ✅Multidimensional Arrays:
// Multidimensional arrays are arrays of arrays. They allow you to create complex data structures by nesting arrays within arrays.


// $matrix = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9]
// ];

// echo $matrix[1][2]; // Output: 6 (accessing the element in the second row and third column)


// 3. ✅Array Declaration and Initialization:
// Arrays can be declared and initialized using several methods, including square brackets [] and the array() function.


// ✅Using square brackets (modern syntax)
// $colors = ['red', 'green', 'blue'];

// ✅Using the array() function (older syntax)
// $fruits = array('apple', 'banana', 'cherry');

// 4. ✅Accessing Elements in an Array:
// To access elements in an array, use the array name followed by the index (for numeric arrays) or the key (for associative arrays) enclosed in square brackets.


// $colors = ['red', 'green', 'blue'];
// echo $colors[1]; // Output: green

// $student = ['name' => 'Alice', 'age' => 22];
// echo $student['age']; // Output: 22


// 5. Adding and Removing Elements:
// You can add elements to an array using the array assignment operator [] or the array_push() function. To remove elements, you can use the unset() function.


// ✅Adding elements
// $fruits = ['apple', 'banana', 'cherry'];
// $fruits[] = 'orange'; // Adds 'orange' to the end of the array
// array_push($fruits, 'grape'); // Adds 'grape' to the end of the array

// ✅Removing elements
// unset($fruits[1]); // Removes the element at index 1 ('banana')

// 6. Modifying Array Elements and Resizing Arrays:
// You can modify array elements by assigning new values to specific indices or keys. To resize an array, you can use functions like array_shift() and array_pop() for numeric arrays and array_splice() for associative arrays.


// ✅Modifying array elements
// $fruits = ['apple', 'banana', 'cherry'];
// $fruits[1] = 'kiwi'; // Modifies 'banana' to 'kiwi'

// ✅Resizing numeric arrays
// array_shift($fruits); // Removes the first element ('apple')
// array_pop($fruits); // Removes the last element ('cherry')

// ✅Resizing associative arrays
// $student = ['name' => 'Alice', 'age' => 22, 'grade' => 'A'];
// unset($student['grade']); // Removes the 'grade' element

// These concepts provide a solid foundation for working with arrays in PHP. Arrays are a fundamental part of PHP programming and are used extensively in various applications, from simple data storage to complex data manipulation.






// 1.✅ Initializing and Displaying Numeric Array:

// $numbers = [10, 20, 30, 40, 50];

// Displaying array elements using a loop
// foreach ($numbers as $number) {
//     echo $number . " ";
// }
// Output: 10 20 30 40 50

// 2. ✅Associative Array with Key-Value Pairs:

// $student = [
//     'name' => 'Alice',
//     'age' => 22,
//     'major' => 'Computer Science'
// ];

// echo "Student Name: " . $student['name'];
// Output: Student Name: Alice

// 3. ✅Multidimensional Array for a Simple Table:

// $products = [
//     ['ProductID' => 1, 'Name' => 'Laptop', 'Price' => 800],
//     ['ProductID' => 2, 'Name' => 'Smartphone', 'Price' => 400],
//     ['ProductID' => 3, 'Name' => 'Tablet', 'Price' => 300]
// ];

// echo $products[1]['Name']; // Output: Smartphone

// 4. ✅Adding Elements to an Array:

// $fruits = ['apple', 'banana', 'cherry'];

// Adding elements to the end of the array
// $fruits[] = 'orange';
// $fruits[] = 'grape';

// Displaying the updated array
// print_r($fruits);
/* Output:
Array
(
    [0] => apple
    [1] => banana
    [2] => cherry
    [3] => orange
    [4] => grape
)
*/


// 5.✅ Removing Elements from an Array:

// $colors = ['red', 'green', 'blue'];

// Removing the first element ('red')
// array_shift($colors);

// Removing the last element ('blue')
// array_pop($colors);

// Displaying the updated array
// print_r($colors);
/* Output:
Array
(
    [0] => green
)
*/

// 6. ✅Modifying Array Elements:

// $animals = ['cat', 'dog', 'elephant'];

// Modifying the second element
// $animals[1] = 'horse';

// Displaying the updated array
// print_r($animals);
/* Output:
Array
(
    [0] => cat
    [1] => horse
    [2] => elephant
)
*/


// 7.✅ Resizing an Associative Array:

// $person = [
//     'name' => 'John',
//     'age' => 30,
//     'email' => 'john@example.com'
// ];

// Removing the 'email' key
// unset($person['email']);

// Displaying the updated associative array
// print_r($person);
/* Output:
Array
(
    [name] => John
    [age] => 30
)
*/


// 8.✅ Using array_slice() to Extract a Subset:

// $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];

// Extracting the first three months
// $quarter = array_slice($months, 0, 3);

// Displaying the extracted array
// print_r($quarter);
/* Output:
Array
(
    [0] => Jan
    [1] => Feb
    [2] => Mar
)
*/

// 9.✅ Merging Two Arrays:

// $fruits1 = ['apple', 'banana'];
// $fruits2 = ['cherry', 'orange'];

// Merging two arrays
// $combinedFruits = array_merge($fruits1, $fruits2);

// Displaying the merged array
// print_r($combinedFruits);
/* Output:
Array
(
    [0] => apple
    [1] => banana
    [2] => cherry
    [3] => orange
)
*/


// 10.✅ Sorting an Associative Array by Values:

// $ages = [
//     'Alice' => 25,
//     'Bob' => 30,
//     'Charlie' => 20
// ];

// Sorting by values in ascending order
// asort($ages);

// Displaying the sorted array
// print_r($ages);
/* Output:
Array
(
    [Charlie] => 20
    [Alice] => 25
    [Bob] => 30
)
*/



// Challenge 1: Numeric Array Average
// Create a PHP function that takes a numeric array as input and returns the average (mean) of its elements.

// Challenge 2: Array Search
// Write a PHP script that searches for a specific element in an array and returns its index if found, or a message if not found.

// Challenge 3: Associative Array Sort
// Build a PHP function that sorts an associative array of student names and their respective grades in descending order of grades. Output the sorted array.

// Challenge 4: Shopping Cart
// Create a PHP shopping cart using an array to store products (associative arrays with name and price). Implement functionality to add, remove, and display items in the cart.

// Challenge 5: Matrix Multiplication
// Write a PHP script that performs matrix multiplication for two given multidimensional arrays and outputs the result.

// Challenge 6: Palindrome Checker
// Build a PHP function that checks whether a given string is a palindrome (reads the same backward as forward) and returns true or false.

// Challenge 7: Unique Values
// Create a PHP function that takes an array of numbers and returns a new array containing only the unique values (removing duplicates).

// Challenge 8: Merge Arrays
// Write a PHP function that takes two numeric arrays as input and merges them into a single array, removing any duplicates.

// Challenge 9: Word Frequency Counter
// Develop a PHP script that takes a paragraph of text and generates an associative array where keys are unique words, and values are the frequency of each word in the text.

// Challenge 10: Tic-Tac-Toe Game
// Create a PHP implementation of the Tic-Tac-Toe game. Use a multidimensional array to represent the game board and implement the game logic, including checking for a win or a draw.

// These challenges cover a range of real-world scenarios where PHP arrays and their manipulation are commonly used. They are designed to reinforce your understanding and provide practical coding experience.


//  Here are the solutions to the 10 real-world coding challenges based on PHP arrays:

// ✅Challenge 1: Numeric Array Average


// function calculateAverage($numbers) {
//     $sum = array_sum($numbers);
//     $count = count($numbers);
//     return $count > 0 ? $sum / $count : 0;
// }

// $numericArray = [10, 20, 30, 40, 50];
// $average = calculateAverage($numericArray);
// echo "Average: $average";



// ✅Challenge 2: Array Search


// function findElementIndex($array, $element) {
//     $index = array_search($element, $array);
//     return $index !== false ? $index : "Element not found";
// }

// $fruits = ['apple', 'banana', 'cherry'];
// $searchElement = 'banana';
// $result = findElementIndex($fruits, $searchElement);
// echo "Index of $searchElement: $result";


// ✅Challenge 3: Associative Array Sort


// $students = [
//     'Alice' => 85,
//     'Bob' => 92,
//     'Charlie' => 78
// ];

// arsort($students);
// print_r($students);


// ✅Challenge 4: Shopping Cart


// $cart = [];

// // Add items to the cart
// function addToCart($cart, $product, $price) {
//     $cart[] = ['product' => $product, 'price' => $price];
//     return $cart;
// }

// $cart = addToCart($cart, 'Laptop', 800);
// $cart = addToCart($cart, 'Smartphone', 400);

// // Remove an item from the cart
// function removeFromCart($cart, $index) {
//     if (isset($cart[$index])) {
//         unset($cart[$index]);
//         return array_values($cart); // Reindex the array
//     }
//     return $cart;
// }

// $cart = removeFromCart($cart, 0);

// // Display items in the cart
// foreach ($cart as $item) {
//     echo $item['product'] . ': $' . $item['price'] . '<br>';
// }


//✅ Challenge 5: Matrix Multiplication


// function matrixMultiply($matrix1, $matrix2) {
//     $result = [];
//     foreach ($matrix1 as $i => $row) {
//         foreach ($matrix2[0] as $j => $col) {
//             $result[$i][$j] = 0;
//             foreach ($row as $k => $val) {
//                 $result[$i][$j] += $val * $matrix2[$k][$j];
//             }
//         }
//     }
//     return $result;
// }

// $matrix1 = [[1, 2], [3, 4]];
// $matrix2 = [[5, 6], [7, 8]];

// $resultMatrix = matrixMultiply($matrix1, $matrix2);
// print_r($resultMatrix);


// ✅Challenge 6: Palindrome Checker


// function isPalindrome($str) {
//     $str = str_replace(' ', '', $str);
//     $str = strtolower($str);
//     return $str === strrev($str);
// }

// $text = "A man a plan a canal Panama";
// $isPalindrome = isPalindrome($text);
// echo $isPalindrome ? 'Palindrome' : 'Not a Palindrome';


//✅ Challenge 7: Unique Values


// function getUniqueValues($numbers) {
//     return array_values(array_unique($numbers));
// }

// $numbers = [1, 2, 2, 3, 4, 4, 5];
// $uniqueValues = getUniqueValues($numbers);
// print_r($uniqueValues);


// ✅Challenge 8: Merge Arrays


// function mergeArrays($array1, $array2) {
//     return array_values(array_unique(array_merge($array1, $array2)));
// }

// $numbers1 = [1, 2, 3];
// $numbers2 = [3, 4, 5];
// $mergedArray = mergeArrays($numbers1, $numbers2);
// print_r($mergedArray);


// ✅Challenge 9: Word Frequency Counter


// function wordFrequency($text) {
//     $words = str_word_count(strtolower($text), 1);
//     $wordCount = array_count_values($words);
//     arsort($wordCount);
//     return $wordCount;
// }

// $text = "This is a sample text. This text contains words, and it is a sample.";
// $wordFrequency = wordFrequency($text);
// print_r($wordFrequency);


