Create a page in HTML and PHP. The page must display a bulleted list of 10 names. The names must come from an array. You have to use foreach.
<html>
    <head>Request_5</head>
    <body>
        <h1>PHP Request 5</h1>
        <ul>
            <!-- defining 10 names in the array -->
            <?php 
            $tenNames = array(
                "Peter",
                "Louise",
                "Stewey",
                "Chris",
                "Meg",
                "Brian",
                "Joe",
                "Quagmire",
                "Cleveland",
                "Rick James"
            );
            // using the foreach loop to display each name as a list item
            foreach($tenNames as $tenNames) {
                echo "<li>$tenNames</li>";
            };
            ?>
        </ul>
    </body>
</html>