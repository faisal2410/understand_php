<!-- Let's delve into conditional statements in PHP. Conditional statements are a fundamental part of programming. They allow us to make decisions based on certain conditions, leading our code down different paths of execution.

1. 👉Introduction to if statements:
The if statement is the most basic form of conditional logic in PHP. It evaluates a condition and if the condition is true, the code within the curly braces {} will be executed. -->

<!-- <?php
$age = 18;

if ($age >= 18) {
    echo "You are eligible to vote.";
}

?> -->


<!-- In the code above, since $age is 18, the condition $age >= 18 evaluates to true, so "You are eligible to vote." will be printed. -->

<!-- 2.👉 Using comparison operators:
Comparison operators allow us to compare values:

== : Equal to
!= : Not equal to
< : Less than
> : Greater than
<= : Less than or equal to
>= : Greater than or equal to
Here are some examples using these operators: -->

<!-- <?php
$number = 10;

if ($number == 10) {
    echo "The number is 10.";
}

if ($number != 15) {
    echo "The number is not 15.";
}

if ($number < 20) {
    echo "The number is less than 20.";
}

if ($number > 5) {
    echo "The number is greater than 5.";
}

if ($number <= 10) {
    echo "The number is 10 or less.";
}

if ($number >= 9) {
    echo "The number is 9 or more.";
}

?> -->

<!--👉 3. Building conditions using logical operators:
Logical operators allow us to combine multiple conditions:

&& : AND
|| : OR
! : NOT
Here are examples of their usage:

Using && (AND):
Executes the code if both conditions are true. -->

<!-- <?php
$age = 20;
$hasID = true;

if ($age >= 18 && $hasID) {
    echo "You can enter the club.";
}

?> -->

<!-- In this case, because the person is over 18 and has an ID, they can enter the club.

👉Using || (OR):
Executes the code if at least one of the conditions is true. -->

<?php
$isWeekend = true;
$hasHoliday = false;

if ($isWeekend || $hasHoliday) {
    echo "You don't have to go to work.";
}

?>
<!-- Even though it's not a holiday, it's the weekend, so you don't have to go to work. -->

<!-- 👉Using ! (NOT):
Negates the condition. It's used to check if something is not true. -->

<!-- <?php
$isRaining = false;

if (!$isRaining) {
    echo "You don't need an umbrella.";
}

?> -->
<!-- Because it's not raining, you don't need an umbrella.

I hope this gives you a clearer understanding of conditional statements, comparison operators, and logical operators in PHP. As you practice and write more code, these concepts will become second nature. Happy coding!
 -->



 <!-- Let's further delve into these concepts with 10 more examples: -->

<!-- 1.👉 Simple if:
Check if a student has passed the exam. -->


<!-- <?php

$score = 40;

if ($score >= 50) {
    echo "Congratulations! You passed.";
}

?> -->


<!-- 2. 👉Using ==:
Check if today is Monday. -->

<!-- <?php
$day = "Monday";

if ($day == "Monday") {
    echo "It's the start of the workweek!";
}

?> -->

<!-- 
3. 👉Using !=:
Check if a variable is not a certain value. -->

<!-- <?php
$fruit = "apple";

if ($fruit != "banana") {
    echo "It's not a banana!";
}

?> -->


<!-- 4. 👉Using < and >:
Determining age group. -->

<!-- <?php
$age = 25;

if ($age < 20) {
    echo "Teenager.";
} elseif ($age > 20 && $age < 30) {
    echo "Young adult.";
} else {
    echo "Adult.";
}

?> -->


<!-- 5.👉 Using &&:
Checking if a student has met both attendance and score requirements. -->

<!-- <?php

$attendance = 90;  // in percentage
$score = 60;

if ($attendance >= 75 && $score >= 50) {
    echo "You are eligible for the final exam.";
}

?> -->


<!-- 6.👉 Using ||:
Checking if a user is either an admin or a moderator. -->

<!-- <?php
$userRole = "moderator";

if ($userRole == "admin" || $userRole == "moderator") {
    echo "You have special privileges.";
}

?> -->

<!-- 7. 👉Using !:
Check if user is not a guest. -->

<!-- <?php
$userRole = "member";

if (!$userRole == "guest") {
    echo "Welcome back, valued member!";
}

?> -->



<!-- 8.👉 Nested if:
Checking nested conditions. If the user is a member, further check if they are a premium member. -->

<!-- <?php
$isMember = true;
$isPremium = true;

if ($isMember) {
    if ($isPremium) {
        echo "Welcome, premium member!";
    } else {
        echo "Welcome, member!";
    }
}

?> -->


<!-- 9.👉 Using <= and >=:
Determining if a number is in a specific range. -->

<!-- <?php
$temperature = 25;

if ($temperature >= 20 && $temperature <= 30) {
    echo "It's a pleasant day!";
}

?> -->


<!-- 10.👉 Combining multiple logical operators:
Checking if a store is open based on its opening days and special holidays. -->

<!-- <?php
$day = "Sunday";
$isHoliday = false;

if (($day == "Saturday" || $day == "Sunday") && !$isHoliday) {
    echo "The store is open today!";
}

?> -->


<!-- These examples aim to give you varied scenarios to understand conditional statements, comparison operators, and logical operators better. I encourage you to modify and run these examples to observe the outcomes and gain a deeper understanding. -->











