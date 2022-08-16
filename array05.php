<?php
$abc = array("Computer", "Math", "Physics", "Music", "Electronics" );


$def = array(
    "David" => "Computer",
    "Alice" => "Math",
    "Elsa" => "Physics",
    "Bob" => "Music",
    "Chris" => array("Electronics", "Statistics")

);

print $abc[0] . "<br>";
print $abc[1] . "<br>";
print $def["David"] . "<br>";
print $def["Chris"][0] . "<br>";

$def["ko"] = "Mistory";
print_r($def);
print
unset ($def ["Ko"]);
print_r ($def);
print  "<br>";
?>
