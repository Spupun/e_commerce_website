<?php
// include "config.php";

// if (isset($_GET['updateid'])) {
//     echo 'aaa';
//     $id = $_GET['updateid'];

//     $sql = "SELECT * FROM product where category = $id";
//     var_dump($sql);die;
//     $result = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($result) > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             echo $row['id'];
//         }
//     }
// }



include "config.php";

$id = $_GET['updateid'];
$sql = "SELECT * FROM catagories where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

// $category_name = $row['category_name'];
// $description = $row['description'];
// $image = $row['image'];

if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $description = $_POST['description'];
    
 
    // $sql = "UPDATE `catagories` SET  category_name='$category_name', description='$description' WHERE id='$id'";
 
    $result = mysqli_query($conn, $sql);
 
    if ($result) {
        echo "Updated successfully.";
    //    header('location:display.php');
    } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 }
 $conn->close();
 ?>
 