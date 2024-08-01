<?php 
    $infractions = [55, 70, 90,48,55];

    $total = 0;
    $count = count($infractions);
    
    for ( $i=0 ; $i != $count; $i++){
        $total = $total + $infractions[$i];
    }
    echo $total;
    
    $moyenne = $total / $count;
?>