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



// ✅Numeric Arrays:

// $colors = ['red', 'green', 'blue'];
// echo $colors[0]; 

// ✅Associative Arrays:

// $student = [
//     'name' => 'Alice',
//     'age' => 22,
//     'grade' => 'A'
// ];
// echo $student['name']; 


// ✅Multidimensional Arrays:

// $matrix = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9]
// ];

// echo $matrix[2][0]; 


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
// $fruits[1] = 'kiwi'; 
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

// if (array_key_exists('age', $student)) {
//     echo "Age: " . $student['age']; 
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

// echo "Student Email: " . $student['contact']['email']; 


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

// $searchValue = 'banana';

// if (in_array($searchValue, $fruits)) {
//     echo "$searchValue exists in the array.";
// } else {
//     echo "$searchValue does not exist in the array.";
// }




// ✅array_search()


// $fruits = array('apple', 'banana', 'cherry', 'date');

// $searchValue = 'cherry';

// $key = array_search($searchValue, $fruits);

// if ($key !== false) {
//     echo "$searchValue was found at index $key in the array.";
// } else {
//     echo "$searchValue was not found in the array.";
// }


//✅  array_filter


// $names = ["John", "Alice", "Bob", "Charlie", "Eve", "David"];

// function startsWithA($name) {
//     return $name[0] === 'A'; 
// }

// $filteredNames = array_filter($names, 'startsWithA');

// print_r($filteredNames);




//✅ array_map

// $fnames = ["John", "Alice", "Bob"];
// $lnames = ["Doe", "Johnson", "Smith"];


// function fullNames($fname, $lname) {
//     return $fname . ' ' . $lname;
// }


// $names = array_map('fullNames', $fnames, $lnames);


// print_r($names);



// array_reduce

// $numbers = [1, 2, 3, 4, 5];


// function sum($carry, $item) {
//     return $carry + $item;
// }


// $totalSum = array_reduce($numbers, 'sum');


// echo "The sum of the numbers is: $totalSum";













