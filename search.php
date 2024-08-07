<?php
if (isset($_POST["submit"])) {
    $empid = $_POST['query'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Employee</title>
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
        <div class="search-container">
            <form class="search-form" action="search.php" method="post">
                <input class="search-input" type="text" name="query" placeholder="Search by Employee No..." required>
                <button class="search-button" name="submit" type="submit" >Search</button>
            </form>
            <h2 class="table-heading">Employee Search Data</h2>
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
                    <?php
                    if (isset($_POST["submit"])) {
                        $con = new mysqli("localhost", "root", "", "employee");
                        $qry = "SELECT * FROM employeedata WHERE Employee_no='$empid'";
                        $result = $con->query($qry);
                        $con->close();
                        while($row = $result->fetch_assoc()) {
                                echo "<tr class='table-row'>";
                                echo "<td class='table-cell'>" . $row["Employee_no"] . "</td>";
                                echo "<td class='table-cell'>" . $row["Name"] . "</td>";
                                echo "<td class='table-cell'>" . $row["Designation"] . "</td>";
                                echo "<td class='table-cell'>" . $row["Salary"] . "</td>";
                                echo "</tr>";
                            }
                        
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
