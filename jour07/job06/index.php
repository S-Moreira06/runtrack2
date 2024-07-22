<?php

    
    function leetSpeak($str){
        $a = 0;
        $b = strlen($str);
       while ($a != $b) {
           if( $str[$a] == 'a' || $str[$a] == 'A'){
               $str[$a] = 4;
           }
           elseif ($str[$a] == 'b' || $str[$a] == 'B'){
               $str[$a] = 8;
           }
           elseif ($str[$a] == 'e' || $str[$a] == 'E'){
               $str[$a] = 3;
           }
           elseif ($str[$a] == 'g' || $str[$a] == 'G'){
               $str[$a] = 6;
           }
           elseif ($str[$a] == 'l' || $str[$a] == 'L'){
               $str[$a] = 1;
           }
           elseif ($str[$a] == 's' || $str[$a] == 'S'){
               $str[$a] = 5;
           }
           elseif ($str[$a] == 't' || $str[$a] == 'T'){
               $str[$a] = 7;
           }
           $a++;
       }
        return $str;
    }
    echo leetSpeak('Tout est relatif, mais on reste positif!');
?>