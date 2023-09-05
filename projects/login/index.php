<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<?php
session_start();

// Check if the user is logged in
if ( isset( $_SESSION['username'] ) ) {
    $username = $_SESSION['username'];
} else {
    // Redirect to the login page
    header( "Location: login.php" );
    exit();
}

// Set a cookie
setcookie( "site_language", "en", time() + 3600 );



// Display the user's username and the cookie value
echo "<p>Welcome, $username!</p>";
echo "<p>Your language preference is: " . $_COOKIE['site_language'] . "</p>";


?>
</div>

</body>
</html>