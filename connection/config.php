<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "listofbooks";

//Connection Create garxa database sanga

$conn = new mysqli($servername, $username, $password, $dbname);

//connect vako xaki xina check garxa
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 //{
//     echo "connected successfully";
// }
