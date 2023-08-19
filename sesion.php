<?php
session_start();
$_SESSION['username'] = 'saad_sheikh';
$_SESSION['user_id'] = 111;

echo "Welcome, " . $_SESSION['username'];
echo "\n .Your user ID is: " . $_SESSION['user_id'];

$_SESSION['username'] = 'masum raihan'; // Modify session variable

unset($_SESSION['user_id']); // Remove session variable

session_destroy();
?>