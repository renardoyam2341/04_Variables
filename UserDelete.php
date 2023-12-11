<?php
include 'connect.php';
if(isset($_GET['deleteUserID'])){
    $UserID=$_GET['deleteUserID'];
}
$sql="delete from `Users` where UserID=$UserID";
$result=mysqli_query($con,$sql);
if($result){
    header('location:UserRead.php');
}else{
    die(mysqli_error($con));
}



?>