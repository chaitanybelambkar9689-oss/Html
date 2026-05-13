<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Array Example
        </title>


    </head>

    <body>

    <h2> PHP Array Example</h2>

    <?php
    $fruits = array("Apple","Banana","Mango","Orange","Grapes");

    echo "<h3> Values stored in array : <h3> ";

    foreach($fruits as $fruit)
        {
            echo $fruit ."<br>";
        }
     ?>
     
    </body>
</html>