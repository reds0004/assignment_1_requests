Using the round() function, round up and display 3 decimal numbers stored in variables. They must be round in 1 digit precision. <br>

<?php
//numbers as variables
$numOne = 12.34634;
$numTwo = 19.84215;
$numThree = 11.23943;

//fuctions calling the variables in argument one. Argument two sets deciaml precision. Argument three sets 5 to be rounded up (0.5 would go up to one).
$roundOne = round($numOne, 1, PHP_ROUND_HALF_UP);
$roundTwo = round($numTwo, 1, PHP_ROUND_HALF_UP);
$roundThree = round($numThree, 1, PHP_ROUND_HALF_UP);

//call my rounding functions
echo "number one $roundOne <br>";
echo "number two $roundTwo <br>";
echo "number three $roundThree <br>";
?>