<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="fullname" id="name"><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" name="submit" value="Registration">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST["fullname"];
        $email = $_POST["email"];
        $errors = [];

        // Name length validation (4 to 8 characters)
        if (strlen($name) < 4 || strlen($name) > 8) {
            $errors[] = "Name must be between 4 to 8 characters.";
        }

        // Email validation using filter_var
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email address. It must contain '@' in format.";
        }

        // Display errors or success message
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        } else {
            echo "<p style='color:green;'>Registration Done!</p>";
            echo "Name: $name<br>";
            echo "Email: $email<br>";
        }
    }
    ?>
</body>
</html>
