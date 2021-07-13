<?php
//array_merge
$air1 =  array("milk","water","cake","berry");
$air2 = array("apple","Banana");
$air3 = array("rice","bread","wine");

$air = array_merge($air1,$air2,$air3);
print_r($air);