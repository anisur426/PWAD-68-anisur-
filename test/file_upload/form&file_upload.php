<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" name="anis" method="POST">
        <label for="">Your Name : </label><br>
        <input type="text" name="Name" value="<?php if (isset($_POST['Name'])) {
                                                    echo $_POST['Name'];
                                                } ?>"><br>
        <br>
        <label for="">Email : </label><br>
        <input type="text" name="Email" value="<?php if (isset($_POST['Email'])) {
                                                    echo $_POST['Email'];
                                                } ?>"><br>
        <br>
        <label for="">Current Skills: </label><br>
        <select name="Skills[]" multiple><br>
            <option value="C#"> C#</option>
            <option value="php">php</option>
            <option value="perl"> perl</option>
            <option value="javascript">javascript</option>


        </select><br>
        <label for=""> Want to lanre: </label><br>


        <input type="checkbox" name="languages[]" value="C++">c++<br>
        <input type="checkbox" name="languages[]" value="php">php<br>
        <input type="checkbox" name="languages[]" value="python">python<br>
        <input type="checkbox" name="languages[]" value="java">java<br>
        </select>
        <br>
        <input type="file" name="newfile">
        <input type="submit" value="upload" name="upload"><br>
        <input type="submit" name="submit" value="submit"><br>

    </form>
    <?php
    if (isset($_POST['upload'])) {

        $filename = $_FILES['myfile']['name'];
        $destination = "files/" . $filename;

        $temfile = $_FILES['myfile']['tmp_name'];
        $filsize = $_FILES['myfile']['size'];
        $maxsize = 524288;
        $errors = array();
        echo $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ["jpg", "jpeg", "png"];

        if ($filsize > $maxsize) {
            $errors[] = "<h1>file is too large</h>";
        }
        if (! in_array($ext, $allowed)) {
            $errors[] = "<h1>  jpg,png and jpeg is allowed </h1>";
        }
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            move_uploaded_file($temfile, $destination);
            echo "<h1> upload successfully</h1>";
        }
    }
    if (isset($_POST["submit"])) {
        $skills_output = "";
        $langs_output = "";
        $erroes = array();

        if (!isset($_POST['Name']) || $_POST['Name'] == "") {
            $erroes[] = "must be type your name";
        } else {
            $name = $_POST['Name'];
        }
        if (!isset($_POST['Email']) || $_POST['Email'] == "") {
            $erroes[] = "must be type your email";
        } else {
            $email = $_POST['Email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email[] = "email is not valid";
            }
        }


        if (isset($_POST["languages"])) {
            $langs = $_POST["languages"];
            $lastlangkey = array_key_last($langs);

            foreach ($langs as $key => $lang) {
                if ($key == $lastlangkey) {
                    $langs_output .= $lang;
                } else {
                    $langs_output .= $lang . ", ";
                }
            }
        } else {
            $errors[] = "Select at least one language";
        }


        if (count($erroes) > 0) {
            echo "<ul>";
            foreach ($erroes as $err) {
                echo "<li>" . $err . "</li>";
            }
            echo "</ul>";
        } else {
            move_uploaded_file($temfile, $destination);
            echo "<h1> upload successfully</h1>";
        }

    ?>
        <table>
            <tr>
                <td>Name:</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Skills:</td>
                <td><?php echo $skills_output; ?></td>
            </tr>
            <tr>
                <td>languages:</td>
                <td><?php echo $langs_output; ?></td>
            </tr>
        </table>
    <?php
    }

    ?>
</body>

</html>