<?php
echo "<h2>Data-Types:</h2>";

$string = "Pallavi Sadhupati";
$integer = 210;
$float = 3.14;
$boolean = true;
$array = array("Pranitha","Pallavi","Vinay","Vivek");

echo "String: $string <br>";
echo "Integer: $integer <br>";
echo "Float: $float <br>";
echo "Boolean: $boolean <br>";
echo "Array: ";
print_r($array);
echo "<br>";

echo "<h3>Local-Scope</h3>";
function local_Scope(){
    $x = 5;
    echo "Local variable x = $x <br>";
}
local_Scope();

echo "<br>";
echo "<h3>Global-Scope</h3>";
$y = 20;
function global_Scope(){
    global $y;
    echo "Global variable y = $y <br>";
}
global_Scope();

echo "<h3>Static-Scope</h3>";
function static_Scope(){
    static $z = 0;
    $z++;
    echo "Static z = $z <br>";
}
static_Scope();
static_Scope();
static_Scope();
?>
