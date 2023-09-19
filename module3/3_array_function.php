<?php

// Most commonly used array functions in PHP. Arrays are a fundamental data structure in PHP, and these functions can help you manipulate and work with them efficiently. Here are some of the most frequently used array functions in PHP:

// ✅count(): This function is used to count the number of elements in an array.

// $numbers = [1, 2, 3, 4, 5];
// $count = count($numbers); // $count will be 5

// ✅array_push() and array_pop(): These functions allow you to add elements to the end of an array and remove the last element, respectively.

// $fruits = ["apple", "banana"];
// array_push($fruits, "cherry"); // $fruits is now ["apple", "banana", "cherry"]
// $lastFruit = array_pop($fruits); // $lastFruit is "cherry", and $fruits is ["apple", "banana"]


//✅ array_shift() and array_unshift(): These functions allow you to add elements to the beginning of an array and remove the first element, respectively.

// $colors = ["red", "green", "blue"];
// array_unshift($colors, "yellow"); // $colors is now ["yellow", "red", "green", "blue"]
// $firstColor = array_shift($colors); // $firstColor is "yellow", and $colors is ["red", "green", "blue"]

// ✅array_merge(): This function merges two or more arrays into a single array.

// $array1 = ["a", "b"];
// $array2 = ["c", "d"];
// $result = array_merge($array1, $array2); // $result is ["a", "b", "c", "d"]


//✅ array_slice(): It extracts a portion of an array.

// $numbers = [1, 2, 3, 4, 5];
// $slice = array_slice($numbers, 2, 2); // $slice is [3, 4]

//✅ array_splice(): This function can add, remove, or replace elements from an array.

// $colors = ["red", "green", "blue"];
// array_splice($colors, 1, 1, "yellow"); // $colors is now ["red", "yellow", "blue"]


//✅ array_filter(): It filters elements in an array based on a callback function.

// $numbers = [1, 2, 3, 4, 5];
// $evenNumbers = array_filter($numbers, function ($number) {
//     return $number % 2 === 0;
// });
// // $evenNumbers is [2, 4]


//✅ array_map(): It applies a callback function to all elements of an array.

// $numbers = [1, 2, 3, 4, 5];
// $squaredNumbers = array_map(function ($number) {
//     return $number * $number;
// }, $numbers);
// // $squaredNumbers is [1, 4, 9, 16, 25]

//✅ array_key_exists(): Checks if a specific key exists in an array.

// $student = ["name" => "John", "age" => 25];
// $hasName = array_key_exists("name", $student); // $hasName is true


//✅ in_array(): Checks if a specific value exists in an array.

// $fruits = ["apple", "banana", "cherry"];
// $isBanana = in_array("banana", $fruits); // $isBanana is true

// These are some of the most commonly used array functions in PHP. Mastering them will greatly enhance your ability to work with arrays effectively in PHP.


// ✅ Here are 10 real-world code examples that demonstrate the usage of the PHP array functions I mentioned earlier:

// 1. Using count() to determine the number of items in a shopping cart:


// $cart = ["item1", "item2", "item3"];
// $itemCount = count($cart);
// echo "There are $itemCount items in your cart.";

// 2. Using array_push() to add a new product to a list of favorites:


// $favorites = ["product1", "product2"];
// $newProduct = "product3";
// array_push($favorites, $newProduct);
// print_r($favorites);

// 3.✅ Using array_pop() to remove and display the last error message in a log:


// $errorLog = ["Error 1", "Error 2", "Error 3"];
// $lastError = array_pop($errorLog);
// echo "Last error: $lastError";

// 4.✅ Using array_unshift() to add a greeting to a list of messages:


// $messages = ["Message 1", "Message 2"];
// $newMessage = "Hello!";
// array_unshift($messages, $newMessage);
// print_r($messages);

// 5.✅ Using array_shift() to display and remove the oldest email in a mailbox:


// $mailbox = ["Email 1", "Email 2", "Email 3"];
// $oldestEmail = array_shift($mailbox);
// echo "You have a new email: $oldestEmail";

// 6.✅ Using array_merge() to combine two arrays of user roles:


// $rolesAdmin = ["admin", "editor"];
// $rolesUser = ["user"];
// $combinedRoles = array_merge($rolesAdmin, $rolesUser);
// print_r($combinedRoles);


// 7.✅ Using array_slice() to paginate a list of articles:


// $articles = ["Article 1", "Article 2", "Article 3", "Article 4"];
// $page = 2;
// $perPage = 2;
// $startIndex = ($page - 1) * $perPage;
// $paginatedArticles = array_slice($articles, $startIndex, $perPage);
// print_r($paginatedArticles);


// 8.✅ Using array_splice() to replace elements in a list of ingredients:


// $ingredients = ["salt", "sugar", "flour"];
// array_splice($ingredients, 1, 1, "butter");
// print_r($ingredients);


// 9.✅ Using array_filter() to filter out inactive users from a user list:


// $users = [
//     ["name" => "Alice", "active" => true],
//     ["name" => "Bob", "active" => false],
//     ["name" => "Charlie", "active" => true],
// ];
// $activeUsers = array_filter($users, function ($user) {
//     return $user["active"];
// });
// print_r($activeUsers);

// 10.✅ Using array_map() to format a list of dates:


// $dates = ["2023-09-01", "2023-09-15", "2023-09-30"];
// $formattedDates = array_map(function ($date) {
//     return date("F j, Y", strtotime($date));
// }, $dates);
// print_r($formattedDates);


// These examples illustrate how you can use these array functions in real-world scenarios to solve various programming challenges.


// ✅ Here is a list of 20 commonly used array functions in PHP:

// count(): Counts the number of elements in an array.
// array_push(): Adds one or more elements to the end of an array.
// array_pop(): Removes and returns the last element of an array.
// array_unshift(): Adds one or more elements to the beginning of an array.
// array_shift(): Removes and returns the first element of an array.
// array_merge(): Merges two or more arrays into one.
// array_slice(): Extracts a portion of an array.
// array_splice(): Adds, removes, or replaces elements in an array.
// array_filter(): Filters elements in an array based on a callback function.
// array_map(): Applies a callback function to all elements of an array.
// array_key_exists(): Checks if a specific key exists in an array.
// in_array(): Checks if a specific value exists in an array.
// array_unique(): Removes duplicate values from an array.
// array_reverse(): Reverses the order of elements in an array.
// array_search(): Searches for a value in an array and returns its key if found.
// sort(): Sorts an array in ascending order.
// rsort(): Sorts an array in descending order.
// asort(): Sorts an associative array in ascending order by its values.
// arsort(): Sorts an associative array in descending order by its values.
// ksort(): Sorts an associative array in ascending order by its keys.
// These array functions are frequently used in PHP to perform various operations on arrays, making them essential for working with data efficiently in PHP applications.


// ✅ Here are 10 coding challenges based on the concepts of array manipulation in PHP:

// 1. Count the Occurrences:

// Write a function that takes an array and a value as parameters and returns the number of times the value appears in the array.

// 2. Reverse an Array:

// Create a function to reverse the elements of an array without using the array_reverse() function.

// 3. Find the Maximum Value:

// Write a function that finds and returns the maximum value in an array of numbers.

// 4. Remove Duplicates:

// Create a function that removes duplicate values from an array while preserving the original order of elements.

// 5. Merge Two Arrays:

// Write a function that takes two arrays as input and merges them into a single sorted array.

// 6. Implement a Stack:

// Implement a stack (Last-In-First-Out) using an array. Include push and pop operations.

// 7. Implement a Queue:

// Implement a queue (First-In-First-Out) using an array. Include enqueue and dequeue operations.

// 8. Filter an Associative Array:

// Given an associative array of products with their prices, write a function that filters out products below a certain price threshold.

// 9. Group By Category:

// Given an array of items with category information, create a function that groups the items by their category into a multidimensional array.

// 10. Search and Replace:

// Write a function that searches for a specific word in an array of strings and replaces it with a given replacement word.

// These challenges will test your understanding of array functions in PHP and your ability to use them effectively to solve common programming problems.

// ✅Here are the solutions to the 10 coding challenges using PHP:

// 1. Count the Occurrences:


// function countOccurrences($array, $value) {
//     $count = 0;
//     foreach ($array as $element) {
//         if ($element == $value) {
//             $count++;
//         }
//     }
//     return $count;
// }

// $numbers = [1, 2, 2, 3, 4, 2];
// $valueToCount = 2;
// $result = countOccurrences($numbers, $valueToCount);
// echo "The value $valueToCount appears $result times in the array.";


// 2. Reverse an Array:


// function reverseArray($array) {
//     $reversed = [];
//     for ($i = count($array) - 1; $i >= 0; $i--) {
//         $reversed[] = $array[$i];
//     }
//     return $reversed;
// }

// $originalArray = [1, 2, 3, 4, 5];
// $reversedArray = reverseArray($originalArray);
// print_r($reversedArray);


// 3. Find the Maximum Value:


// function findMax($array) {
//     $max = $array[0];
//     foreach ($array as $value) {
//         if ($value > $max) {
//             $max = $value;
//         }
//     }
//     return $max;
// }

// $numbers = [34, 12, 56, 78, 45];
// $maxValue = findMax($numbers);
// echo "The maximum value in the array is: $maxValue";


// 4. Remove Duplicates:


// function removeDuplicates($array) {
//     return array_values(array_unique($array));
// }

// $originalArray = [1, 2, 2, 3, 4, 4, 5];
// $uniqueArray = removeDuplicates($originalArray);
// print_r($uniqueArray);


// 5. Merge Two Arrays:


// function mergeArrays($array1, $array2) {
//     return array_merge($array1, $array2);
// }

// $array1 = [1, 2, 3];
// $array2 = [4, 5, 6];
// $mergedArray = mergeArrays($array1, $array2);
// print_r($mergedArray);


// 6. Implement a Stack:


// class Stack {
//     private $stack;

//     public function __construct() {
//         $this->stack = [];
//     }

//     public function push($item) {
//         array_push($this->stack, $item);
//     }

//     public function pop() {
//         return array_pop($this->stack);
//     }
// }

// $stack = new Stack();
// $stack->push(1);
// $stack->push(2);
// $stack->push(3);
// echo $stack->pop(); // Outputs 3


// 7. Implement a Queue:


// class Queue {
//     private $queue;

//     public function __construct() {
//         $this->queue = [];
//     }

//     public function enqueue($item) {
//         array_push($this->queue, $item);
//     }

//     public function dequeue() {
//         return array_shift($this->queue);
//     }
// }

// $queue = new Queue();
// $queue->enqueue(1);
// $queue->enqueue(2);
// $queue->enqueue(3);
// echo $queue->dequeue(); // Outputs 1


// 8. Filter an Associative Array:


// function filterByPrice($products, $threshold) {
//     $filteredProducts = [];
//     foreach ($products as $product => $price) {
//         if ($price >= $threshold) {
//             $filteredProducts[$product] = $price;
//         }
//     }
//     return $filteredProducts;
// }

// $products = [
//     "product1" => 10,
//     "product2" => 25,
//     "product3" => 5,
//     "product4" => 15,
// ];

// $filteredProducts = filterByPrice($products, 15);
// print_r($filteredProducts);


// 9. Group By Category:


// function groupByCategory($items) {
//     $groupedItems = [];
//     foreach ($items as $item) {
//         $category = $item["category"];
//         $groupedItems[$category][] = $item;
//     }
//     return $groupedItems;
// }

// $items = [
//     ["name" => "Item 1", "category" => "Category A"],
//     ["name" => "Item 2", "category" => "Category B"],
//     ["name" => "Item 3", "category" => "Category A"],
//     ["name" => "Item 4", "category" => "Category C"],
// ];

// $groupedItems = groupByCategory($items);
// print_r($groupedItems);


// 10. Search and Replace:


// function searchAndReplace($array, $search, $replace) {
//     foreach ($array as &$value) {
//         if ($value == $search) {
//             $value = $replace;
//         }
//     }
//     return $array;
// }

// $words = ["apple", "banana", "cherry"];
// $searchWord = "banana";
// $replacement = "orange";
// $newWords = searchAndReplace($words, $searchWord, $replacement);
// print_r($newWords);
// These PHP solutions demonstrate how to implement various array manipulation tasks using PHP's array functions and custom functions.





