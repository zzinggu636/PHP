<?php
function fact($n)
{
    if ($n == 1) return 1;
    else return $n*fact($n-1);  //recursive function, 재귀함수, 되부름함수, 자기 호출함수
}

function fact_for($n){
    $factVal = 1;
    for ($i=1; $i<=$n; $i++){
        $factVal = $factVal * $i;
    }
    return $factVal;
}

print fact(100)."<br>";
print fact_for(5)."<br>";



?>