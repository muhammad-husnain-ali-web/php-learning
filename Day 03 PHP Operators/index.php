<?php 

echo "<h1> Operators Practice </h1>";

// Arithmetic Operators
$a = 10;
$b = 5;

echo $a + $b; // 15
echo "<br>";
echo $a - $b; // 5
echo "<br>";
echo $a * $b; // 50
echo "<br>";
echo $a / $b; // 2
echo "<br>";

// Assignment Operators
$x = 10;

$x += 5; // 15
$x -= 3; // 12

// Shortcut for updating values.

// Comparison Operators (VERY IMPORTANT)
$a = 10;
$b = 5;

var_dump($a == $b);  // false
var_dump($a != $b);  // true
var_dump($a > $b);   // true
var_dump($a < $b);   // false
var_dump($a >= 10);  // true

// Logical Operators
$x = 10;
$y = 5;

var_dump($x > 5 && $y < 10); // true
var_dump($x > 5 || $y > 10); // true
var_dump(!($x > 5));         // false

?>