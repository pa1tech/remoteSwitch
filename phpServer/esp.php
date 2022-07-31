<?php

date_default_timezone_set('Asia/Kolkata');

$myfile = fopen("./gg.txt", "r");
echo fread($myfile,filesize("./gg.txt"));
fclose($myfile);

$time = date('h:i:s');
$myfile = fopen("./tt.txt", "w");
fwrite($myfile, $time);
fclose($myfile);

?>