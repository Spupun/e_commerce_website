<?php

include 'config.php';
 if(isset($_GET['deleteid'])){
      $id =$_GET['deleteid'];

     $sql = "delete from product where id = $id";
    //   $sql = "UPDATE  product SET is_deleted = 1 where id =$id";
      $result =mysqli_query($conn,$sql);
      if($result){
        echo "Deleted successfully";
        header('location:show_products.php');
      }
      else{
        die(mysqli_error($conn));
      }
 };
