<?php

$empid = $_POST["employeeNo"];
$name = $_POST["name"];
$des = $_POST["designation"];
$salary = $_POST["salary"];

$con = new mysqli("localhost", "root", "", "employee");

$sqry = "UPDATE employeedata SET Name='$name', Designation='$des', Salary='$salary' WHERE Employee_no='$empid'";

$con->query($sqry);
$con->close();

header("Location: update.php?update=yes");

?>
