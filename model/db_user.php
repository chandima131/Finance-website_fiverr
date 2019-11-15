

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "your_database";


// echo $_POST["contactname"];     
// echo "\n";
// echo $_POST["contactemail"];
// echo "\n";



$name = $_POST["contactname"];     
$email =$_POST["contactemail"];

 


 $conn = new mysqli($servername, $username, $password,$dbname);
 // Check connection
 if ($conn->connect_error) {
     echo "false";
 }
 
 $sql = "INSERT INTO inquery (name,email) VALUES ('.$name.','.$email.')";
 
 if ($conn->query($sql) === TRUE) {
    
 echo "successfully update your data";
 } else {
     echo "false";
 }
 
 $conn->close();


?>