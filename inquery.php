

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "your_database";


// echo $_POST["contactname"];     
// echo "\n";
// echo $_POST["contactemail"];
// echo "\n";



$Nombre = $_POST["Nombre"];     
$emailaddress =$_POST["emailaddress"];

 


 $conn = new mysqli($servername, $username, $password,$dbname);
 // Check connection
 if ($conn->connect_error) {
     echo "false";
 }
 
 $sql = "INSERT INTO inquery (Nombre,emailaddress) VALUES ('.$Nombre.','.$emailaddress.')";
 
 if ($conn->query($sql) === TRUE) {
    
 echo "successfully update your data";
 } else {
     echo "false";
 }
 
 $conn->close();


?>