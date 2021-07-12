<?php
function mult($arr) {
    $a = 1;
    foreach($arr as $i) {
         $a = $a * $i;
    }
    return $a;
}

echo mult(array(1,3,5,7,9));