<?php
require_once('connection.php');

if (!empty($_POST)) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $sql = "INSERT INTO students (name,address)values('$name','$address')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location:details.php');
        echo "Data stored successfully";
    } else {
        echo "Something went wrong";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <label for="">Name:</label>
        <input type="text" name="name" required><br>
        <label for="">Address:</label>
        <input type="text" name="address"><br>
        <button>Submit</button>
    </form>
</body>
<br><br>
<a href="details.php">View details</a>

</html>