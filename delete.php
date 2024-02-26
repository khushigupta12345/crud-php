<?php
include 'connect.php';
// if(isset($_GET['id']))
// {
    $id = $_GET['id'];
    
    $select_sql = "DELETE FROM `emp` WHERE id = '$id'";
    $result = mysqli_query($conn,$select_sql);
    if($result)
    {
      echo "<script>alert('data deleted successfully')</script>";
    }
    header('location:display.php');
//}
?>