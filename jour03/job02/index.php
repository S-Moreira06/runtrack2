<?php 

$txt = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
   
$a = 0;
$b = strlen($txt);

while ($a != $b){
    if ($a % 2 == 0){
        echo $txt[$a];
    }
    $a++;
}
?>


