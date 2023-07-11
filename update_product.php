<?php
include "config.php";

$id = $_GET['updateid'];
$sql = "SELECT * FROM product where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$category = $row['category'];
$description = $row['description'];
$price = $row['price'];

// $image = $row['image'];

if (isset($_POST['submit'])) {
    $category = $_POST['catagory_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
 
	
    $sql = "UPDATE `product` SET  category='$category', description='$description',price='$price'  WHERE id='$id'";
    $count = 0;
    $result = mysqli_query($conn, $sql);
 
    if ($result) {
        echo "Updated successfully.";
        header('location:show_products.php');
    } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 }


 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product_Catagories</title>
</head>
<body>
<form method="POST" action="">
		<select name="catagory_name" id="catagory">
			<option>Select</option>
			<?php
			$query = "SELECT * FROM catagories";
			$r = mysqli_query($conn, $query);
			if ($r) {
				foreach ($r as $key => $value) {
					?>
					<option value="<?= $value['id'] ?>"><?= $value['category_name'] ?></option>
					<?php
				}
			}
			?>
		</select><br>

        <b><label for="desc">Description:</label></b>
        <input type="text" name="description" value="<?php echo $description ?>"><br><br>
        <b>Price:</b> <input type="text" name="price"value="<?php echo $price ?>"> <br><br>

        <input type="submit" name="submit" value="update">

    </form>

</body>
</html>