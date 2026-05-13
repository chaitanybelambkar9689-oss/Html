<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> Welcome page</title>

    </head>

    <body>

        <?php
            date_default_timezone_set("Asia/kolkata");

            echo "<h1>Welcome to my webisite</h1>";
            echo "<p>  Today is " . date("d-m-Y") . "</p>";
            echo "<p> Current time is " . date("h:i:s a") . "</p>";
        ?>
    </body>

</html> 