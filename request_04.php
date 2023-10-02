By using the date() function, display 5 dates: 100 years ago, 100 days ago, today, 100 days from today, 100 months from today. Try to use as many variables as possible to avoid repetition of time calculations.
<?php 
// making variables, with the requested time frames (strtotime used to convert dates into UNIX TIMESTAMPS)
$oneHundredYearsAgo = date("Y-m-d", strtotime("-100 years"));
$oneHundredDaysAgo = date("Y-m-d", strtotime("-100 days"));
$oneHundredDaysFromNow = date("Y-m-d", strtotime("+100 days"));
$oneHundredMonthsFromNow = date("Y-m-d", strtotime("+100 months"));
$todaysDate = date("Y-m-d");

// Displays the requested dates, on a new line becasue the the <br>
echo "100 Years ago: " . $oneHundredYearsAgo . "<br>";
echo "100 Days ago: " . $oneHundredDaysAgo . "<br>";
echo "100 days from now: " . $oneHundredDaysFromNow . "<br>";
echo "100 months from now: " . $oneHundredMonthsFromNow . "<br>";
echo "Today's date is: " . $todaysDate . "<br>";
?>