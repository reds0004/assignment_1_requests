Create a PHP code where you use the functions: str_repeat(), str_replace(), str_word_count() and strcmp(). Write code comments with your own words to explain what those functions are doing. <br>

<?php
// Input string
$repeatString = "This three times. <br>";

//str_repeat() this function targets our $inputString variable with the first argument, and tells it to repeat 3 times with the second argument.
$repeatedString = str_repeat($repeatString, 3);

// to test
echo "Repeated String: <br> $repeatedString";
?>

<?php
//str_replace() this function replaces the first argument with the second argument in the targeted string.
$onString = "All the lights are on at home.";
$offString = str_replace("on", "off", $onString);
echo "before function $onString <br>";
echo "after function: $offString <br>";
?>

<?php
$stringToCount = "Create a PHP code where you use the functions: str_repeat(), str_replace(), str_word_count() and strcmp(). Write code comments with your own words to explain what those functions are doing.";

//str_word_count() this function counts the words of the argument.
$stringCounted = str_word_count($stringToCount);
echo "this string has $stringCounted words: $stringToCount <br>";
?>

<?php
//strcmp() Compares two strings based on which would come first in a dictionary and returns a value.

$stringOne = "a";
$stringTwo = "z";
$stringOneAgain = "a";

$comparisonNegative = strcmp($stringOne, $stringTwo);
echo "Negative value returned because $stringOne is before $stringTwo : $comparisonNegative <br>";

$comparisonEqual = strcmp($stringOne, $stringOneAgain);
echo "Zero returned because $stringOne is the same as $stringOneAgain : $comparisonEqual <br>";

$comparisonPositive = strcmp($stringTwo, $stringOne);
echo "Positive value returned because $stringTwo comes after $stringOne : $comparisonPositive <br>";
?>
