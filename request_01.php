Create a PHP code where you use the functions: str_repeat(), str_replace(), str_word_count() and strcmp(). Write code comments with your own words to explain what those functions are doing.

<!DOCTYPE html> 
<!-- html to test on php sandbox -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Input string
$inputString = "Create a PHP code where you use the functions: str_repeat(), str_replace(), str_word_count() and strcmp(). Write code comments with your own words to explain what those functions are doing.";

//str_repeat() this function targets our $inputString variable with the first argument, and tells it to repeat 3 times with the second argument
$repeatedString = str_repeat($inputString, 3);
echo "Repeated String: $repeatedString <br>";

// Using str_replace() function to replace "Hello" with "Hi" in the input string
$replacedString = str_replace("Hello", "Hi", $inputString);
echo "Replaced String: $replacedString <br>";

// Using str_word_count() function to count the number of words in the input string
$wordCount = str_word_count($inputString);
echo "Word Count: $wordCount <br>";

// Comparing two strings using strcmp() function
$string1 = "apple";
$string2 = "orange";

$comparisonResult = strcmp($string1, $string2);

if ($comparisonResult < 0) {
    echo "$string1 comes before $string2 in the dictionary.";
} elseif ($comparisonResult > 0) {
    echo "$string1 comes after $string2 in the dictionary.";
} else {
    echo "$string1 and $string2 are the same.";
}
?>
    
</body>
</html>
