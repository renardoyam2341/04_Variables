<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
}
$sql="delete from `users` where id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header('location:Read.php');
}else{
    die(mysqli_error($con));
}



?>