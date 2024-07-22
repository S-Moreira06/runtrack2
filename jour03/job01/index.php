<?php 

$nbr = array(200,204,173,98,171,404,459);

foreach($nbr as $vl) {
    if($vl % 2 ==0){
        echo $vl . " est pair.<br>";
    }
    else{
        echo $vl . " est impair.<br>";
    }
}
?>