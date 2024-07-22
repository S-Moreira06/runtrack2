<?php
$largeur = 20; 
$hauteur = 10;
$ligne = 0 ;
$colone = 0;

while ($colone <= $hauteur ){
    if ($colone == 0) {
        while ($ligne < $largeur){
            echo "_";
            $ligne++;
        };
    }
    elseif($colone != 0 && $colone <= 9){
        while ($ligne <= $largeur){
            if($ligne == 0 || $ligne == 20){
                echo "|";
                $ligne++;
            }
            else{
                echo "&nbsp ";
                $ligne++;
            }
        }; 
    }
    elseif($colone == $hauteur) {
        while ($ligne <= $largeur){
            if($ligne == 0 || $ligne == 20){
                    echo "|";
                    $ligne++;
                }
                else{
                    echo "_";
                    $ligne++;
                }
        }

    };
    echo "<br>";
    $ligne=0;
    $colone++;    
}

?>
