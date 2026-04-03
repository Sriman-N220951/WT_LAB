<?php

$filename = "demo.txt";
$file = fopen("demo.txt", "w");
fwrite($file, "Hello PHP File Handling!");
fclose($file);

$file = fopen("demo.txt", "r");
$content = fread($file, filesize("demo.txt"));
fclose($file);

echo $content;
echo "<br>";

echo file_get_contents("demo.txt");
echo "<br>";
file_put_contents("demo2.txt", "This is written using file_put_contents()");

/* file() */
echo "<b>file():</b><br>";
$lines = file($filename);
foreach ($lines as $line) {
    echo $line . "<br>";
}

/* ===============================
   2. FILE INFORMATION
================================ */

echo "<h3>2. File Information</h3>";

echo "File Exists: " . (file_exists($filename) ? "Yes" : "No") . "<br>";
echo "File Size: " . filesize($filename) . " bytes<br>";
echo "File Type: " . filetype($filename) . "<br>";
echo "Last Access Time: " . date("d-m-Y H:i:s", fileatime($filename)) . "<br>";
echo "Last Modified Time: " . date("d-m-Y H:i:s", filemtime($filename)) . "<br>";
echo "File Change Time: " . date("d-m-Y H:i:s", filectime($filename)) . "<br>";
echo "File Permissions: " . substr(sprintf('%o', fileperms($filename)), -4) . "<br>";
echo "File Owner: " . fileowner($filename) . "<br>";
echo "File Group: " . filegroup($filename) . "<br>";
echo "File Inode: " . fileinode($filename) . "<br>";

/* ===============================
   3. FILE & FOLDER MANAGEMENT
================================ */

echo "<h3>3. File & Folder Management</h3>";

/* copy() */
copy($filename, "demo_copy.txt");
echo "File copied<br>";

/* rename() */
rename("demo_copy.txt", "demo_renamed.txt");
echo "File renamed<br>";

/* unlink() */
unlink("demo_renamed.txt");

echo "File deleted<br>";

/* mkdir() */
if (!is_dir("myFolder")) {
    mkdir("myFolder");
    echo "Folder created<br>";
}

/* is_file(), is_dir() */
echo is_file($filename) ? "demo.txt is a file<br>" : "Not a file<br>";
echo is_dir("myFolder") ? "myFolder is a directory<br>" : "Not a directory<br>";

/* rmdir() */
rmdir("myFolder");
echo "Folder removed<br>";

/* ===============================
   4. DIRECTORY HANDLING
================================ */

echo "<h3>4. Directory Handling</h3>";

/* scandir() */
echo "<b>scandir():</b><br>";
$files = scandir(".");
foreach ($files as $f) {
    echo $f . "<br>";
}

/* opendir(), readdir(), closedir() */
echo "<br><b>opendir() / readdir():</b><br>";
$dir = opendir(".");
while (($file = readdir($dir)) !== false) {
    echo $file . "<br>";
}
closedir($dir);

/* getcwd(), chdir() */
echo "<br>Current Directory: " . getcwd() . "<br>";
chdir("..");
echo "After chdir(): " . getcwd() . "<br>";
chdir("htdocs");

/* ===============================
   5. FILE LOCKING
================================ */

echo "<h3>5. File Locking</h3>";

$lock = fopen("demo.txt", "a");

if (flock($lock, LOCK_EX)) {
    fwrite($lock, "\nFile locked and written safely.");
    flock($lock, LOCK_UN);
    echo "File locked successfully<br>";
}

fclose($lock);

echo "<h3>Program Executed Successfully</h3>";

?>