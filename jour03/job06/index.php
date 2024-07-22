<?php 
$str = "Les choses que l'on possède finissent par nous posséder.";

$a = strlen($str) -1;

while ($a != 0){
    echo $str[$a];
    $a--;
}
