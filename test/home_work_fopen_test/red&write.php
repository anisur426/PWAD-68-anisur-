<?php

$fh= fopen("tanjim.txt","r+");
$data =fread($fh,34);
echo "Read: $data\n";
echo "Coursor after read: " . ftell($fh) ."\n";

fwrite($fh,"hey anisur tume ki gorib");
echo "Coursor after write: " . ftell($fh) ."\n";

fclose($fh);
?>
