<?php

// ❎Handling Sting 

//✅ Example1

// $string = "Hello, World!";
// $length = strlen($string);
// echo "The length of the string is: " . $length; 

//✅ Example2


// $string = "Hello, World!";
// $lowercase = strtolower($string);
// echo $lowercase; 

//✅ Example3


// $string = "Hello, World!";
// $uppercase = strtoupper($string);
// echo $uppercase; 

//✅ Example4


// $string = "Hello, World!";
// $position = strpos($string, "Hello");
// if ($position !== false) {
//     echo "Found 'World' at position: " . $position; 
// } else {
//     echo "Not found";
// }

//✅ Example5

// $string = "Hello, World!";
// $substring = substr($string, 2 ); 
// echo $substring; 


//✅ Example6

// $string = "apple banana cherry,mango";
// $fruitsArray = explode(",", $string);
// print_r($fruitsArray); 


// ✅Example7


// $fruitsArray = ["apple", "banana", "cherry"];
// $fruitsString = implode("*Faisal", $fruitsArray);
// echo $fruitsString; 


//✅ Example8

// $firstName = "John";
// $lastName = "Doe";
// $fullName = $firstName . " " . $lastName;
// echo $fullName; 


//✅ Example9

// $text = "   Hello, World!   ";
// $trimmedText = trim($text);
// echo $trimmedText; 

//✅ Example 10

// $text = "Hello, World!";
// $newText = str_replace("Hello","Hi", $text);
// echo $newText; 


// ✅Example 11

// $originalString = "Hello, World!";
// $reversedString = strrev($originalString);
// echo $reversedString;




//✅ Example 12 Password Generator:


// function generatePassword($length) {
//     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
//     $password = '';
    
//     for ($i = 0; $i < $length; $i++) {
//         $password .= $characters[rand(0, strlen($characters)  -1)];
//     }
    
//     return $password;
// }



// echo generatePassword(8);




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






























