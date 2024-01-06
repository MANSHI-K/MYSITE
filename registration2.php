<?php
$servername="localhost:3306";//replace with your database server hostname
$username="root";//replace with your database username
$password="";//replace with your database password
$dbname="ee";//replace with your database name

//create a connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
//get data from the form
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

//prepare and execute on sql insert statement
$sql="INSERT INTO students(sname,email,spassword)VALUES('$name','$email','$password')";
if($conn->query($sql)===TRUE)
{
    echo"data inserted successfully";
}
else
{
    echo"error:".sql."<br>".$conn->error;
}
 if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}

//prepare and execute an sql select statement to fetch data from the "students"table
$sql="SELECT sname,email,spassword FROM students";
$result=$conn->query($sql);
 if($result->num_rows>0)
{
    //output data for each row
    while($row=$result->fetch_assoc())
    {
        echo "name:".$row["sname"]. "-email:".$row["email"]. "-password:".$row["spassword"]. "<br>";
    }
}
else
{
    echo "no records found";
}
//close the connection when done
$conn->close();
?>