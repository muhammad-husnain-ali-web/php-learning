<?php

// strlen() → Length of string
$text = "Hello";
echo strlen($text); // 5
echo "<br>";

// str_word_count() → Count words
$text = "Hello World PHP";
echo str_word_count($text); // 3
echo "<br>";

// strtoupper() → Uppercase
echo strtoupper("hello"); // HELLO
echo "<br>";

// strtolower() → Lowercase
echo strtolower("HELLO"); // hello
echo "<br>";

// ucfirst() → First letter capital
echo ucfirst("ali"); // Ali
echo "<br>";

// ucwords() → First letter of each word
echo ucwords("ali khan"); // Ali Khan
echo "<br>";

// trim() → Remove spaces
$text = "  hello  ";
echo trim($text); // "hello"
echo "<br>";

// str_replace() → Replace text
$text = "I like PHP";
echo str_replace("PHP", "JavaScript", $text); // I like JavaScript
echo "<br>";

// strpos() → Find position
$text = "Hello World";
echo strpos($text, "World"); // 6
echo "<br>";

// substr() → Get part of string
$text = "Hello World";
echo substr($text, 0, 5); // Hello
echo "<br>";

?>