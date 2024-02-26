<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table display to database</title>
     <!--css file--->
     <link rel="stylesheet" href="style.css">
    <!---bootstrap css link--->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
   <div class="container w-100 mt-2">
    <h2 class="text-center bg-success text-light">Emp Record
        <a href="index.php" class="btn btn-primary float-end">Add EMP</a>
    </h2>
   <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Emp Name</th>
            <th>Emp Mobile</th>
            <th>Emp Salary</th>
            <th>Emp dgs</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'connect.php';
       $query = "SELECT * FROM `emp` ";
       $result = mysqli_query($conn,$query);
       if($result)
       {
         while($rows = $result->fetch_assoc())
         {
          $id = $rows['id'];
          $emp_name = $rows['emp_name'];
          $emp_phone = $rows['emp_phone'];
          $emp_salary = $rows['emp_salary'];
          $emp_dgs = $rows['emp_dgs'];
            
          echo "<tr>
            <td>$id</td>
            <td>$emp_name</td>
            <td>$emp_phone</td>
            <td>$emp_salary</td>
            <td>$emp_dgs</td>
            <td class='text-center'>
             <a href='update.php?id=$id' class='btn btn-info text-light'><i class='fa-solid fa fa-edit'></i></a>
             <a href='delete.php?id=$id' class='btn btn-info text-light'><i class='fa-solid fa-trash-can'></i></a>
            </td>
            </tr>";
         }
        }
      ?>
    </tbody>
   </table>
  </div> 
</body>
</html>