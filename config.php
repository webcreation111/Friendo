<?php
$hostname='localhost';
$username='root';
$password='';
$database='profile';

$mysquli=mysqli_connect($hostname,$username,$password,$database);

if (!$mysquli) {
    die("Database connection failed: " . mysqli_connect_error());
}
    echo "Database connected successfully";
?>
