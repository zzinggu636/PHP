<?php

function my_log($parm, $base = 2) // default parmeter
{
    $result = log($parm) / log($base);
    return $result;
}

print log(8,2)."<br>";
print my_log(8)."<br>";
print my_log(9,3)."<br>";

?>
