<?php
include 'connect.php';
$StudentID = $_GET['updateStudentID'];
$sql = "Select * from `Student` where StudentID=$StudentID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$StudentID = $row['StudentID'];
$LastName = ['LastName'];


if(isset($_POST['submit'])) {
    $StudentID = $_POST['StudentID'];
    $LastName = $_POST['LastName'];
}

$sql = "update `Student` set StudentID='$StudentID',LastName='$LastName'";
$result = mysqli_query($con, $sql);
if($result) {
    echo "Updated";
    header('location:StudentRead.php');

} else {
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

    <title>Update</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Enter your StudentID</label>
                <input type="number" class="form-control" placeholder="23001" name="StudentID" autocomplete="off" value=<?php echo $StudentID;?>>
            </div>
            <div class="form-group">
                <label>Enter your LastName</label>
                <input type="text" class="form-control" placeholder="JohnDoe" name="LastName" autocomplete="off"
                    value=<?php echo $LastName;?>>
            </div>
            

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>