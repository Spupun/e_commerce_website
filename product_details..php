<?php
include "config.php";
include "my_home.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>
</head>

<body>

    <form action="product_action.php" method="post">
        <b><label for="product desc">Category:</label></b>
        <select name="category">
            <option value="">Select</option>
            <?php
            $query = "SELECT * FROM catagories";
            $result = mysqli_query($conn, $query);
            if ($result) {
                foreach ($result as $key => $value) {
            ?>
                    <option value="<?= $value['id'] ?>"><?= $value['category_name'] ?></option>

            <?php }
            } ?>

        </select><br><br>

        <b><label for="desc">Description:</label></b>
        <input type="text" name="description"><br><br>
        <b> Price</b> <input type="text" name="price"> <br><br>

        <input type="submit" name="submit" value="submit">

    </form>

</body>

</html>