<?php
include "config.php";

$id = $_GET['updateid'];
$sql = "SELECT * FROM catagories where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$category_name = $row['category_name'];
$description = $row['description'];
// $image = $row['image'];

if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $description = $_POST['description'];
    
 
    $sql = "UPDATE `catagories` SET  category_name='$category_name', description='$description' WHERE id='$id'";
 
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E_Commerce</title>
</head>

<body>

    <h1>Add Category</h1>
    <form action="" method="post" enctype='multipart/form-data'>
        <label for="category_name">Category Name:</label>
        <input type="text" name="category_name" id="category_name" value="<?php echo $category_name ?>"><br><br>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description"value="<?php echo $description ?>"><br><br>
        <input type="file" name="image" ><br><br>
        <input type="submit" name="submit" value="Add to Category" class="btn btn-primary">
    </form>


</body>

</html>

