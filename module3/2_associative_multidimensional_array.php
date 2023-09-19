<?php

// 1.👉 Detailed Discussion of Associative Arrays:
// An associative array is an array where each element is associated with a unique key. Unlike numeric arrays, where elements are accessed by their index, associative arrays allow you to use descriptive keys to access values. This makes them particularly useful for representing data with named attributes.


// Creating an associative array
// $student = [
//     'name' => 'Alice',
//     'age' => 22,
//     'grade' => 'A'
// ];

// Accessing elements by key
// echo "Student Name: " . $student['name']; // Output: Student Name: Alice


// 2. ✅Creating and Using Associative Arrays:
// Associative arrays are created using square brackets {} and specifying key-value pairs. You can access elements using their keys.

// Code Example:

// Creating an associative array
// $book = [
//     'title' => 'PHP Basics',
//     'author' => 'John Smith',
//     'year' => 2023
// ];

// Accessing elements by key
// echo "Book Title: " . $book['title']; // Output: Book Title: PHP Basics

// 3. Associative Array Functions:
// PHP offers several functions for working with associative arrays, such as array_key_exists(), array_keys(), and array_values(). These functions help you manipulate and extract data from associative arrays.

// Code Example:

// $student = [
//     'name' => 'Alice',
//     'age' => 22,
//     'grade' => 'A'
// ];

// Check if a key exists

// if (array_key_exists('age', $student)) {
//     echo "Age: " . $student['age']; // Output: Age: 22
// }

// Get an array of keys

// $keys = array_keys($student);
// print_r($keys); // Output: Array ( [0] => name [1] => age [2] => grade )

// Get an array of values
// $values = array_values($student);
// print_r($values); // Output: Array ( [0] => Alice [1] => 22 [2] => A )

// 4. Understanding Multidimensional Arrays:
// A multidimensional array is an array of arrays. It allows you to represent complex data structures, such as tables or matrices, by nesting arrays within arrays. You can access elements using multiple indices.

// Code Example:

// Creating a multidimensional array (matrix)
// $matrix = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9]
// ];

// Accessing elements in a multidimensional array
// echo $matrix[1][2]; // Output: 6 (accessing the element in the second row and third column)
// 5. ✅Creating and Working with Nested Arrays:
// Nested arrays are arrays within arrays. You can create complex data structures by nesting associative or numeric arrays.

// Code Example:

// Creating a nested associative array
// $student = [
//     'name' => 'Alice',
//     'contact' => [
//         'email' => 'alice@example.com',
//         'phone' => '123-456-7890'
//     ]
// ];

// Accessing elements in nested arrays
// echo "Student Email: " . $student['contact']['email']; // Output: Student Email: alice@example.com


// 6.✅ Practical Applications of Multidimensional Arrays:
// Multidimensional arrays are used to represent data with multiple dimensions. Some practical applications include:

// Representing tables or grids of data.
// Storing data for a chessboard or game board.
// Managing hierarchical data like organizational structures.
// Handling data with multiple attributes (e.g., products with properties).
// Code Example (Table Representation):

// Creating a table using a multidimensional array

// $table = [
//     ['Name', 'Age', 'City'],
//     ['Alice', 22, 'New York'],
//     ['Bob', 30, 'San Francisco'],
//     ['Charlie', 25, 'Los Angeles']
// ];

// Displaying the table

// foreach ($table as $row) {
//     echo implode("\t", $row) . "\n";
// }


// These concepts are fundamental to working with associative and multidimensional arrays in PHP. They enable you to structure and manipulate data efficiently, making them essential tools for various programming tasks.

//  Here are 10 code examples that further illustrate the concepts of associative arrays, multidimensional arrays, and their practical applications in PHP:

// 1.✅ Associative Array with Mixed Data Types:


// $person = [
//     'name' => 'Alice',
//     'age' => 30,
//     'isStudent' => true,
//     'grades' => ['Math' => 'A', 'Science' => 'B']
// ];

// echo "Name: " . $person['name'];
// echo "Age: " . $person['age'];
// echo "Is Student: " . ($person['isStudent'] ? 'Yes' : 'No');
// echo "Math Grade: " . $person['grades']['Math'];


// 2.✅ Associative Array Functions:


// $fruits = [
//     'apple' => 3,
//     'banana' => 5,
//     'cherry' => 2
// ];

// Check if 'banana' exists

// if (array_key_exists('banana', $fruits)) {
//     echo "We have bananas!";
// }

// Get an array of fruit names
// $fruitNames = array_keys($fruits);
// print_r($fruitNames);

// Get an array of fruit quantities
// $fruitQuantities = array_values($fruits);
// print_r($fruitQuantities);


// 3. Creating a Simple Two-Dimensional Array:


// $matrix = [
//     [1, 2, 3],
//     [4, 5, 6]
// ];

// echo $matrix[1][2]; // Output: 6 (accessing the element in the second row and third column)

// 4.✅ Creating a Chessboard Using Multidimensional Arrays:


// $chessboard = [];

// for ($row = 0; $row < 8; $row++) {
//     for ($col = 0; $col < 8; $col++) {
//         $chessboard[$row][$col] = ($row + $col) % 2 === 0 ? 'W' : 'B';
//     }
// }

// Displaying the chessboard

// foreach ($chessboard as $row) {
//     echo implode(' ', $row) . "\n";
// }

// 5. ✅Storing Organizational Hierarchy:


// $organization = [
//     'CEO' => 'John',
//     'CTO' => [
//         'Engineering Manager' => 'Alice',
//         'Developers' => ['Bob', 'Charlie']
//     ],
//     'CFO' => 'David'
// ];

// echo "CTO: " . $organization['CTO']['Engineering Manager'];
// echo "Developers: " . implode(', ', $organization['CTO']['Developers']);

// 6. Products Database Using Multidimensional Arrays:


// $products = [
//     ['ID' => 1, 'Name' => 'Laptop', 'Price' => 800],
//     ['ID' => 2, 'Name' => 'Smartphone', 'Price' => 400],
//     ['ID' => 3, 'Name' => 'Tablet', 'Price' => 300]
// ];

// foreach ($products as $product) {
//     echo "Product ID: " . $product['ID'] . ", Name: " . $product['Name'] . ", Price: $" . $product['Price'] . "\n";
// }


// 7. Creating a Simple Student Grade Book:


// $grades = [
//     'Alice' => ['Math' => 'A', 'Science' => 'B'],
//     'Bob' => ['Math' => 'B', 'Science' => 'A'],
//     'Charlie' => ['Math' => 'A', 'Science' => 'A']
// ];

// echo "Alice's Math Grade: " . $grades['Alice']['Math'];
// echo "Bob's Science Grade: " . $grades['Bob']['Science'];

// 8. Representing a Calendar with Multidimensional Arrays:


// $calendar = [];

// for ($month = 1; $month <= 12; $month++) {
//     $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, date('Y'));
//     $calendar[date('F', strtotime("2023-$month-1"))] = $daysInMonth;
// }

// print_r($calendar);


// 9.✅ Using Multidimensional Arrays for Tabular Data:


// $students = [
//     ['Alice', 22, 'New York'],
//     ['Bob', 30, 'San Francisco'],
//     ['Charlie', 25, 'Los Angeles']
// ];

// echo "Name\tAge\tCity\n";

// foreach ($students as $student) {
//     echo implode("\t", $student) . "\n";
// }

// 10. Building a Simple Quiz with Questions and Answers:


// $quiz = [
//     ['question' => 'What is the capital of France?', 'answer' => 'Paris'],
//     ['question' => 'How many continents are there?', 'answer' => '7'],
//     ['question' => 'Who wrote "Romeo and Juliet"?', 'answer' => 'Shakespeare']
// ];

// foreach ($quiz as $index => $question) {
//     echo "Question " . ($index + 1) . ": " . $question['question'] . "\n";
// }

// These code examples demonstrate the practical use of associative arrays, multidimensional arrays, and nested arrays in various scenarios, from organizational hierarchies to representing tabular data. You can use them as a reference to implement similar functionality in your PHP projects.

//  Here are 10 coding challenges based on the concepts of associative arrays, multidimensional arrays, and their practical applications in PHP:

// 1. Student Information System:
// Create a PHP program that manages student information (name, age, and grade) using an associative array. Implement functions to add, update, and display student records.

// 2. Chessboard Validator:
// Build a PHP function that takes a chessboard represented as a multidimensional array and checks if it's valid (no two pieces of the same color can attack each other).

// 3. Employee Hierarchy:
// Develop a PHP program that represents an organizational hierarchy using a nested associative array. Implement a function to find the manager of a given employee.

// 4. Sales Report Generator:
// Create a PHP script that takes an array of sales data (product, quantity, and price) and generates a sales report with total revenue.

// 5. Calendar Event Manager:
// Build a PHP program that stores and manages events on a calendar represented by a multidimensional array. Implement functions to add, edit, and display events.

// 6. Product Inventory System:
// Develop a PHP program that manages a product inventory using a multidimensional array. Implement functions to add, update, and display product details.

// 7. Quiz Game:
// Create a PHP quiz game with questions and answers stored in a multidimensional array. Prompt the user with questions and check if their answers are correct.

// 8. Tic-Tac-Toe Validator:
// Build a PHP function that checks the result of a Tic-Tac-Toe game represented as a 2D array and determines if there's a win or a draw.

// 9. Course Enrollment System:
// Develop a PHP program that manages course enrollment for students using multidimensional arrays. Implement functions to enroll and drop courses for students.

// 10. Employee Directory:
// Create a PHP script that stores employee information (name, department, and salary) in a multidimensional array. Implement functions to filter and display employees based on criteria (e.g., department or salary range).

// These coding challenges provide opportunities to practice and reinforce your understanding of associative arrays, multidimensional arrays, and their practical applications in PHP. They cover a range of real-world scenarios where these array types are commonly used.




//✅ solution of these challenges


// 1. ✅Student Information System:


// Initialize the student database as an associative array
// $students = [];

// Function to add a student record
// function addStudent($students, $name, $age, $grade) {
//     $students[$name] = ['age' => $age, 'grade' => $grade];
//     return $students;
// }

// // Function to update a student's grade
// function updateGrade($students, $name, $newGrade) {
//     if (isset($students[$name])) {
//         $students[$name]['grade'] = $newGrade;
//     }
//     return $students;
// }

// // Function to display student records
// function displayStudents($students) {
//     foreach ($students as $name => $info) {
//         echo "Name: $name, Age: " . $info['age'] . ", Grade: " . $info['grade'] . "\n";
//     }
// }

// Add students
// $students = addStudent($students, 'Alice', 22, 'A');
// $students = addStudent($students, 'Bob', 30, 'B');

// Update a student's grade
// $students = updateGrade($students, 'Alice', 'B');

// Display student records
// displayStudents($students);



// 2.✅ Chessboard Validator:


// function isChessboardValid($board) {
//     $whiteCount = $blackCount = 0;
    
//     foreach ($board as $row) {
//         foreach ($row as $cell) {
//             if ($cell === 'W') {
//                 $whiteCount++;
//             } elseif ($cell === 'B') {
//                 $blackCount++;
//             }
//         }
//     }
    
//     return $whiteCount === $blackCount;
// }

// $validChessboard = [
//     ['W', 'B', 'W'],
//     ['B', 'W', 'B'],
//     ['W', 'B', 'W']
// ];

// $result = isChessboardValid($validChessboard);
// echo $result ? 'Valid Chessboard' : 'Invalid Chessboard';


// 3.✅ Employee Hierarchy:


// Create an organizational hierarchy as a nested associative array
// $organization = [
//     'CEO' => 'John',
//     'CTO' => [
//         'Engineering Manager' => 'Alice',
//         'Developers' => ['Bob', 'Charlie']
//     ],
//     'CFO' => 'David'
// ];

// Function to find the manager of an employee
// function findManager($organization, $employee) {
//     foreach ($organization as $manager => $team) {
//         if (is_array($team)) {
//             if (in_array($employee, $team) || array_key_exists($employee, $team)) {
//                 return $manager;
//             } else {
//                 $found = findManager($team, $employee);
//                 if ($found !== null) {
//                     return $found;
//                 }
//             }
//         }
//     }
//     return null;
// }

// $employee = 'Charlie';
// $manager = findManager($organization, $employee);
// echo "$employee's Manager: $manager";


// 4. ✅Sales Report Generator:


// Create an array of sales data (product, quantity, and price)
// $salesData = [
//     ['product' => 'Laptop', 'quantity' => 5, 'price' => 800],
//     ['product' => 'Smartphone', 'quantity' => 10, 'price' => 400],
//     ['product' => 'Tablet', 'quantity' => 8, 'price' => 300]
// ];

// Function to generate a sales report
// function generateSalesReport($salesData) {
//     $totalRevenue = 0;
//     echo "Product\tQuantity\tPrice\tTotal\n";
    
//     foreach ($salesData as $sale) {
//         $total = $sale['quantity'] * $sale['price'];
//         $totalRevenue += $total;
//         echo "{$sale['product']}\t{$sale['quantity']}\t\t{$sale['price']}\t\t$total\n";
//     }
    
//     echo "\nTotal Revenue: $totalRevenue\n";
// }

// generateSalesReport($salesData);


// 5.✅ Calendar Event Manager:


// Create a calendar as a multidimensional array
// $calendar = [
//     'January' => ['New Year', 'Party'],
//     'February' => ['Valentine\'s Day'],
//     'March' => ['Meeting', 'Birthday'],
//     // Add more months and events
// ];

// Function to add an event to the calendar
// function addEvent($calendar, $month, $event) {
//     if (isset($calendar[$month])) {
//         $calendar[$month][] = $event;
//     } else {
//         $calendar[$month] = [$event];
//     }
//     return $calendar;
// }

// Function to display events for a specific month
// function displayEvents($calendar, $month) {
//     if (isset($calendar[$month])) {
//         echo "Events in $month:\n";
//         foreach ($calendar[$month] as $event) {
//             echo "- $event\n";
//         }
//     } else {
//         echo "No events found for $month.\n";
//     }
// }

// Add an event
// $calendar = addEvent($calendar, 'April', 'Conference');

// Display events for a specific month
// displayEvents($calendar, 'April');


// 6.✅ Product Inventory System:


// Create a product inventory as a multidimensional array
// $inventory = [
//     ['ID' => 1, 'Name' => 'Laptop', 'Price' => 800, 'Stock' => 10],
//     ['ID' => 2, 'Name' => 'Smartphone', 'Price' => 400, 'Stock' => 20],
//     ['ID' => 3, 'Name' => 'Tablet', 'Price' => 300, 'Stock' => 15]
// ];

// Function to update the stock of a product
// function updateStock($inventory, $productID, $newStock) {
//     foreach ($inventory as &$product) {
//         if ($product['ID'] === $productID) {
//             $product['Stock'] = $newStock;
//             return $inventory;
//         }
//     }
//     return $inventory;
// }

// Function to display product details
// function displayProduct($product) {
//     echo "ID: {$product['ID']}, Name: {$product['Name']}, Price: {$product['Price']}, Stock: {$product['Stock']}\n";
// }

// Update the stock of a product
// $inventory = updateStock($inventory, 2, 25);

// Display product details
// foreach ($inventory as $product) {
//     displayProduct($product);
// }


// 7. Quiz Game:


// Create a quiz with questions and answers as a multidimensional array
// $quiz = [
//     ['question' => 'What is the capital of France?', 'answer' => 'Paris'],
//     ['question' => 'How many continents are there?', 'answer' => '7'],
//     ['question' => 'Who wrote "Romeo and Juliet"?', 'answer' => 'Shakespeare']
// ];

// Function to play the quiz
// function playQuiz($quiz) {
//     $score = 0;
    
//     foreach ($quiz as $index => $question) {
//         echo "Question " . ($index + 1) . ": {$question['question']}\n";
//         $userAnswer = readline("Your Answer: ");
        
//         if (strtolower($userAnswer) === strtolower($question['answer'])) {
//             echo "Correct!\n";
//             $score++;
//         } else {
//             echo "Incorrect. The correct answer is: {$question['answer']}\n";
//         }
//     }
    
//     echo "Your Score: $score/{$index + 1}\n";
// }

// playQuiz($quiz);


// 8.✅ Tic-Tac-Toe Validator:


// function isTicTacToeValid($board) {
//     $counts = ['X' => 0, 'O' => 0];
    
//     for ($row = 0; $row < 3; $row++) {
//         for ($col = 0; $col < 3; $col++) {
//             $counts[$board[$row][$col]]++;
//         }
//     }
    
//     $diff = abs($counts['X'] - $counts['O']);
//     return $diff <= 1 && !($counts['X'] > 1 && $counts['O'] > 1);
// }

// $validBoard = [
//     ['X', 'O', 'X'],
//     ['O', 'X', 'O'],
//     ['X', 'X', 'O']
// ];

// $result = isTicTacToeValid($validBoard);
// echo $result ? 'Valid Tic-Tac-Toe Board' : 'Invalid Tic-Tac-Toe Board';


// 9.✅ Course Enrollment System:


// Create a course enrollment system using a multidimensional array
// $courses = [
//     'Math' => ['Alice', 'Bob', 'Charlie'],
//     'Science' => ['David', 'Eva'],
//     'History' => ['Frank', 'Grace', 'Helen']
// ];

// Function to enroll a student in a course
// function enrollStudent($courses, $course, $student) {
//     if (isset($courses[$course])) {
//         $courses[$course][] = $student;
//     } else {
//         $courses[$course] = [$student];
//     }
//     return $courses;
// }

// Function to drop a student from a course
// function dropStudent($courses, $course, $student) {
//     if (isset($courses[$course])) {
//         $key = array_search($student, $courses[$course]);
//         if ($key !== false) {
//             array_splice($courses[$course], $key, 1);
//         }
//     }
//     return $courses;
// }

// Enroll and drop students
// $courses = enrollStudent($courses, 'Math', 'Eve');
// $courses = dropStudent($courses, 'Science', 'Eva');

// Display course enrollments
// foreach ($courses as $course => $students) {
//     echo "$course: " . implode(', ', $students) . "\n";
// }

// 10.✅ Employee Directory:


// Create an employee directory as a multidimensional array
// $employees = [
//     ['Name' => 'Alice', 'Department' => 'HR', 'Salary' => 50000],
//     ['Name' => 'Bob', 'Department' => 'Engineering', 'Salary' => 70000],
//     ['Name' => 'Charlie', 'Department' => 'Engineering', 'Salary' => 60000]
// ];

// Function to filter employees by department
// function filterByDepartment($employees, $department) {
//     $filteredEmployees = [];
//     foreach ($employees as $employee) {
//         if ($employee['Department'] === $department) {
//             $filteredEmployees[] = $employee;
//         }
//     }
//     return $filteredEmployees;
// }

// Function to filter employees by salary range
// function filterBySalaryRange($employees, $minSalary, $maxSalary) {
//     $filteredEmployees = [];
//     foreach ($employees as $employee) {
//         if ($employee['Salary'] >= $minSalary && $employee['Salary'] <= $maxSalary) {
//             $filteredEmployees[] = $employee;
//         }
//     }
//     return $filteredEmployees;
// }

// Display employees in the Engineering department
// $engineeringEmployees = filterByDepartment($employees, 'Engineering');
// echo "Engineering Department Employees:\n";
// foreach ($engineeringEmployees as $employee) {
//     echo "Name: {$employee['Name']}, Salary: {$employee['Salary']}\n";
// }

// Display employees with a salary between 60000 and 70000
// $filteredBySalary = filterBySalaryRange($employees, 60000, 70000);
// echo "Employees with Salary between 60000 and 70000:\n";
// foreach ($filteredBySalary as $employee) {
//     echo "Name: {$employee['Name']}, Salary: {$employee['Salary']}\n";
// }


// These solutions illustrate how to solve various coding challenges related to associative arrays, multidimensional arrays, and their practical applications in PHP. You can use them as a reference to implement similar functionality in your own PHP projects.





