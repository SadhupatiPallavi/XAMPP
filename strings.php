<?php
$text = "  Hello Pallavi welcome to PHP Lab  ";
echo "<h2>Basic String Functions</h2>";
echo "Length: " . strlen($text) . "<br>";
echo "Word Count: " . str_word_count($text) . "<br>";
echo "Reverse: " . strrev($text) . "<br>";
echo "<h2>Case Conversion</h2>";
echo strtoupper($text) . "<br>";
echo strtolower($text) . "<br>";
echo ucfirst("php") . "<br>";
echo ucwords("php string functions") . "<br>";
echo "<h2>Search & Replace</h2>";
echo "Position of Pallavi: " . strpos($text, "Pallavi") . "<br>";
echo str_replace("PHP", "Backend", $text) . "<br>";
echo "<h2>Substring & Trimming</h2>";
echo substr($text, 0, 10) . "<br>";
echo trim($text) . "<br>";
echo ltrim($text) . "<br>";
echo rtrim($text) . "<br>";
echo "<h2>String Comparison</h2>";
echo strcmp("php", "PHP") . "<br>";
echo strcasecmp("php", "PHP") . "<br>";
echo "<h2>Security Functions</h2>";
echo htmlspecialchars("<script>alert('hi')</script>") . "<br>";
echo addslashes("Pallavi's project") . "<br>";
?>
