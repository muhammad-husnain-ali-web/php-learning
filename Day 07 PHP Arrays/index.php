<?php
// Why Arrays?
// Instead of creating multiple variables, we can use arrays to store multiple values in a single variable
$name1 = "Ali";
$name2 = "Ahmed";
$name3 = "Sara";

// Instead of this, we can use an array
$names = ["Ali", "Ahmed", "Sara"];

// Access Array Values
echo $names[0]; // Ali
echo "<br>";
echo $names[1]; // Ahmed
echo "<br>";
// what about $names[3]? It will give an error because it doesn't exist. Always check array length before accessing.

// Index starts from 0

// Loop Through Array
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
}


// Associative Array (VERY IMPORTANT)
// Key → Value pair
$user = [
    "name" => "Ali",
    "age" => 20,
    "city" => "Lahore"
];

echo $user["name"];
echo "<br>";
echo $user["age"];
echo "<br>";
echo $user["city"];
echo "<br>";

// foreach Loop (Best for Arrays)
$names = ["Ali", "Ahmed", "Sara"];

foreach ($names as $name) {
    echo $name . "<br>";
}

//  Associative with foreach:
$user = [
    "name" => "Ali",
    "age" => 20
];

foreach ($user as $key => $value) {
    echo "$key: $value <br>";
}
// Add & Modify Array
$names[] = "Usman"; // add
$names[0] = "Hassan"; // update

?>