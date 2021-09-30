<?php

$conn = new mysqli('localhost', 'root', '', 'leafnow');
if ($conn->connect_error) {
    die('Connection failed : ' . $conn->connect_error);
} else {
    $name = $_GET['namevar'];
    $query = "DELETE FROM contactdb WHERE name = '$name' ";
    $data = mysqli_query($conn, $query);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leaf now </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="success">

        <p style="font-size:50px;">Record Deleted successfully</p>
        <button class="homebtn" onclick="window.location.href='index.html';">Home</button>

    </div>
</body>

</html>