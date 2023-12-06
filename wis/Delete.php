<?php
include 'connect.php';
echo "<br>";
if(isset($_POST['submit'])){
    $idToDelete=$_POST['delete id'];
}

$sql = "DELETE FROM users WHERE id=$idToDelete";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <title>Delete</title>
</head>
<body>

    <div class="container my-5">
        <form method="post">
    <div class="form-group">
    <label>Enter ID to delete</label>
    <input type="number" class="form-control"
    placeholder="xxxxxxxxx" name="delete id" autocomplete="off">
    </div>
        
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
