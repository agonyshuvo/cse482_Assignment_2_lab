<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "cse-482";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}


if (isset($_POST['submit'])) {
    $Name = $_POST["Name"];
    $Username = $_POST["Username"];
    $Paaword = $_POST["Password"];
    $Contact = $_POST["Contact"];
    $Email = $_POST["Email"];
    $sql = " INSERT INTO userdetails (Name, Username, Password, Contact, email ) VALUES ('$Name','$Username','$Password' ,'$Contact','$Email')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('From submit successfully.')</script>";
    } else {
        echo "<script>alert('From  does not submit successfully.')</script>";
    }
    // mysqli_close($conn);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <p>
    <h2 style=" color :#050506 "> Registration Form</h2>
    </p>
</head>



<body>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input class="input" type="text" id="name" name="Name" placeholder=" " required style="margin-left: 6rem"><br><br>
        <label for="username">User Name:</label>
        <input class="input" type="text" id="username" name="Username" placeholder=" " required style="margin-left: 3.7rem"><br><br>
        <label for="pwd">Password:</label>
        <input class="input" type="password" id="pwd" name="Password" placeholder="" required style="margin-left: 4.4rem"> <br><br>
        <label for="pwd"> Re-type Password:</label>
        <input class="input" type="password" id="pwd" name="re-pwd" placeholder="" required style="margin-left: 1rem"> <br> <br>
        <label for="gender"> Gender :</label>
        <input type="radio" name="gender" value="male" style="margin-left: 4.7rem"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other
        <br> <br>
        <label for="email-addrrss">Email:</label>
        <input class="input" type="email" id="email-addrrss" name="Email" placeholder="" required style="margin-left: 6rem"><br><br>
        <label for="num">Contuct No :</label>
        <input class="input" type="number" id="num" name="Contact" placeholder="" required style="margin-left: 3.5rem">
        <br><br> <br>
        <input class="btn" type="submit" value="Submit" style="margin-left: 2.7rem">
        <input class="btn" type="reset" value="Cancel" style="margin-left: 1.3rem">
        <br> <br>
    </form>
</body>

</html>