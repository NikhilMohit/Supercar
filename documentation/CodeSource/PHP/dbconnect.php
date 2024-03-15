<?php
// Database connection parameters
$servername = "mysql-mohivesh.alwaysdata.net";
$username = "mohivesh";
$password = "Nmohit03042004@";
$database_name = "mohivesh_supercar";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>