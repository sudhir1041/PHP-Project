<?php

$empno=$_GET["empno"];

$con = new mysqli("localhost", "root", "", "employee");

$qry= "select * from employeedata where Employee_no='$empno'";

$result=$con->query($qry);

$con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
            <li><a href="search.php">Search</a></li>
        </ul>
    </nav>
    <section class="main">
    <div class="form-container">
        <h2 class="form-heading">Employee Details Update</h2>
        <?php
        while($row = $result->fetch_assoc()) {
            echo "<form class='employee-form' action='/submit-employee-details' method='POST'>";
            echo "   <div class='form-group'>";
            echo "        <label class='form-label' for='employeeNo'>Employee No:</label>";
            echo "        <input class='form-input' type='text' value='".$row["Employee_no"]."' name='employeeNo' readonly required>";
            echo "    </div>";

            echo "   <div class='form-group'>";
            echo "        <label class='form-label' for='name'>Name:</label>";
            echo "        <input class='form-input' type='text' value='".$row["Name"]."' name='name' required>";
            echo "   </div>";

            echo "   <div class='form-group'>";
            echo "        <label class='form-label' for='designation'>Designation:</label>";
            echo "        <input class='form-input' type='text' value='".$row["Designation"]."' name='designation' required>";
            echo "    </div>";

            echo "   <div class='form-group'>";
            echo "        <label class='form-label' for='salary'>Salary:</label>";
            echo "        <input class='form-input' type='number' value='".$row["Salary"]."' name='salary' required>";
            echo "    </div>";

            echo "   <div class='form-group'>";
            echo "        <input class='form-submit' type='submit' value='Submit'>";
            echo "    </div>";
            echo "</form>";
        }
        ?>
    </div>
</section>

</body>
</html>
