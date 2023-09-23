<?php
// 1.👉 Converting Strings to Arrays and Arrays to Strings:
// ✅Converting String to Array (explode):
// The explode function in PHP splits a string into an array based on a specified delimiter.


// $string = "apple,banana,cherry";
// $fruitsArray = explode(",", $string);
// print_r($fruitsArray); // Output: Array ( [0] => apple [1] => banana [2] => cherry )


// ✅Converting Array to String (implode):
// The implode (or join) function in PHP joins the elements of an array into a string using a specified glue.


// $fruitsArray = ["apple", "banana", "cherry"];
// $fruitsString = implode(", ", $fruitsArray);
// echo $fruitsString; // Output: apple, banana, cherry


// 2. ✅Common Use Cases for String/Array Conversions:
// CSV Data Handling: Converting CSV data (comma-separated values) into arrays for processing and vice versa.
// URL Query Parameters: Parsing URL query parameters (e.g., $_GET data) into an associative array.
// JSON Handling: Converting JSON data to PHP arrays and back.
// Text Parsing: Splitting and manipulating text data for various purposes.

// 3. ✅Splitting Strings into Arrays Using Multiple Delimiters:
// You can use regular expressions and the preg_split function to split strings using multiple delimiters.


// $text = "Hello|World;Goodbye-Planet";
// $delimiters = "/[|;,-]/";
// $parts = preg_split($delimiters, $text);
// print_r($parts); // Output: Array ( [0] => Hello [1] => World [2] => Goodbye [3] => Planet )

// 4.✅ Examples with CSV, TSV, and Custom Delimiters:
// CSV to Array (Comma-Separated Values):

// $csvData = "Name,Age,Location\nAlice,25,New York\nBob,30,San Francisco";
// $dataArray = array_map('str_getcsv', explode("\n", $csvData));
// print_r($dataArray);

// ✅TSV to Array (Tab-Separated Values):

// $tsvData = "Name\tAge\tLocation\nAlice\t25\tNew York\nBob\t30\tSan Francisco";
// $dataArray = array_map(function($line) { return explode("\t", $line); }, explode("\n", $tsvData));
// print_r($dataArray);

// ✅Custom Delimiter (Pipe-Separated Values):

// $customData = "Name|Age|Location\nAlice|25|New York\nBob|30|San Francisco";
// $dataArray = array_map(function($line) { return explode("|", $line); }, explode("\n", $customData));
// print_r($dataArray);

// 5.✅ Concatenating Strings:
// You can concatenate strings using the . operator or the . assignment operator (.=) to append to an existing string.


// $firstName = "John";
// $lastName = "Doe";
// $fullName = $firstName . " " . $lastName;
// echo $fullName; // Output: John Doe

// 6. Trimming and Padding:
// Trimming Whitespace:
// The trim function removes leading and trailing whitespace from a string.


// $text = "   Hello, World!   ";
// $trimmedText = trim($text);
// echo $trimmedText; // Output: Hello, World!
// Padding:
// You can pad a string with spaces or a specific character using str_pad.


// $number = "42";
// $paddedNumber = str_pad($number, 5, "0", STR_PAD_LEFT);
// echo $paddedNumber; // Output: "00042"


// 7. Replacing and Formatting Strings:
// Replacing Substrings:
// Use str_replace to replace occurrences of a substring in a string.


// $text = "Hello, World!";
// $newText = str_replace("World", "Universe", $text);
// echo $newText; // Output: Hello, Universe!

// ✅String Formatting:
// You can format strings using sprintf for precise control over formatting.


// $number = 42;
// $formatted = sprintf("The answer is %d.", $number);
// echo $formatted; // Output: The answer is 42.

// 8. Word Wrapping and Line Breaks:
// Word Wrapping:
// Use wordwrap to break a long string into multiple lines at a specified line length.


// $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
// $wrappedText = wordwrap($text, 20, "\n");
// echo $wrappedText;

// Line Breaks:
// To create HTML line breaks (<br>) from newline characters, use nl2br.


// $text = "Hello\nWorld";
// $htmlText = nl2br($text);
// echo $htmlText; // Output: Hello<br>World

// These PHP concepts and code examples should help you understand and work with string/array conversions, string manipulation, and text formatting effectively in your PHP projects.


//  ✅Here are 10 PHP code examples to illustrate the concepts of string/array conversions, splitting, concatenating, trimming, padding, replacing, and formatting strings, and word wrapping:

// 1.✅ CSV Data Conversion:
// Convert CSV data into an array.


// $csvData = "Name,Age,Location\nAlice,25,New York\nBob,30,San Francisco";
// $dataArray = array_map('str_getcsv', explode("\n", $csvData));
// print_r($dataArray);

// 2. JSON Data Conversion:
// Convert JSON data into an associative array.


// $jsonData = '{"name": "John", "age": 30, "city": "New York"}';
// $dataArray = json_decode($jsonData, true);
// print_r($dataArray);


// 3. Splitting String with Multiple Delimiters:
// Split a string using multiple delimiters (,, ;, and -).


// $text = "Hello|World;Goodbye-Planet";
// $delimiters = "/[|;,-]/";
// $parts = preg_split($delimiters, $text);
// print_r($parts);

// 4. String Concatenation:
// Concatenate strings using the . operator.


// $firstName = "John";
// $lastName = "Doe";
// $fullName = $firstName . " " . $lastName;
// echo $fullName;

// 5. ✅Trimming Whitespace:
// Trim leading and trailing whitespace from a string.


// $text = "   Hello, World!   ";
// $trimmedText = trim($text);
// echo $trimmedText;

// 6.✅ Padding with Zeros:
// Pad a number with leading zeros to ensure a fixed length.


// $number = "42";
// $paddedNumber = str_pad($number, 5, "0", STR_PAD_LEFT);
// echo $paddedNumber;

// 7. String Replacement:
// Replace occurrences of a substring in a string.


// $text = "Hello, World!";
// $newText = str_replace("World", "Universe", $text);
// echo $newText;

// 8.✅ String Formatting:
// Format strings using sprintf.


// $number = 42;
// $formatted = sprintf("The answer is %d.", $number);
// echo $formatted;

// 9.✅ Word Wrapping:
// Wrap a long string into multiple lines at a specified length.


// $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
// $wrappedText = wordwrap($text, 20, "\n");
// echo $wrappedText;

// 10.✅ Line Breaks in HTML:
// Convert newline characters to HTML line breaks.


// $text = "Hello\nWorld";
// $htmlText = nl2br($text);
// echo $htmlText;

// These code examples demonstrate various scenarios where these string and array manipulation techniques are useful in PHP programming.

//  ✅Here are 10 coding challenges based on the concepts of string/array conversions, splitting, concatenating, trimming, padding, replacing, and formatting strings, and word wrapping in PHP:

// 1. CSV to JSON Converter:
// Create a PHP script that reads CSV data and converts it into JSON format.

// 2. JSON to CSV Converter:
// Develop a PHP program that reads JSON data and converts it into CSV format.

// 3. String Splitter:
// Write a function that takes a string and a delimiter as input and splits the string into an array using the provided delimiter.

// 4. Text Formatter:
// Create a program that reads a long text and formats it into paragraphs with a specified maximum line length. Ensure that words are not split.

// 5. String Replacer:
// Build a PHP function that takes a string, a search term, and a replacement term as input and replaces all occurrences of the search term with the replacement term.

// 6. String Concatenation with Padding:
// Write a program that takes an array of strings and concatenates them into a single string, separated by a space, while ensuring each element is padded with a fixed number of characters (e.g., 10 characters).

// 7. HTML Line Break Generator:
// Create a function that takes a text input and converts newline characters into HTML line breaks (<br>) for displaying text in HTML.

// 8. String Truncation:
// Write a PHP function that takes a string and a maximum length as input and truncates the string if it exceeds the specified length, adding "..." to indicate truncation.

// 9. CSV Validator:
// Develop a PHP program that reads CSV data and checks if it is well-formed, ensuring that all rows have the same number of columns.

// 10. Password Generator:
// Create a function that generates random passwords of a specified length with a mix of characters (letters, numbers, and symbols). The generated passwords should be stored in an array.

// These coding challenges will help you practice and apply the string and array manipulation concepts you've learned, making you more proficient in using these techniques in real-world PHP applications.


//  ✅Here are the solutions for the 10 coding challenges based on the concepts of string/array conversions, splitting, concatenating, trimming, padding, replacing, and formatting strings, and word wrapping in PHP:

// 1. ✅CSV to JSON Converter:


// $csvData = "Name,Age,Location\nAlice,25,New York\nBob,30,San Francisco";
// $dataArray = array_map('str_getcsv', explode("\n", $csvData));
// $jsonData = json_encode($dataArray, JSON_PRETTY_PRINT);
// echo $jsonData;
// 2. JSON to CSV Converter:


// $jsonData = '[{"Name": "Alice", "Age": 25, "Location": "New York"}, {"Name": "Bob", "Age": 30, "Location": "San Francisco"}]';
// $dataArray = json_decode($jsonData, true);
// $csvData = implode("\n", array_map('str_getcsv', $dataArray));
// echo $csvData;

// 3.✅ String Splitter:


// function splitString($inputString, $delimiter) {
//     return explode($delimiter, $inputString);
// }

// $string = "Hello|World;Goodbye-Planet";
// $delimiter = "|";
// $parts = splitString($string, $delimiter);
// print_r($parts);

// 4.✅ Text Formatter:


// function formatText($inputText, $lineLength) {
//     return wordwrap($inputText, $lineLength, "\n", true);
// }

// $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
// $maxLineLength = 20;
// $formattedText = formatText($text, $maxLineLength);
// echo $formattedText;

// 5.✅ String Replacer:


// function replaceString($inputString, $searchTerm, $replaceTerm) {
//     return str_replace($searchTerm, $replaceTerm, $inputString);
// }

// $string = "Hello, World!";
// $search = "World";
// $replace = "Universe";
// $newString = replaceString($string, $search, $replace);
// echo $newString;

// 6. String Concatenation with Padding:


// function concatenateWithPadding($stringArray, $paddingLength) {
//     return implode(str_repeat(' ', $paddingLength), $stringArray);
// }

// $strings = ["Apple", "Banana", "Cherry"];
// $padding = 5;
// $result = concatenateWithPadding($strings, $padding);
// echo $result;
// 7. ✅HTML Line Break Generator:


// function convertToHtmlLineBreaks($inputText) {
//     return nl2br($inputText);
// }

// $text = "Hello\nWorld";
// $htmlText = convertToHtmlLineBreaks($text);
// echo $htmlText;

// 8. String Truncation:


// function truncateString($inputString, $maxLength) {
//     if (strlen($inputString) > $maxLength) {
//         return substr($inputString, 0, $maxLength) . "...";
//     }
//     return $inputString;
// }

// $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
// $maxLength = 20;
// $truncatedText = truncateString($text, $maxLength);
// echo $truncatedText;

// 9. CSV Validator:


// function isCsvWellFormed($csvData) {
//     $rows = explode("\n", $csvData);
//     $numColumns = count(str_getcsv($rows[0]));
    
//     foreach ($rows as $row) {
//         $columns = str_getcsv($row);
//         if (count($columns) !== $numColumns) {
//             return false;
//         }
//     }
//     return true;
// }

// $csvData = "Name,Age,Location\nAlice,25,New York\nBob,30,San Francisco";
// $isWellFormed = isCsvWellFormed($csvData);
// echo $isWellFormed ? 'CSV is well-formed' : 'CSV is not well-formed';

// 10. Password Generator:


// function generatePassword($length) {
//     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
//     $password = '';
    
//     for ($i = 0; $i < $length; $i++) {
//         $password .= $characters[rand(0, strlen($characters) - 1)];
//     }
    
//     return $password;
// }

// $passwords = [];
// for ($i = 0; $i < 5; $i++) {
//     $passwords[] = generatePassword(10);
// }

// print_r($passwords);

// These solutions demonstrate how to implement the given coding challenges related to string/array conversions, string manipulation, and text formatting in PHP.





