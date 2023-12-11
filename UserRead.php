<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wUserIDth=device-wUserIDth, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <button class="btn-primary my-5"><a href="UserCreate.php" class="text-light">Add user</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">UserID</th>
      <th scope="col">UserName</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php

$sql="Select * from `Users`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $UserID=$row['UserID'];
        $UserName=$row['UserName'];
        echo'<tr>
        <th scope="row">'.$UserID.'</th>
        <td>'.$UserName.'</td>
        <td>
        <button class="btn btn-primary"><a href="UserUpdate.php?updateUserID='.$UserID.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="UserDelete.php?deleteUserID='.$UserID.'" class="text-light">Delete</a></button>

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