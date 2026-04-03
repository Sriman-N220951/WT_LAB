<?php
$file = fopen("demo.txt", "r");
echo fread($file, filesize("demo.txt"));
fclose($file);

$file = fopen("demo.txt", "w");
fwrite($file, "Written using w mode");
fclose($file);

$file = fopen("demo.txt", "a");
fwrite($file, "\nAppended using a mode");
fclose($file);

$file = fopen("newfile.txt", "x");
fwrite($file, "Created using x mode");
fclose($file);

$file = fopen("demo.txt", "r+");
fwrite($file, "R+ Mode");
rewind($file);
echo fread($file, filesize("demo.txt"));
fclose($file);

$file = fopen("demo.txt", "w+");
fwrite($file, "W+ Mode");
rewind($file);
echo fread($file, filesize("demo.txt"));
fclose($file);

$file = fopen("demo.txt", "a+");
fwrite($file, "\nA+ Mode");
rewind($file);
echo fread($file, filesize("demo.txt"));
fclose($file);

$file = fopen("brandnew.txt", "x+");
fwrite($file, "X+ Mode");
rewind($file);
echo fread($file, filesize("brandnew.txt"));
fclose($file);
?>
