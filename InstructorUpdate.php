<?php
include 'connect.php';
$InstructorID = $_GET['updateInstructorID'];
$sql = "Select * from `instructor` where InstructorID=$InstructorID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$InstructorID = $row['InstructorID'];
$LastName = ['LastName'];
$email = $row['email'];


if(isset($_POST['submit'])) {
    $InstructorID = $_POST['InstructorID'];
    $LastName = $_POST['LastName'];
    $email = $_POST['email'];
}

$sql = "update `instructor` set InstructorID='$InstructorID',LastName='$LastName',email='$email'";
$result = mysqli_query($con, $sql);
if($result) {
    echo "Updated";
    header('location:InstructorRead.php');

} else {
    die(mysqli_error($con));

}




?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wInstructorIDth=device-wInstructorIDth, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Update</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Enter your InstructorID</label>
                <input type="number" class="form-control" placeholder="23001" name="InstructorID" autocomplete="off" value=<?php echo $InstructorID;?>>
            </div>
            <div class="form-group">
                <label>Enter your LastName</label>
                <input type="text" class="form-control" placeholder="JohnDoe" name="LastName" autocomplete="off"
                    value=<?php echo $LastName;?>>
            </div>
            <div class="form-group">
                <label>Enter your email</label>
                <input type="email" class="form-control" placeholder="john@example.com" name="email" autocomplete="off"
                    value=<?php echo $email;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>