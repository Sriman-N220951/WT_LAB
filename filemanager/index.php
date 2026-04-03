<?php
$uploadDir = "uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir);
}

/* File Upload */
if (isset($_POST['upload'])) {
    $fileName = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir . $fileName);
}

/* File Delete */
if (isset($_GET['delete'])) {
    unlink($uploadDir . $_GET['delete']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini File Manager</title>
</head>
<body>

<h2>Mini File Manager</h2>

<!-- Upload Form -->
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit" name="upload">Upload</button>
</form>

<hr>

<h3>Uploaded Files</h3>

<table border="1" cellpadding="8">
<tr>
    <th>File Name</th>
    <th>Size (KB)</th>
    <th>Last Modified</th>
    <th>Actions</th>
</tr>

<?php
$files = scandir($uploadDir);

foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        $path = $uploadDir . $file;
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>" . round(filesize($path)/1024, 2) . "</td>";
        echo "<td>" . date("d-m-Y H:i:s", filemtime($path)) . "</td>";
        echo "<td>
            <a href='$path' download>Download</a> |
            <a href='?delete=$file'>Delete</a>
        </td>";
        echo "</tr>";
    }
}
?>

</table>

</body>
</html>
