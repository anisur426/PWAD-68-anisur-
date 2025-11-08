<?php 
$fh = fopen("student1.txt","w");
$text="this a gorib.\n this a gorib.\nthis a gorib.\nthis a gorib.";
fwrite($fh,$text);
fclose($fh);
?>
<?php

$fh= fopen("tanjim.txt","r+");
$text="i tyr my best work.\n i tyr my best work.\ni tyr my best work.\ni tyr my best work.\ni tyr my best work.";
fwrite($fh,$text);
fread($fh,$text);
fclose($fh);
?>
