<?php
$mail = $_POST['mail'];

echo($mail);
$file = "data-email.txt";
$fileWrite = fopen($file,"a+");
fwrite($fileWrite,$mail);
fwrite($fileWrite,"\n");
fclose($fileWrite);