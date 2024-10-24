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
if ($_SERVER['REQUEST_METHOD'] == 'GET') 
{
 $d = $_GET['Email'];
 $b = $_GET['Password'];
 $sql = "GET INTO register(Email,Password) VALUES ('$d','$b')";
 echo "<h1>"."details retrive successfully"."</h1>";
 $conn->close();
}