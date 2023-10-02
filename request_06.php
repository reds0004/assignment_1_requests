Create a page in HTML and PHP. The page must display a bulleted list of 10 links. The links URL and label must come from an array. You have to use foreach. The URL must be stored as array keys.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request 6</title>
</head>
<body>
    <h1>Request 6: Links List</h1>
    <ul>
        <?php
        //array holding links and lables
        $links = [
            "https://brightspace.algonquincollege.com/" => "Algonquin College Brightspace",
            "https://acsis.algonquincollege.com/" => "Algonquin College ASIS",
            "https://onlinephp.io/" => "Online PHP tester",
            "https://validator.w3.org/" => "w3 schools Validator",
            "https://outlook.live.com" => "Outlook Email",
            "https://www.canada.ca/en.html" => "Government of Canada",
            "https://www.reddit.com/" => "Reddit",
            "https://www.youtube.com/" => "YouTube",
            "https://www.instagram.com/" => "Instagram",
            "https://www.facebook.com/" => "Facebook"
            ];

        //iterate through $links, plug $adress into a tag's href and $label into the a tag so the link appears as the label's text ut links to the adress stored in the array.
        foreach($links as $adress => $label) {
                echo "<li><a href=$adress>$label</a></li>";
        };
        ?>
    </ul>
</body>
</html>