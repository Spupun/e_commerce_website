<?php
include "config.php";

if(isset($_POST['submit'])){
    $category = $_POST["category"];
    $description = $_POST["description"];
    $price =$_POST["price"];

    $sql ="INSERT INTO product(category,description,price) VALUES ('$category','$description','$price')";

    $result = mysqli_query($conn,$sql);

    if($result){
        // echo "data inserted successfully!";
        header("location:show_products.php");
    }

}


?>