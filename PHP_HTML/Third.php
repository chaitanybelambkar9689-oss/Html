<?php
$conn = new mysqli("localhost","root","","student_db");

if($conn -> connect_error)
    {
        die("Connection failed" . $conn ->connect_error);

    }
$name = $_POST['name'];
$email =$_POST['email'];
$gender = $_POST['gender'];
$dob =$_POST['dob'];

$sql = "INSERT INTO users(name,email,gender,dob)
        VALUES('$name','$email','$gender','$dob')";

if($conn -> query($sql) == TRUE)
    {
        echo "Record Inserted Successfully!";
    }
else
    {
        echo"ERROR: ".$conn->error;
    } 
$conn -> close();       


?>    