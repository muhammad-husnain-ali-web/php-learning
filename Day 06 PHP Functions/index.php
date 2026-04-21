<?php

// Basic Function
function sayHello() {
    echo "Hello World";
    echo "<br>";
}

sayHello(); // calling function

// Function with Parameters
function greet($name) {
    echo "Hello $name";
    echo "<br>";
}

greet("Ali");
greet("Ahmed");

// Function with Return (VERY IMPORTANT)
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3);
echo $result; // 8
echo "<br>";

// Default Parameter
function greeting($name = "Guest") {
    echo "Hello $name";
    echo "<br>";
}

greeting();        // Guest
greeting("Ali");   // Ali


// Real Example
function isEven($num) {
    if ($num % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

echo isEven(10); // Even
echo "<br>";
echo isEven(7);  // Odd
echo "<br>";

?>