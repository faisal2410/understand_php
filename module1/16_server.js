// Understanding $_SERVER
// In PHP, $_SERVER is a superglobal variable, which means that it is available in all scopes throughout a script. It is an array that holds information about headers, paths, and script locations. The entries in this array are created by the web server and contain data related to the current script and the HTTP request.

// Here's an example of using $_SERVER to get the user's IP address and the user agent string (which identifies the user's browser):


// <?php
// echo 'User IP Address: ' . $_SERVER['REMOTE_ADDR'] . '<br>';
// echo 'User Agent: ' . $_SERVER['HTTP_USER_AGENT'] . '<br>';
// ?>


// Understanding $_SERVER["REQUEST_METHOD"]
// The $_SERVER["REQUEST_METHOD"] entry in the $_SERVER superglobal array allows you to determine the HTTP method used to access the page. Typically, this will be one of the methods like 'GET', 'POST', 'PUT', 'DELETE', etc.

// In many cases, you will use this entry to check if a form has been submitted using the "POST" method, like this:


// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // The form was submitted using the POST method
//     // Process the form data
// }
// ?>


// Combining $_SERVER and $_SERVER["REQUEST_METHOD"] to Handle Form Submissions
// Let's build upon the previous example to demonstrate how you might use $_SERVER["REQUEST_METHOD"] to handle form submissions in a real PHP script. Below, we have a simple HTML form and a PHP script that processes the form data if the request method is "POST":


// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // The form was submitted using the POST method
//     $name = htmlspecialchars($_POST["name"]);
//     echo "Hello, " . $name . "!";
// }
// ?>

// <!DOCTYPE html>
// <html>
// <head>
//     <title>Form Handling in PHP</title>
// </head>
// <body>

// <form method="POST" action="">
//     Name: <input type="text" name="name"><br><br>
//     <input type="submit" value="Submit">
// </form>

// </body>
// </html>

// In the above script:

// We use $_SERVER["REQUEST_METHOD"] to check if the form was submitted using the POST method.
// If the form was submitted using the POST method, we use the $_POST superglobal to get the value of the name input field.
// We then use htmlspecialchars() to sanitize the input and prevent XSS attacks before echoing a greeting to the user.
// I hope this gives you a clear understanding! If you have any further questions or topics you'd like to explore, feel free to ask.


// ✅Understanding $_POST
// In PHP, $_POST is a superglobal array that is used to collect form data sent in an HTTP POST request. It allows you to access the data sent in the request body, which is often used to collect data from HTML forms.

// Usage of $_POST
// 1. Basic Usage
// You can use $_POST to get the value of individual form fields using syntax like $_POST['fieldname']. Here's a basic example:


// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     echo "Hello, $name!";
// }
// ?>
// <form method="POST">
//     Name: <input type="text" name="name"><br><br>
//     <input type="submit" value="Submit">
// </form>
// In this script:

// The HTML form uses the POST method to send data to the server.
// We use $_POST['name'] to get the value of the name input field when the form is submitted.
// 2. Sanitizing Input
// To protect your application from XSS (Cross-Site Scripting) attacks and other potential vulnerabilities, it's essential to sanitize user input before using it. You can use PHP's htmlspecialchars function to do this:


// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = htmlspecialchars($_POST['name']);
//     echo "Hello, $name!";
// }
// ?>
// 3. Checking if a Form Field is Set
// Before you access a form field with $_POST, it's a good practice to check if the field is set using isset() to avoid PHP undefined index notices:


// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['name'])) {
//         $name = htmlspecialchars($_POST['name']);
//         echo "Hello, $name!";
//     } else {
//         echo "Name field is not set.";
//     }
// }
// ?>
// 4. Working with Different Input Types
// You can work with various input types, such as text, radio buttons, checkboxes, and others using $_POST. Here is an example with a radio button:


// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $gender = htmlspecialchars($_POST['gender']);
//     echo "You selected: $gender";
// }
// ?>
// <form method="POST">
//     <input type="radio" name="gender" value="Male"> Male<br>
//     <input type="radio" name="gender" value="Female"> Female<br><br>
//     <input type="submit" value="Submit">
// </form>
// I hope this helps you understand how to use $_POST in PHP! If you have any further questions, feel free to ask.






// <?php
// echo $_SERVER['SERVER_NAME'];
// ?>

//  <?php
//  echo 'User IP Address: ' . $_SERVER['REMOTE_ADDR'] . '<br>';
//  echo 'User Agent: ' . $_SERVER['HTTP_USER_AGENT'] . '<br>';
//  ?> 


