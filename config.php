<?php

ini_set('display_errors','0');
$PASSWORD = 'codernewbie';

$servername = "localhost";
$username = "EDIT_THIS";
$password = "EDIT_THIS";
$db = "EDIT_THIS";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . $conn->connect_error);
} 
