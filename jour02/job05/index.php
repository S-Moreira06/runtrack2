<?php 
    $nbr = 8;
    echo "2"."<br>"."3"."<br>"."5"."<br>"."7"."<br>";

    while($nbr <= 100){
        if( $nbr%2==0 || $nbr%3==0 || $nbr%5==0 || $nbr%7==0 ){
            
        }
        else {
            echo $nbr."<br>";
        }
        $nbr++;
    }
?>