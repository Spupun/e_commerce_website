<?php

include 'config.php';
 if(isset($_GET['deleteid'])){
      $id =$_GET['deleteid'];

      // $sql = "delete from catagories where id = $id";
      $sql = "UPDATE  catagories SET is_deleted = 1 where id =$id";
      $result =mysqli_query($conn,$sql);
      if($result){
        //  echo "Deleted successfully";
         header('location:show_categories.php');
      }
      else{
        die(mysqli_error($conn));
      }
 };

?>