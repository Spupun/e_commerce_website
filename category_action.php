<?php
include "config.php";

if (isset($_POST['submit'])) {
    
    $categoryname = $_POST['category_name'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];    
    $sql = "INSERT INTO catagories (category_name,description,image) VALUES ('$categoryname','$description','$image')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Data inserted successfully !!";
        header("location:show_categories.php");
        move_uploaded_file($_FILES['image']['tmp_name'], "picture/$image");
    }


}
// mysqli_close($conn);


