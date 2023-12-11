<?php
include 'connect.php';
$CourseID = $_GET['updateCourseID'];
$sql = "Select * from `course` where CourseID=$CourseID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$CourseID = $row['CourseID'];
$CourseName = ['CourseName'];
$Credits = $row['Credits'];


if(isset($_POST['submit'])) {
    $CourseID = $_POST['CourseID'];
    $CourseName = $_POST['CourseName'];
    $Credits = $_POST['Credits'];
}

$sql = "update `course` set CourseID='$CourseID',CourseName='$CourseName',Credits='$Credits'";
$result = mysqli_query($con, $sql);
if($result) {
    echo "Updated";
    header('location:CourseRead.php');

} else {
    die(mysqli_error($con));

}




?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wCourseIDth=device-wCourseIDth, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Update</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Enter your CourseID</label>
                <input type="number" class="form-control" placeholder="23001" name="CourseID" autocomplete="off" value=<?php echo $CourseID;?>>
            </div>
            <div class="form-group">
                <label>Enter your CourseName</label>
                <input type="text" class="form-control" placeholder="JohnDoe" name="CourseName" autocomplete="off"
                    value=<?php echo $CourseName;?>>
            </div>
            <div class="form-group">
                <label>Enter your Credits</label>
                <input type="Credits" class="form-control" placeholder="john@example.com" name="Credits" autocomplete="off"
                    value=<?php echo $Credits;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>