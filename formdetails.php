<?php

$conn = new mysqli('localhost', 'root', '', 'leafnow');
if ($conn->connect_error) {
    die('Connection failed : ' . $conn->connect_error);
}

$query = "select * from contactdb";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399"></script>
    <title>Document</title>
</head>

<body>

    <nav>
        <div><img src="Bionic.jpg" width="100" height="100"></div>
        <div class="logo">Leaf now</div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
    </nav>
    <div class="tablediv">
        <table class="formtable">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Assistance</th>
                <th>Deletion</th>
            </tr>
            <?php
            while ($rows = mysqli_fetch_assoc($result)) {
                echo " 
        <tr>
        
            <td>" . $rows['name'] . " </td>
            <td>" . $rows['email'] . "</td>
            <td>" . $rows['number'] . " </td>
            <td>" . $rows['Address'] . " </td>
            <td>" . $rows['Assistance'] . " </td>

            <td><a href='delete.php?namevar=$rows[name]'> Delete</a> </td>
        
        </tr>
        ";
            }
            ?>
        </table>
    </div>

</body>

</html>