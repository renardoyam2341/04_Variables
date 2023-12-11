<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $CourseID=$_POST['CourseID'];
  $CourseName=$_POST['CourseName'];
  $Credits=$_POST['Credits'];
}

$sql="insert into `course` (CourseID, CourseName, Credits) 
values('$CourseID', '$CourseName', '$Credits')";
$result=mysqli_query($con,$sql);
if($result){
  //echo "Data created";
  header('location:CourseRead.php');
  
}else{
  die(mysqli_error($con));

}




?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <title>Create</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Enter CourseID</label>
        <input type="number" class="form-control" placeholder="23001" name="CourseID" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Enter CourseName</label> 
        <input type="text" class="form-control" placeholder="JohnDoe" name="CourseName" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Enter Credits</label>
        <input type="Credits" class="form-control"  name="Credits" autocomplete="off">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>

</body>

</html>