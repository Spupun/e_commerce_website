<?php 
$conn = mysqli_connect("localhost:3307","root","","e_commerce");

if(!$conn){
    die("connection failed" .mysqli_connect_error());
}
?>
