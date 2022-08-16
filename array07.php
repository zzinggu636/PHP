<?php
$fruits1 = array(
    "Apple" => "Red",
    "Pear" => array("Brown", "Yellow"),
    "Peach" => "Pink",
    "Tomato" => array ("Red", "Green"),
    "Banana" => "Yellow"
);

$fruits1 = array(
    "Apple" => "Red",
    "Pear" => array("Color1" => "Brown", "Color2" => "Yellow"),
    "Peach" => "Pink",
    "Tomato" => array ("Red", "Green"),
    "Banana" => "Yellow"
);

print $fruits1["Pear"]["Color1"]. "<br>";
print $fruits["Tomato"][0]. "<br>";

print "******* Before *********<br>";
print_r($fruits);
print "<br><br>";
print "******* After *********<br>";
unset($fruits["Pear"], $fruits["Banana"]);
print_r($fruits);
print "<br><br>";
?>