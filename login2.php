<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="ee";
//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn-> connect_error)
{
    die("connection failed:" . $conn->connect_error);
}

//get data fromthe login form
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

//prepare and execute an sql select statement using prepared statements
$sql= "SELECT*FROM students WHERE sname='$name' AND email='$email' AND spassword='$password'";
$result=$conn->query($sql);

if($result->num_rows>=1)
{
    //login successful
    echo "login successful";
    //redirect to the home page 
    $_SESSION['username']=$name;
    header("location: welcome.php");
    exit();
    //make sure to exit after a header redirect
}
else
{
    //login failed
    echo "login failed.please check your name,email and password";
}
    
//close the connection when done
$stmt->close();
$conn->close();
?>