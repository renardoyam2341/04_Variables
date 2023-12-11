<?php
include 'connect.php';
if(isset($_GET['deleteInstructorID'])){
    $InstructorID=$_GET['deleteInstructorID'];
}
$sql="delete from `instructor` where InstructorID=$InstructorID";
$result=mysqli_query($con,$sql);
if($result){
    header('location:InstructorRead.php');
}else{
    die(mysqli_error($con));
}



?>