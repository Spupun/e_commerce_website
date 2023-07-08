<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Categories</title>
</head>

<body>
  <table class="table table-hover small-table" style="margin:30px">
    <thead>
      <tr>
      <th scope="col">Sl no.</th>
        <th scope="col">Category_id</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
      <?php

      include "config.php";

      $query = "SELECT * FROM product";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
          // echo $row['category_name'];

          ?>
          <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['category'] ?></td>
          <td><?= $row['description'] ?></td>
          <td><?= $row['price'] ?></td>

        </tr>
        <?php
      
        }
      } 
      else {
        echo "no data found !!";
      }

      ?>

     
    </tbody>
  </table>


 <a href="index.php"><button type="button"  class="btn btn-primary">Back to Home Page</button></a>

</body>

</html>