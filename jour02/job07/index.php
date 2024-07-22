<?php
    $hauteur = 5;
    $ligne1 = 0;
    $ligne2 = 0;
    $ligne3 = 0;
    $ligne4 = 0;
    $ligne5 = 0;

    while($ligne1 != 6){
        if ($ligne1 < 4){
            echo "&nbsp ";
            $ligne1++;
        }
        elseif ($ligne1==4){
            echo "/";
            $ligne1++;
        }
        elseif ($ligne1==5){
            echo "\<br>";
            $ligne1++;
        }
    };
    
    while($ligne2 != 7){
        if ($ligne2 < 3){
            echo "&nbsp ";
            $ligne2++;
        }
        elseif ($ligne2 == 3){
            echo "/";
            $ligne2++;
        }
        elseif ($ligne2 >= 4 && $ligne2 <=5){
            echo "&nbsp ";
            $ligne2++;
        }
        elseif ($ligne2==6){
            echo "\<br>";
            $ligne2++;
        }
    };
    while($ligne3 != 8){
        if($ligne3 < 2){
            echo "&nbsp ";
            $ligne3++;   
        }
        elseif ($ligne3 == 2){
            echo "/";
            $ligne3++;
        }
        elseif ($ligne3 >= 3 && $ligne3 <= 6){
            echo "&nbsp ";
            $ligne3++;   
        }
        elseif ($ligne3 == 7){
            echo "\<br>";
            $ligne3++;
        }
    }
    while($ligne4 != 9){
            if($ligne4 < 1){
                echo "&nbsp ";
                $ligne4++;   
            }
            elseif ($ligne4 == 1){
                echo "/";
                $ligne4++;
            }
            elseif ($ligne4 >= 2 && $ligne4 <= 7){
                echo "&nbsp ";
                $ligne4++;   
            }
            elseif ($ligne4 == 8){
                echo "\<br>";
                $ligne4++;
            }
        }
    while($ligne5 != 10){
        if ($ligne5 == 0 ){
            echo "/";
            $ligne5++;
        }
        elseif ($ligne5 == 9) {
            echo "\\";
            $ligne5++;
        }
        else {
            echo "_";
            $ligne5++;
        }
    }
    
?>  


   