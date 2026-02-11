<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $file_name = basename($_FILES['myfile']['name']);
    $file_tmp  = $_FILES['myfile']['tmp_name'];

    $target = __DIR__ . "/uploads/" . $file_name;

    if (move_uploaded_file($file_tmp, $target)) {
        echo "File uploaded successfully<br>";
        echo "<a href='download.php?file=" . urlencode($file_name) . "'>Download File</a>";
    } else {
        echo "Upload failed";
    }
}
?>
