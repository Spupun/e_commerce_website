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
  </style>

</head>

<body>
  <div class="container">
    <h1>Categories</h1>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Category Name</th>
          <th scope="col">Description</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Assuming you have established the database connection using $conn

        include "config.php";

        $query = "SELECT * FROM catagories";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['category_name'] ?></td>
              <td><?= $row['description'] ?></td>
              <td>
                <div class="img1">
                  <img class="img-fluid" src="picture/<?= $row['image'] ?>">
                </div>
              <td>
                <!-- <a href="viewmore.php?id=<?= $row['id'] ?>" class="btn btn-primary">View More</a> -->

                <button class="btn btn-primary"><a href="viewmore.php?updateid=<?= $row['id'] ?>" class="text-light">View More</a></button>

              </td>
              </td>
            </tr>
          <?php
          }
        } else {
          ?>
          <tr>
            <td colspan="4">No data found!</td>
          </tr>
        <?php
        }

        mysqli_close($conn); 
        ?>
      </tbody>
    </table>

    <a href="index.php" class="btn btn-primary">Back to Home Page</a>
  </div>

</body>

</html>