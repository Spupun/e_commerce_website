<?php 
$conn = mysqli_connect("localhost:3307","root","","kytics");

if(!$conn){
    die("connection failed" .mysqli_connect_error());
}
?>