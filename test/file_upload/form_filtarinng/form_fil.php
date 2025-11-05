<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td {
            border: solid black 1px;
            border-collapse: collapse;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <form action="" name="anis" method="POST">
        <lavel for="">Your Name : </lavel><br>
        <input type="text" name="Name" value="<?php if (isset($_POST['Name'])) {
                                                    echo $_POST['Name'];
                                                } ?>"><br>
        <br>
        <lavel for="">Email : </lavel><br>
        <input type="text" name="Email" value="<?php if (isset($_POST['Email'])) {
                                                    echo $_POST['Email'];
                                                } ?>"><br>
        <br>
        <lavel for="">Current Skills: </lavel><br>
        <select name="Skills[]" multiple><br>
            <option value="C#"> C#</option>
            <option value="php">php</option>
            <option value="perl"> perl</option>
            <option value="javascript">javascript</option>


        </select><br>
        <lavel for=""> Want to lanre: </lavel><br>


        <input type="checkbox" name="languages[]" value="C++">c++<br>
        <input type="checkbox" name="languages[]" value="php">php<br>
        <input type="checkbox" name="languages[]" value="python">python<br>
        <input type="checkbox" name="languages[]" value="java">java<br>


        </select>
        <br>
        <input type="submit" name="submit" value="submit"><br>

    </form>
    <?php
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
        //skill
        if (!isset($_POST['Skills'])) {
            $erroes[] = "you select must one skill";
        } else {
            $skills = $_POST['Skills'];
            foreach ($skills as $skill) {
                $skills_output .= $skill . " ,";
            }
        }

        $langs = $_POST["languages"];
        $lastlangkey = array_key_last($langs);


        foreach ($langs as $key => $lang) {
            if ($key == $lastlangkey) {
                $langs_output .= $lang . " ,";
            } else {
                $langs = $_POST["languages"];
            }
        }

        // echo "<pre>";
        //print_r($_REQUEST);
        //echo "Skills:";
        //print_r($_REQUEST["Skills"]);
        //echo"want to larne:";
        // print_r($_REQUEST['languages']);
        if (count($erroes) > 0) {
            echo "<ul>";
            foreach ($erroes as $err) {
                echo "<li>" . $err . "<li>";
            }
            echo "<ul>";
        } else {
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