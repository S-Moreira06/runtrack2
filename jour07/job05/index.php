<?php 

    function occurrences($str, $char){
     $o = 0;   
        for ($i = 0 ; $i < strlen($str); $i++)
        {
            if ($str[$i] == $char)
            {
                $o++;  
            }
            else {
                
            }
        }
       
        return $o;
    };

    echo occurrences("bonjour","o");
    
?>