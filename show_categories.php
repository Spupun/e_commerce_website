<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Categories</title>
  <style>
    .img1 {
      height: 100px;
      width: 100px;
      overflow: hidden;
    }

    .img1 img {
      height: 100%;
      width: auto;
      display: block;
      margin: 0 auto;
    }
    .my-button {
        margin: 20px;

    }
  </style>

</head>

<body>
<a href="category.php"><button type="button" class="btn btn-primary my-button">Add Category</button></a>

  <table class="table table-hover small-table" style="margin:30px">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Category Name</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Operation</th>

      </tr>
    </thead>
    <tbody>
      <?php

      include "config.php";

      $query = "SELECT * FROM catagories where is_deleted =0";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
          // echo $row['category_name'];

      ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['category_name'] ?></td>
            <td><?= $row['description'] ?></td>
            <td>
              <div class="img1">
                <img class="img-fluid" src="picture/<?= $row['image'] ?>">

              </div>
            </td>
            <!-- <td>
              <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
              <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
            </td> -->
            <td>
              <button class="btn btn-primary"><a href="update.php?updateid=<?= $row['id'] ?>" class="text-light">Update</a></button>
              <button class="btn btn-danger"><a href="delete.php?deleteid=<?= $row['id'] ?>" class="text-light">Delete</a></button>
            </td>

          </tr>

      <?php

        }
      } else {
        echo "no data found !!";
      }

      ?>


    </tbody>
  </table>

  <a href="my_home.php"><button type="button" class="btn btn-secondary my-button">Back to Home Page</button></a>

</body>

</html>