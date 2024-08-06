<?php

        $con = new mysqli("localhost", "root", "", "employee");

        $qry= "select * from employeedata";

        $result = $con->query($qry);

        while($row=$result->fetch_assoc())
        {
            
                echo "<tr class="table-row">";
                echo "<td class="table-cell">".$row["Employee_no"]."</td>";
                echo "<td class="table-cell">".$row["Name"]."</td>";
                echo "<td class="table-cell">".$row["Designation"]."</td>";
                echo "<td class="table-cell">".$row["Salary"]."</td>";
                echo "</tr>";
            
        }

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
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
    <div class="table-container">
        <h2 class="table-heading">Employee Data</h2>
        <table class="employee-table">
            <thead class="table-header">
                <tr class="header-row">
                    <th class="table-header-cell">Employee No</th>
                    <th class="table-header-cell">Name</th>
                    <th class="table-header-cell">Designation</th>
                    <th class="table-header-cell">Salary</th>
                </tr>
            </thead>
            <tbody class="table-body">
            </tbody>
        </table>
    </section>
</body>
</html>
