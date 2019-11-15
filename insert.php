

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
$surname=$_POST["surname"]; 
$email =$_POST["contactemail"];
$state=$_POST["state"];
 $contactNumber=$_POST["contactNumber"];
 $amount=$_POST["amount"];
 $gurentee=$_POST["gurentee"];
 $term=$_POST["term"];
 
 


 $conn = new mysqli($servername, $username, $password,$dbname);
 // Check connection
 if ($conn->connect_error) {
     echo "false";
 }
 
 $sql = "INSERT INTO contacts (name,surname, email,state,contactNumber,amount,gurentee,term) VALUES ('$name','$surname', '$email','$state','$contactNumber','$amount','$gurentee','$term')";
 
 if ($conn->query($sql) === TRUE) {
    
 echo "successfully update your data";
 } else {
     echo "false";
 }
 
 $conn->close();


?>