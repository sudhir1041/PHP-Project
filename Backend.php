<?php

$empid = $_POST["empno"];
$name = $_POST["empname"];
$des = $_POST["empdes"];
$salary = $_POST["empsal"];

$con = new mysqli("localhost", "root", "", "employee");

$sqry = "INSERT INTO employeedata (Employee_no, Name, Designation, Salary) VALUES ('$empid', '$name', '$des', '$salary')";

$con->query($sqry);
$con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Navbar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="insert.php">Insert</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a href="display.php">Display</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <section class="main">
        <h1>Data Saved</h1>
    </section>
</body>
</html>
