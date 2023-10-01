Write PHP code that uses the functions array_search() and in_array(). You must code 2 examples for each function and add code comments with your own words explaining what's happening. <br>

<?php
//an index of animals
$animals = [
    "cat",
    "dog",
    "duck",
    "cow",
    "camel",
];

//functions to look for animals and return their index value
$findCat = array_search("cat", $animals);
$findCow = array_search("cow", $animals);
$findIguana = array_search("iguana", $animals);

//call my functions and print index values
echo "Cat's index value is $findCat <br>";
echo "Cow's index value is $findCow <br>";

//if statement to print when we look for something that's not in the index
if ($findIguana === false) {
    echo "No iguanas here <br>";
};

//functions to look for specific animals in an array
$cowChecker = in_array("cow", $animals);
$horseChecker = in_array("horse", $animals);

//if statements to get this to print
if ($cowChecker === true) {
    echo "Yep, cows. <br>";
};

if ($horseChecker !== true) {
    echo "Nope, no horses. <br>";
}
?>