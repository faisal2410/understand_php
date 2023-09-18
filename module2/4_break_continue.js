// 👉In PHP, the for loop is a control structure that allows you to execute a block of code repeatedly based on a specified number of iterations. The continue and break statements are used within loops to control the flow of execution.

// Let's start with the break statement:

// ✅break Statement:
// The break statement is used to exit the loop prematurely. When a break statement is encountered within a loop, the loop is immediately terminated, and the program continues with the code after the loop. It's often used when a certain condition is met, and you want to exit the loop early.

// Here's an example of using break in a for loop:


// for ($i = 1; $i <= 10; $i++) {
//     if ($i == 5) {
//         break; // Exit the loop when $i equals 5
//     }
//     echo $i . " ";
// }

// // Output: 1 2 3 4


// In this example, the loop runs from 1 to 10. When $i equals 5, the break statement is executed, and the loop is terminated.

// ✅continue Statement:
// The continue statement is used to skip the rest of the current iteration of the loop and move to the next iteration. It's handy when you want to skip certain iterations based on a condition but continue looping.

// Here's an example of using continue in a for loop:


// for ($i = 1; $i <= 10; $i++) {
//     if ($i % 2 == 0) {
//         continue; // Skip even numbers
//     }
//     echo $i . " ";
// }

// // Output: 1 3 5 7 9


// In this example, the loop runs from 1 to 10. When $i is an even number (i.e., $i % 2 == 0), the continue statement is executed, and that iteration of the loop is skipped.

// Remember that break and continue can be used in different types of loops (not just for loops) and are not limited to PHP. They are essential control flow tools in many programming languages.

// I hope these examples help clarify the use of break and continue within for loops in PHP. If you have any further questions or need more examples, feel free to ask!




// ✅Example 1: Skipping Weekends

// for ($day = 1; $day <= 7; $day++) {
//     if (date('N', strtotime("2023-09-$day")) >= 6) {
//         continue; // Skip Saturday (6) and Sunday (7)
//     }
//     echo "Do work on day $day.\n";
// }


// In this example, we use continue to skip the weekend days (Saturday and Sunday) when processing a week.

// ✅Example 2: Searching for a Specific Value

// $numbers = [2, 4, 6, 8, 10, 12, 14, 16];
// $searchValue = 10;

// for ($i = 0; $i < count($numbers); $i++) {
//     if ($numbers[$i] === $searchValue) {
//         echo "Found $searchValue at index $i.\n";
//         break; // Exit the loop when the value is found
//     }
// }

// Here, break is used to stop the loop as soon as the desired value is found.

// ✅Example 3: Processing Files Until a Condition is Met

// $files = glob('*.txt');

// foreach ($files as $file) {
//     if (filesize($file) > 1000) {
//         echo "Found a large file: $file.\n";
//         break; // Stop processing when a large file is found
//     }
//     processFile($file);
// }


// This code iterates through a list of text files and breaks the loop if it encounters a file larger than 1000 bytes.

// ✅Example 4: Validating User Input

// $userInput = ['John', 'Doe', 'johndoe.com'];

// for ($i = 0; $i < count($userInput); $i++) {
//     if (!isValid($userInput[$i])) {
//         echo "Invalid input: " . $userInput[$i] . "\n";
//         break; // Stop processing invalid input
//     }
//     echo "Valid input: " . $userInput[$i] . "\n";
// }

// Here, break is used to exit the loop when invalid user input is encountered during validation.

// ✅Example 5: Early Termination in a Game

// $gameOver = false;

// for ($turn = 1; $turn <= 10; $turn++) {
//     if (isGameOver()) {
//         $gameOver = true;
//         break; // Exit the loop when the game is over
//     }
//     playTurn($turn);
// }

// if ($gameOver) {
//     echo "Game over!\n";
// }

// In a game simulation, break is used to stop the loop when the game is over, avoiding unnecessary turns.

// ✅Example 6: Handling Exceptional Cases

// $numbers = [1, 3, 5, 7, 9, 11, 13, 15];

// for ($i = 0; $i < count($numbers); $i++) {
//     if ($numbers[$i] % 2 == 0) {
//         echo "Unexpected even number found: " . $numbers[$i] . "\n";
//         continue; // Skip even numbers
//     }
//     echo "Processing odd number: " . $numbers[$i] . "\n";
// }
// Here, continue is used to handle exceptional cases (even numbers) differently from the regular processing.

// ✅Example 7: Skipping Header Rows in CSV Processing

// $rows = file('data.csv');

// for ($i = 0; $i < count($rows); $i++) {
//     if ($i === 0) {
//         continue; // Skip the header row
//     }
//     processCSVRow($rows[$i]);
// }

// This code skips the header row when processing data from a CSV file using continue.

// ✅Example 8: Early Exit in a Loop with Multiple Conditions

// $items = getItems();

// for ($i = 0; $i < count($items); $i++) {
//     if (isOutOfStock($items[$i])) {
//         echo "Item out of stock: " . $items[$i] . "\n";
//         break; // Exit the loop when an item is out of stock
//     }
//     if (isExpired($items[$i])) {
//         echo "Item expired: " . $items[$i] . "\n";
//         break; // Exit the loop when an item is expired
//     }
//     processItem($items[$i]);
// }

// In this scenario, break is used to exit the loop if either an item is out of stock or an item is expired.

// ✅Example 9: Handling Errors While Processing Data

// $data = fetchData();

// for ($i = 0; $i < count($data); $i++) {
//     if (!isValidData($data[$i])) {
//         echo "Invalid data encountered. Skipping...\n";
//         continue; // Skip invalid data
//     }
//     processValidData($data[$i]);
// }
// Here, continue is used to skip invalid data records while processing a data set.

// ✅Example 10: Implementing Pagination

// $itemsPerPage = 10;
// $totalItems = getTotalItems();

// for ($page = 1; $page <= ceil($totalItems / $itemsPerPage); $page++) {
//     // Display items for the current page
//     $start = ($page - 1) * $itemsPerPage;
//     $end = min($start + $itemsPerPage, $totalItems);

//     for ($i = $start; $i < $end; $i++) {
//         displayItem($i);
//     }

//     if (userWantsToQuit()) {
//         break; // Exit pagination loop if the user wants to quit
//     }
// }


// In this example, break is used to exit the pagination loop if the user decides to quit the pagination process.

// These examples illustrate how break and continue statements can be applied in real-world scenarios within for loops in PHP to control flow and make your code more efficient and responsive to specific conditions.