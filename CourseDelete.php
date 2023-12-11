<?php
include 'connect.php';
if(isset($_GET['deleteCourseID'])){
    $CourseID=$_GET['deleteCourseID'];
}
$sql="delete from `course` where CourseID=$CourseID";
$result=mysqli_query($con,$sql);
if($result){
    header('location:CourseRead.php');
}else{
    die(mysqli_error($con));
}



?>