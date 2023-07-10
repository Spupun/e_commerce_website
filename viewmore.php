<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   table {
      border-collapse: collapse;
      margin: auto;
      width: 80%;
      border: 1px solid lightcoral;
    }
    
    th, td {
      border: 1px solid lightcoral;
      padding: 8px;
      background-color: yellow;
      text-align: center;
    }
    
    th {
      background-color: lightcoral;
      color: white;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    tr:hover {
      background-color: #ddd;
    }
    </style>
</head>
<body>
    <table>
        <tr>
        <th>Product Name</th>
        <th>Price</th>
        </tr>
<?php
     include "config.php";
     $id=$_GET['updateid'];

     $query="SELECT * FROM product WHERE category='$id'";

     $result=mysqli_query($conn,$query);
     if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            ?>

        <tr><td><?php echo $row['description'] ?></td>
        <td><?php echo $row['price'] ?></td>
        </tr>
<?php
        }
     }
?>
