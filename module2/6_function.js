//👉 Introduction to Functions in PHP:

// A function in PHP is a block of reusable code that performs a specific task. Functions are essential for modularizing your code and making it more organized.


// // Defining a simple function
// function greet() {
//     echo "Hello, World!";
// }

// Calling the function
// greet();

// 2. ✅Declaring and Executing Functions:
// To declare a function, use the function keyword followed by the function name and a pair of parentheses. To execute a function, simply call its name followed by parentheses.

// 3.✅ Parameters and Arguments in Functions:
// Parameters are placeholders for values that a function will receive and work with. Arguments are the actual values passed to the function when it's called.


// function greetWithName($name) {
//     echo "Hello, $name!";
// }

// // Calling the function with an argument
// greetWithName("Alice");

// 4.✅ Setting Default Parameter Values:
// You can set default values for function parameters. If an argument isn't provided when calling the function, it will use the default value.


// function greetWithDefault($name = "Guest") {
//     echo "Hello, $name!";
// }

// // Calling the function without an argument
// greetWithDefault(); // Output: Hello, Guest

// 5. ✅Function Return Types:
// PHP 7.0 introduced return type declarations, allowing you to specify the type of value a function should return.


// function add($a, $b): int {
//     return $a + $b;
// }

// $result = add(3, 4); // $result is an integer

// 6. ✅Type Hinting in Functions:
// Type hinting allows you to specify the expected data type of a function's parameters. This helps in enforcing data integrity.


// function divide(int $a, int $b): float {
//     if ($b === 0) {
//         throw new Exception("Division by zero is not allowed.");
//     }
//     return $a / $b;
// }

// $result = divide(10, 2); // $result is a float

// Type hinting ensures that the provided arguments match the expected data types, and it also provides better code readability.

// In summary, functions in PHP are essential for code organization and reusability. You can define functions, pass parameters with default values, specify return types, and use type hinting to make your code more robust and maintainable. These concepts will help you write cleaner and more efficient PHP code.



// Here are 10 real-world examples of functions in PHP:

// ✅User Authentication Function:
// A function to check if a user's credentials are valid.

// function authenticateUser($username, $password) {
//     // Check username and password in the database
//     // Return true if valid, false otherwise
// }


// ✅Email Sending Function:
// A function to send emails with proper error handling.

// function sendEmail($to, $subject, $message) {
//     // Code to send email using a library like PHPMailer or SwiftMailer
// }


//✅ Database Connection Function:
// A function to establish a database connection.

// function connectToDatabase() {
//     $connection = mysqli_connect("host", "user", "password", "database");
//     return $connection;
// }


//✅ File Upload Function:
// A function to handle file uploads and validations.

// function uploadFile($file) {
//     // Handle file upload and validation
//     // Return true on success, false on failure
// }


// Currency Conversion Function:
// A function to convert currency using an API.

// function convertCurrency($amount, $fromCurrency, $toCurrency) {
//     // Use a currency conversion API to convert amounts
//     // Return the converted amount
// }


// ✅Logging Function:
// A function to log errors or events to a file.

// function logEvent($message) {
//     $logFile = fopen("error.log", "a");
//     fwrite($logFile, date("Y-m-d H:i:s") . " - " . $message . "\n");
//     fclose($logFile);
// }


//✅ Image Resizing Function:
// A function to resize and save images.

// function resizeImage($sourceFile, $targetFile, $width, $height) {
//     // Resize the image and save it to the target file
// }


// ✅Data Validation Function:
// A function to validate user input data.

// function validateData($data) {
//     // Perform data validation checks
//     // Return true if data is valid, false otherwise
// }


// ✅HTTP Request Function:
// A function to make HTTP requests to external APIs.

// function makeHttpRequest($url, $method = 'GET', $data = null) {
//     // Make HTTP requests using cURL or other libraries
//     // Return the response
// }


// ✅Shopping Cart Function:
// A function to manage a user's shopping cart in an e-commerce website.

// function addToCart($product, $quantity) {
//     // Add products to the user's shopping cart
// }


// These examples demonstrate how functions can be used to encapsulate and reuse code for various tasks in real-world PHP applications. Functions make your code more modular, readable, and maintainable.