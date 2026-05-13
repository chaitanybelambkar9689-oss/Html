<!DOCTYPE html>
<html lang ="en">
    <head>
        <title> PHP Post Method example</title>

        <style> 
            body{
                font-family : Arial,san-serif;
                margin : 40px;
            
            }

            form 
            {
                width : 300px;
                padding : 20px;
                border : 1px solid #000;
                border-radius : 8px;
            }

            input[type="text"],
            input[type="email"]
            {
                width: 100%;
                padding: 8px;
                margin:  8px 0;
            }

            input[type="submit"]
            {
                padding : 8px 15px;
            }

            .result 
            {
                margin-top: 20px;
                padding: 15px;
                border: 1px solid green;
                backgroud-color : #f0ff;
            }
        </style>
    </head>
    <body> 
        <h2> User  Information Form</h2>

        <form  method = "post" action="">
            
            <label for ="name" > Name: </label></br>
            <input type ="text" id ="name" name="name">

             <label for ="email" > Email: </label></br>
            <input type= "email" id = "email" name = "email">

            <input type="submit" value="submit">

        </form> 
        
        <? php
        if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $name = $_POST["name"];
                $email = $_POST["email"];

                echo "<div class='result'>";
                echo " <h3> Submitted Data : </h3>";
                echo "Name: ".$name ."<br>";
                echo "Email:".$email;
                
            }
            ?>

   </body> 
   </html>   
    