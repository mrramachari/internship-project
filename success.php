<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="successlogo">Leaf now</div>

    <div class="success">
        <h1>Thank you for reaching out to us</h1>
        <p>Your Form has been Submitted successfully</p>
        <button class="homebtn" onclick="window.location.href='index.html';">Home</button>

    </div>

    <?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $Address = $_POST['Address'];
    $Assistance = $_POST['Assistance'];
    


    $conn = new mysqli('localhost', 'root', '', 'leafnow');
    if ($conn->connect_error) {
        die('Connection failed : ' . $conn->connect_error);
    } $sql = "INSERT into contactdb(name, email, number, address, Assistance) values ('$name', '$email','$number','$Address','$Assistance')";

    if ($conn->query($sql) === TRUE) {
      //to do if new row created.
    } else {
      //to do if there was error in creating new row.
    }
    
    $conn->close();    
    ?>



</body>

</html>