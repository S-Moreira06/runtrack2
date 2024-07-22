<?php 
    $voy = ['a','e','i','o','u','y','I'];
    
    $txt = "I'm sorry Dave I'm afraid I can't do that.";
   
    $a = 0;
    $b = strlen($txt);

    while ($a != $b)
    {
        if ($txt[$a] == $voy[0] || $txt[$a] == $voy[1] || $txt[$a] == $voy[2] || $txt[$a] == $voy[3] || $txt[$a] == $voy[4] || $txt[$a] == $voy[5] || $txt[$a] == $voy[6]){
            echo $txt[$a];
        }
        $a++;
    }

?>