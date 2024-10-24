<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mini project";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) 
{
 die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
 $x = $_POST['patientname'];
 $y = $_POST['Telephonenumber'];
 $z = $_POST['Homeaddress'];
 $u = $_POST['City'];
 $h = $_POST['DateofBirth'];
 $s = $_POST['Email'];
 $e = $_POST['Password'];
 $sql = "INSERT INTO register (patientname,Telephonenumber,Homeaddress,City,DateofBirth,Email,Password) VALUES ('$x', '$y', '$z','$u','$h','$s','$e')";
 if ($conn->query($sql) === TRUE) 
 {
 echo "<h1>"."New record created successfully"."</h1>";
 } 
 else 
 {
echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
}
?>