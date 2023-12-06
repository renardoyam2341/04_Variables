<?php
include 'connect.php';
echo "<br>";
if(isset($_POST['submit'])){
$newUsername = $_POST["new username"];
$idToUpdate = $_POST["new id"];
}
$sql = "UPDATE users SET username='$newUsername' WHERE id=$idToUpdate";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
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
    <title>Update</title>
</head>
<body>

    <div class="container my-5">
        <form method="post">
    <div class="form-group">
    <label>Enter new ID</label>
    <input type="number" class="form-control"
    placeholder="xxxxxxxxx" name="new id" autocomplete="off">
    </div>
    
    <div class="form-group">
    <label>Enter new username</label>
    <input type="text" class="form-control"
    placeholder="new username" name="new username" autocomplete="off">
    </div>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
