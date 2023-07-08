<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E_Commerce</title>
</head>

<body>

    <h1>Add Category</h1>
    <form action="category_action.php" method="post" enctype='multipart/form-data'>
        <label for="category_name">Category Name:</label>
        <input type="text" name="category_name" id="category_name"><br><br>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description"><br><br>
        <input type="file" name="image" ><br><br>
        <input type="submit" name="submit" value="Add to Category" class="btn btn-primary">
    </form>


</body>

</html>

