// 👉Let's dive into the concepts of variable scope in PHP, including local vs. global variable scope, the global keyword, and the static keyword. I'll provide code examples to illustrate each concept.

// 1.✅ Local vs. Global Variable Scope:
// In PHP, variables can have different scopes, which determine where in your code they can be accessed.

// ✅Local Variables: Variables declared inside a function are considered local to that function. They can only be accessed within that function.


// function localScopeExample() {
//     $localVar = 10;
//     echo $localVar;
// }

// localScopeExample(); // Outputs: 10

// echo $localVar; // This will result in an error, as $localVar is not accessible outside the function.


// ✅Global Variables: Variables declared outside of any function or in the global scope are considered global variables. They can be accessed from anywhere in your code.


// $globalVar = 20;

// function accessGlobalVar() {
//     global $globalVar;
//     echo $globalVar;
// }

// accessGlobalVar(); // Outputs: 20
// echo $globalVar;   // Outputs: 20


// 2.✅ Understanding the global Keyword:
// The global keyword is used inside a function to access global variables within that function.


// $globalVar = 30;

// function accessGlobalVarWithGlobalKeyword() {
//     global $globalVar;
//     echo $globalVar;
// }

// accessGlobalVarWithGlobalKeyword(); // Outputs: 30

// 3. ✅The static Keyword: Usage and Implications:
// The static keyword is used to create static variables within a function. Static variables retain their values between function calls.


// function staticVariableExample() {
//     static $counter = 0;
//     $counter++;
//     echo $counter;
// }

// staticVariableExample(); // Outputs: 1
// staticVariableExample(); // Outputs: 2
// staticVariableExample(); // Outputs: 3

// Static variables are initialized only once when the function is first called, and their values persist across subsequent calls to the same function.


// function persistentStaticVariable() {
//     static $counter = 0;
//     $counter++;
//     echo $counter;
// }

// persistentStaticVariable(); // Outputs: 1
// persistentStaticVariable(); // Outputs: 2
// // The $counter variable retains its value between function calls.
// persistentStaticVariable(); // Outputs: 3

// These are the fundamental concepts of variable scope in PHP, along with the usage of the global and static keywords. Understanding these concepts is essential for effective PHP programming, as it helps you manage and control the visibility and lifetime of your variables within your code.