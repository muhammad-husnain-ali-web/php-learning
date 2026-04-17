<?php 

echo "<h1>Conditions Practice</h1>";
echo "<br>";

// if
$age = 20;
if ($age >= 18) {
    echo "You can vote";
}
echo "<br>";

// if-else
$age = 16;

if ($age >= 18) {
    echo "You can vote";
} else {
    echo "You cannot vote";
}
echo "<br>";

// if-elseif-else
$marks = 75;

if ($marks >= 80) {
    echo "Grade A";
} elseif ($marks >= 50) {
    echo "Pass";
} else {
    echo "Fail";
}
echo "<br>";

// Using Logical Operators Inside Conditions
$age = 20;
$hasID = true;

if ($age >= 18 && $hasID) {
    echo "Entry allowed";
} else {
    echo "Entry denied";
}
echo "<br>";

// Nested if
$age = 20;

if ($age >= 18) {
    if ($age < 60) {
        echo "Adult";
    }
}
echo "<br>";

?>