<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system</title>
</head>

<body>
    <h1>Registration</h1>

    <form action="" method="post">
        <label>Name:</label>
        <input type="text" name="name"><br><br>

        <label>Email:</label>
        <input type="text" name="email"><br><br>

        <input type="submit" name="search" value="search">
    </form>

    <?php
    if (isset($_POST["search"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $Valid = true;

        // name must be 4 to 8 characters
        if (strlen($name) < 4 || strlen($name) > 8) {
            echo "Name must be between 4 to 8 characters <br>";
            $Valid = false;
        }

        // email must contain '@'
        if (strpos($email, "@") === false) {   // correct check
            echo "Email must contain '@' symbol <br>";
            $Valid = false;
        }

        if ($Valid) {
            echo "Registration Done <br>";
            echo "Name: $name <br>";
            echo "Email: $email <br>";
        }
    }
    ?>
</body>

</html>