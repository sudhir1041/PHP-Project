<?php

$empno=$_GET["empno"];

$con = new mysqli("localhost", "root", "", "employee");

$qry= "delete from employeedata where Employee_no='$empno'";

$con->query($qry);

$con->close();

header("location:update.php");

?>