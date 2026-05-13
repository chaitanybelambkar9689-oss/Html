<!DOCTYPE html>
<html lang ="en">
    <head>  
        <title> String Manipulation in PHP</title>
    </head>

<body>
    <h2>PHP string Manipulation Program</h2>

    <?php
    $str ="Hello World";

    echo "<h3>Original string :. $str.</h3>";

    echo " Length of string :" . strlen($str) . "<br><br>";

    echo " Reveresed string : ".strrev($str)."<br><br>";

    echo " Substring (0,5) : ".substr($str,0,5)."<br><br>";

    echo"Upper case:" .strtoupper($str)."<br><br>";

    echo "Lowercase : ".strtolower($str)."<br><br>";
    ?>



</body>    
</html>