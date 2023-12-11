<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <button class="btn-primary my-5"><a href="Create.php" class="text-light">Add user</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">CourseID</th>
      <th scope="col">CourseName</th>
      <th scope="col">Credits</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php

$sql="Select * from `course`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $CourseID=$row['CourseID'];
        $CourseName=$row['CourseName'];
        $Credits=$row['Credits'];
        echo'<tr>
        <th scope="row">'.$CourseID.'</th>
        <td>'.$CourseName.'</td>
        <td>'.$Credits.'</td>
        <td>
        <button class="btn btn-primary"><a href="CourseUpdate.php?updateCourseID='.$CourseID.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="CourseDelete.php?deleteCourseID='.$CourseID.'" class="text-light">Delete</a></button>

        </td>
      </tr>';

    }
}



?>
    
  </tbody>
</table>
</div>
    
</body>
</html>