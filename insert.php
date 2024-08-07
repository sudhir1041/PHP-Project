<?php
if(isset($_POST["submit"])){
    $empid = $_POST["empno"];
    $name = $_POST["empname"];
    $des = $_POST["empdes"];
    $salary = $_POST["empsal"];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
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
        <h2 class="form-heading">Employee Details Entry</h2>
        <form class="employee-form" action="insert.php" method="POST">
            <div class="form-group">
                <label class="form-label" for="employeeNo">Employee No:</label>
                <input class="form-input" name="empno" type="text" id="employeeNo" name="employeeNo" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="name">Name:</label>
                <input class="form-input" name="empname" type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="designation">Designation:</label>
                <input class="form-input" name="empdes" type="text" id="designation" name="designation" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="salary">Salary:</label>
                <input class="form-input" name="empsal" type="number" id="salary" name="salary" required>
            </div>

            <div class="form-group">
                <input class="form-submit" onclick="display()" name="submit" type="submit" value="Submit">
            </div>
        </form>
    </div>
    </section>
    <?php
if(isset($_POST["submit"])){
    $empid = $_POST["empno"];
    $name = $_POST["empname"];
    $des = $_POST["empdes"];
    $salary = $_POST["empsal"];
    $con = new mysqli("localhost", "root", "", "employee");

$sqry = "INSERT INTO employeedata (Employee_no, Name, Designation, Salary) VALUES ('$empid', '$name', '$des', '$salary')";

$con->query($sqry);
$con->close();

}
?>
    <script>
        function display(){
                alert("Entry successfully");
        }
    </script>
</body>
</html>
