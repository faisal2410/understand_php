<?php

//✅ Creating an array of numbers
// $numbers = [1, 2, 3, 4, 5];

// print_r($numbers);
// var_dump($numbers);


// Creating an array of strings
// $fruits = ['apple', 'banana', 'cherry'];
// $fruits = array('apple', 'banana', 'cherry');

// Creating an array with mixed data types
// $person = ['John', 30, 'john@example.com'];
// var_dump($person);



// ✅Numeric Arrays:

// $colors = ['red', 'green', 'blue'];
// echo $colors[2]; 

// ✅Associative Arrays:

// $student = [
//     'name' => 'Alice',
//     'age' => 22,
//     'grade' => 'A'
// ];
// echo $student['age']; 


// ✅Multidimensional Arrays:

// $matrix = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9]
// ];

// echo $matrix[0][2]; 


// ✅Adding elements
// $fruits = ['apple', 'banana', 'cherry'];
// $fruits[] = 'orange'; 
// array_push($fruits, 'grape'); 
// print_r($fruits);

// ✅Removing elements

// unset($fruits[1]); 
// print_r($fruits);


// ✅Modifying array elements
// $fruits = ['apple', 'banana', 'cherry'];
// $fruits[2] = 'mango'; 
// print_r($fruits);

// ✅Resizing numeric arrays

// $fruits = ['apple', 'banana', 'cherry'];
// array_shift($fruits); 
// array_pop($fruits); 
// print_r($fruits);

// ✅Resizing associative arrays
// $student = ['name' => 'Alice', 'age' => 22, 'grade' => 'A'];
// unset($student['grade']); 
// print_r($student);


//✅ Associative Array Functions:

// $student = [
//     'name' => 'Alice',
//     'age' => 22,
//     'grade' => 'A'
// ];

// if (array_key_exists('grade', $student)) {
//     echo "Age: " . $student['grade']; 
// }

//✅ Get an array of keys

// $keys = array_keys($student);
// print_r($keys); 

//✅ Get an array of values
// $values = array_values($student);
// print_r($values);


//  ✅Creating and Working with Nested Arrays:


// $student = [
//     'name' => 'Alice',
//     'contact' => [
//         'email' => 'alice@example.com',
//         'phone' => '123-456-7890'
//     ]
// ];

// echo "Student Email: " . $student['contact']['phone']; 


// ✅Displaying array elements using a loop

// $numbers = [10, 20, 30, 40, 50];

// foreach ($numbers as $number) {
//     echo $number . " ";
// }

// ✅Merging two arrays

// $fruits1 = ['apple', 'banana'];
// $fruits2 = ['cherry', 'orange'];

// $combinedFruits = array_merge($fruits1, $fruits2);

// print_r($combinedFruits);



// ✅Use the sort() function to sort in ascending order

// $numbers = array(5, 2, 9, 1, 5, 6);

// sort($numbers);

// print_r($numbers);



// ✅Use the rsort() function to sort in descending order

// $numbers = array(5, 2, 9, 1, 5, 6);

// rsort($numbers);


// print_r($numbers);


//✅ Use the asort() function to sort by values in ascending order

// $fruits = array(
//     'apple' => 5,
//     'banana' => 2,
//     'cherry' => 9,
//     'date' => 1
// );

// asort($fruits);


// print_r($fruits);



//✅ Use the ksort() function to sort by keys in ascending order

// $fruits = array(
//     'date' => 1,
//     'apple' => 5,
//     'banana' => 2,
//     'cherry' => 9
// );

// ksort($fruits);


// print_r($fruits);




// ✅  in_array()


// $fruits = array('apple', 'banana', 'cherry', 'date');

// $searchValue = 'mango';

// if (in_array($searchValue, $fruits)) {
//     echo "$searchValue exists in the array.";
// } else {
//     echo "$searchValue does not exist in the array.";
// }




// ✅array_search()


// $fruits = array('apple', 'banana', 'cherry', 'date');
// print_r($fruits);

// $searchValue = 'mango';

// $key = array_search($searchValue, $fruits);

// if ($key !== false) {
//     echo "$searchValue was found at index $key in the array.";
// } else {
//     echo "$searchValue was not found in the array.";
// }


//✅  array_filter


// $names = ["John", "Alice", "Bob", "Charlie", "Eve", "David","Ahmed"];

// function startsWithA($name) {
//     return $name[0] === 'A'; 
// }

// $filteredNames = array_filter($names, 'startsWithA');

// print_r($filteredNames);




//✅ array_map

// $fnames = ["John", "Alice", "Bob"];
// $lnames = ["Doe", "Johnson", "Smith"];


// function fullNames($fname) {
//     return $fname . ' * ' ;
// }


// $names = array_map('fullNames', $fnames);


// print_r($names);



// array_reduce

// $numbers = [1, 2, 3, 4, 5];


// function sum($carry, $item) {
//     return $carry + $item;
// }


// $totalSum = array_reduce($numbers, 'sum');


// echo "The sum of the numbers is: $totalSum";

// ❎❎=================================================================❎❎
// ❎❎=================================================================❎❎
// ❎❎=================================================================❎❎
// ❎❎=================================================================❎❎


// ❎Handling Sting 

// Example1

// $string = "Hello, World!";
// $length = strlen($string);
// echo "The length of the string is: " . $length; 

// Example2


// $string = "Hello, World!";
// $lowercase = strtolower($string);
// echo $lowercase; 

// Example3


// $string = "Hello, World!";
// $uppercase = strtoupper($string);
// echo $uppercase; 

// Example4


// $string = "Hello, World!";
// $position = strpos($string, "World");
// if ($position !== false) {
//     echo "Found 'World' at position: " . $position; 
// } else {
//     echo "Not found";
// }

// Example5

// $string = "Hello, World!";
// $substring = substr($string, 0, 5); 
// echo $substring; 


// Example6

// $string = "apple,banana,cherry";
// $fruitsArray = explode(",", $string);
// print_r($fruitsArray); 


// Example7


// $fruitsArray = ["apple", "banana", "cherry"];
// $fruitsString = implode(", ", $fruitsArray);
// echo $fruitsString; 


// Example8

// $firstName = "John";
// $lastName = "Doe";
// $fullName = $firstName . " " . $lastName;
// echo $fullName; // Output: John Doe


// Example9

// $text = "   Hello, World!   ";
// $trimmedText = trim($text);
// echo $trimmedText; 

// Example 10

// $text = "Hello, World!";
// $newText = str_replace("World", "Universe", $text);
// echo $newText; // Output: Hello, Universe!


// Example 11

// $originalString = "Hello, World!";
// $reversedString = strrev($originalString);
// echo $reversedString;




// Example 12 Password Generator:


// function generatePassword($length) {
//     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
//     $password = '';
    
//     for ($i = 0; $i < $length; $i++) {
//         $password .= $characters[rand(0, strlen($characters) - 1)];
//     }
    
//     return $password;
// }


// echo generatePassword(10);




// Here are 20 of the most commonly used string functions in PHP:

// strlen($string) - Returns the length of a string.
// strpos($haystack, $needle) - Finds the position of the first occurrence of a substring in a string.
// str_replace($search, $replace, $string) - Replaces all occurrences of a substring with another substring in a string.
// substr($string, $start, $length) - Returns a portion of a string based on the start position and length.
// strtolower($string) - Converts a string to lowercase.
// strtoupper($string) - Converts a string to uppercase.
// trim($string) - Removes whitespace or other specified characters from the beginning and end of a string.
// str_split($string, $length) - Splits a string into an array of substrings.
// implode($glue, $array) - Joins an array of strings into a single string using a specified delimiter.
// explode($delimiter, $string) - Splits a string into an array of substrings based on a delimiter.
// str_repeat($string, $multiplier) - Repeats a string a specified number of times.
// str_pad($string, $length, $padding, $pad_type) - Pads a string to a specified length with another string.
// strrev($string) - Reverses a string.
// strip_tags($string) - Removes HTML and PHP tags from a string.
// htmlspecialchars($string, $flags) - Converts special characters to their HTML entities.
// strcasecmp($string1, $string2) - Compares two strings, case-insensitive.
// strncasecmp($string1, $string2, $length) - Compares the first n characters of two strings, case-insensitive.
// strchr($haystack, $needle) - Returns the portion of a string from the first occurrence of a substring to the end.
// strcmp($string1, $string2) - Compares two strings, case-sensitive.
// strncasecmp($string1, $string2, $length) - Compares the first n characters of two strings, case-sensitive.






























