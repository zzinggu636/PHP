<?php
$fruits = array(
    "Apple" => "Red",
    "Peach" => "Pink",
    "Banana" => "Yellow"
);

$numbers = array(1,3,5,7,9,11);

for ($i = 0; $i < count($numbers); $i++) {
    print "$numbers[$i]";
}
print "<hr>";

foreach($numbers as $number) {
    echo $number . " ";
}
print "<hr>";

foreach($fruits as $fruit) {
    print $fruit . " ";
    }
print "<hr>";
?>