<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Student Entry</title>
</head>

<body>
    <h2>New Student Entry</h2>

    <form action="" method="post">
        <input type="text" name="Fname" placeholder="Enter first name" required><br>
        <input type="text" name="Lname" placeholder="Last Name" required><br>
        <input type="date" name="dob" placeholder="Enter Date" required><br>
        <textarea name="notes" placeholder="Enter notes"></textarea><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <br><br>
    <a href="./student8.php">Show student</a>

    <?php
    if (isset($_POST["submit"])) {

        $Fname = $_POST["Fname"];
        $Lname = $_POST["Lname"];
        $dob = $_POST["dob"];
        $notes = $_POST["notes"];

        include_once("./db_config.php");


        // টেবিলের কলামগুলো ঠিকমতো উল্লেখ করতে হবে
        $sql = "INSERT INTO employees (first_name, last_name, birthdate, notes)
                VALUES ('$Fname', '$Lname', '$dob', '$notes')";

        if ($conn->query($sql)) {
            echo "<p style='color:green;'>Data Inserted Successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
        }
    }
    ?>

</body>

</html>