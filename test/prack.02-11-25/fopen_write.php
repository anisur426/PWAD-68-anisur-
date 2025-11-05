<?php
$fh = fopen("student1.txt", "w");
//echo fgets($fh);
//while (!feof($fh)) {
//   echo fgets($fh) . "<br>";}
fwrite($fh, "hello anis");
fclose($fh);
