<?php
$fh = fopen("student.txt", "r");
echo fgets($fh);
while (!feof($fh)) {
    echo fgets($fh) . "<br>";
}
