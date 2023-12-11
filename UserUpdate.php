<?php
include 'connect.php';
$UserID = $_GET['updateUserID'];
$sql = "Select * from `Users` where UserID=$UserID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$UserID = $row['UserID'];
$UserName = ['UserName'];


if(isset($_POST['submit'])) {
    $UserID = $_POST['UserID'];
    $UserName = $_POST['UserName'];
}

$sql = "update `users` set UserID='$UserID',UserName='$UserName'";
$result = mysqli_query($con, $sql);
if($result) {
    echo "Updated";
    header('location:UserRead.php');

} else {
    die(mysqli_error($con));

}




?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wUserIDth=device-wUserIDth, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Update</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Enter your UserID</label>
                <input type="number" class="form-control" placeholder="23001" name="UserID" autocomplete="off" value=<?php echo $UserID;?>>
            </div>
            <div class="form-group">
                <label>Enter your UserName</label>
                <input type="text" class="form-control" placeholder="JohnDoe" name="UserName" autocomplete="off"
                    value=<?php echo $UserName;?>>
            </div>
            

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>