<?php
  include 'connect.php';
  // if(isset($_GET['id']))
  // {
    $id = $_GET['id'];
    
    if(isset($_POST['submit']))
    {
       $name_emp = $_POST['emp_name'];
       $phone_emp = $_POST['emp_phone'];
       $salary_emp = $_POST['emp_salary'];
       $dgs_emp = $_POST['emp_dgs'];

       $query = "UPDATE `emp` SET `emp_name`= '$name_emp', `emp_phone`= '$phone_emp', `emp_salary`= '$salary_emp', `emp_dgs`= '$dgs_emp' WHERE `id` = '$id'";
         $result = mysqli_query($conn,$query);
         if($result)
         {
            echo "<script>alert('data updated successfully'); window.location.href='display.php'</script>";
         } 
         else
         {
            echo "<script>alert('data not updated successfully')</script>";
         }
    }
//}

    $select_sql = "SELECT * FROM emp WHERE id = '$id'";
    $result = mysqli_query($conn,$select_sql);
    $rows = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
     <!--css file--->
     <link rel="stylesheet" href="style.css">
    <!---bootstrap css link--->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link--->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   </head>
 <body>
   <div class="container w-50 bg-info">
    <h2 class="text-center bg-secondary w-100 text-light mt-5">Update Details</h2>
     <form action="" method="POST">
        <lable class="form-lable text-light">Emp Name</lable>
        <input type="text" name="emp_name" class="form-control" value="<?= $rows['emp_name'];?>">
        <lable class="form-lable text-light">Emp Mobile</lable>
        <input type="text" name="emp_phone" class="form-control" value="<?= $rows['emp_phone'];?>">
        <lable class="form-lable text-light">Emp Salary</lable>
        <input type="text" name="emp_salary" class="form-control" value="<?= $rows['emp_salary'];?>">
        <lable class="form-lable text-light">Emp Dgs</lable>
        <input type="text" name="emp_dgs" class="form-control" value="<?= $rows['emp_dgs'];?>">
        <input type="submit" class="btn btn-primary mt-3 btn-center mb-2" name="submit" value="Update">
     </form>
   </div> 


   <!--bootstrap js link----->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
   </script>
 </body>
</html>

