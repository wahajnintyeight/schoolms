<?php
$servername = "localhost";
$dbname = "sms";
$password ="";
$username = "root";
// session_start();

try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // echo "Connected successfully";
} catch (PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}
