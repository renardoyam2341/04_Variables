<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
}
$sql="insert into `users` (id, username, email)values('$id', '$username', '$email')";
$result=mysqli_query($con,$sql);
if($result){
    echo"Data inserted successfully";
}
    else{
        die(mysqli_error($con));
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>

    <div class="container my-5">
        <form method="post">
    <div class="form-group">
    <label>Enter your ID</label>
    <input type="number" class="form-control"
    placeholder="xxxxxxxxx" name="id" autocomplete="off">
    </div>
    
    <div class="form-group">
    <label>Enter your username</label>
    <input type="text" class="form-control"
    placeholder="username" name="username" autocomplete="off">
    </div>
    
    <div class="form-group">
    <label>Enter your email</label>
    <input type="email" class="form-control"
    placeholder="jrizz24@gmail.com" name="email" autocomplete="off">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
