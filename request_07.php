Create a page in HTML and PHP. Both the title and the main heading of the page must be stored in a variable. The page will contain a table with two columns and 5 rows. Use a single array to store the table values. Use foreach to render the table.
4458

Mary

9874

Victor

3569

Mathew

1145

John

3574

Peter

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        // Title and main heading variable
        $pageInfo = "Request 07";
        //call for title
        echo "<title>$pageInfo</title>";
    ?>
</head>
<body>
    <?php
    //call for h1
    echo "<h1>$pageInfo</h1>"
    ?>
    <!-- open table -->
    <table>
        <!-- array holding table info -->
        <?php
        $tableInfo = [
            4458 => "Mary",
            9874 => "Victor",
            3569 => "Mathew",
            1145 => "John",
            3574 => "Peter",
        ];

        //iterate array
        foreach($tableInfo as $tableNumber => $tableName) {
            //open table row for each iteration and add two columns to each row containing $tableInfo number and name
            echo
            "<tr>
                <td>$tableNumber</td>
                <td>$tableName</td>
            </tr>";
        };
        ?>
    </table>
</body>
</html>