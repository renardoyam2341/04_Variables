<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn){
    echo "connection successfull";
}
    else{
        die(mysqli_error($conn));
    }

    ?>