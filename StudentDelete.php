<?php
include 'connect.php';
if(isset($_GET['deleteStudentID'])){
    $StudentID=$_GET['deleteStudentID'];
}
$sql="delete from `Student` where StudentID=$StudentID";
$result=mysqli_query($con,$sql);
if($result){
    header('location:StudentRead.php');
}else{
    die(mysqli_error($con));
}



?>