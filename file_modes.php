<?php
echo "<h2>Task 3: File Modes</h2>";
$f = fopen("modes.txt", "w");
fwrite($f, "Written using w mode");
fclose($f);
echo "w mode executed<br><br>";
$f = fopen("modes.txt", "a");
fwrite($f, "\nAppended using a mode");
fclose($f);
echo "a mode executed<br><br>";
$f = fopen("modes.txt", "r");
echo "<b>Content using r mode:</b><br>";
echo fread($f, filesize("modes.txt"));
fclose($f);
echo "<br><br>";
$f = fopen("unique_mode.txt", "x");
fwrite($f, "File created using x mode");
fclose($f);
echo "x mode executed (new file created)";
?>