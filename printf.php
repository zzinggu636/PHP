<?php
$i = 6;
$f = 3.14159;
$s = "Strings";
$b = false;

printf("%d <br>", $i);
printf("%f <br>", $f);
printf("%s <br>", $s);
printf("%d <br>", $b);
$str = 'one/two/three/four/five/six/seven/eight';
$value = explode('/', $str);
foreach ($value as $i) {
    printf("%s <br>", $i);
}
?>