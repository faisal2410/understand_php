// Introduction to Loops in PHP
// In PHP, a loop is a control structure used to execute a block of code repeatedly as long as a specified condition is true. Loops are essential in programming as they help you to execute a set of statements multiple times, which helps in reducing code redundancy.

//✅ Different Types of Loops in PHP
// For Loop
// A for loop is used when you know in advance how many times you want to execute a statement or a block of statements.

// Here is the syntax for the for loop:


// for (initialization; condition; updater) {
//     // code to be executed;
// }
// Example:


// for ($i = 0; $i < 5; $i++) {
//     echo $i . "<br>";
// }
// In the above example:

// Initialization: $i = 0 (We start counting from 0)
// Condition: $i < 5 (The loop will continue as long as $i is less than 5)
// Updater: $i++ (After each loop, $i is incremented by 1)
// While Loop
// A while loop will execute a block of code as long as the specified condition is true.

// Here is the syntax for the while loop:


// ✅while (condition) {
//     // code to be executed;
// }
// Example:


// $i = 0;
// while ($i < 5) {
//     echo $i . "<br>";
//     $i++;
// }

//✅ Do-While Loop
// A do-while loop is similar to a while loop, but it will execute the block of code at least once before checking the condition.

// Here is the syntax for the do-while loop:


// do {
//     // code to be executed;
// } while (condition);
// Example:


// $i = 0;
// do {
//     echo $i . "<br>";
//     $i++;
// } while ($i < 5);

// ✅Foreach Loop
// The foreach loop works only on arrays and is used to loop through each key/value pair in an array.

// Here is the syntax for the foreach loop:


// foreach ($array as $value) {
//     // code to be executed;
// }
// Example:


// $arr = array(1, 2, 3, 4, 5);
// foreach ($arr as $value) {
//     echo $value . "<br>";
// }
// Nested Loops
// Nested loops are loops within loops. It means you can use one loop inside another loop.

// Here is the syntax for the nested loops:


// for (initialization; condition; updater) {
//     for (initialization; condition; updater) {
//         // code to be executed;
//     }
// }
// Example:


// for ($i = 0; $i < 3; $i++) {
//     for ($j = 0; $j < 3; $j++) {
//         echo "$i, $j <br>";
//     }
// }

// In this nested loop example, we have a for loop inside another for loop, creating a grid-like pattern of output values.